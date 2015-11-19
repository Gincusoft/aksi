<?php

/*
  Document   : Journals_model
  Created on : Jun 25, 2015, 8:19:18 PM
  Author     : tumbas
  Description:
  Purpose of the Class follows.
 */

/**
 * Description of Journals_model
 *
 * @author tumbas
 */
class Inbox_model extends Tumbas_Model {

  public function __construct() {
    parent::__construct();
  }

  /**
   * Journals List for datatable
   * 
   * @param string $search
   * @param string $order_column
   * @param string $order_direction
   * @param int $limit
   * @param int $offset
   * 
   * @return json
   */
  function get_list($search, $order_column, $order_direction, $limit, $offset) {
    $where = "";
    if ($search != '') {
      $where .= " WHERE sms_sender LIKE '%$search%' ";
    }

    $sql = " SELECT * FROM (
      SELECT ReceivingDateTime AS sms_date, SenderNumber AS sms_sender, TextDecoded AS sms_text, isRead FROM inbox ib JOIN (SELECT MAX(ID) AS max_id FROM inbox GROUP BY SenderNumber) AS t3 ON t3.max_id = ib.ID
      UNION ALL
						SELECT InsertIntoDB AS sms_date, DestinationNumber AS sms_sender, TextDecoded AS sms_text, 1 as isRead FROM outbox ob JOIN (SELECT MAX(ID) AS max_id FROM outbox GROUP BY DestinationNumber) AS t1 ON t1.max_id = ob.ID
						UNION ALL
                        SELECT InsertIntoDB AS sms_date, DestinationNumber AS sms_sender, TextDecoded AS sms_text, 1 as isRead FROM sentitems si JOIN (SELECT MAX(ID) AS max_id FROM sentitems GROUP BY DestinationNumber) AS t2 ON t2.max_id = si.ID
                ) AS t1
                {$where}
              GROUP BY sms_sender
            ORDER BY {$order_column} {$order_direction}
            LIMIT {$limit} OFFSET {$offset}";
    $data['rows'] = $this->db->query($sql)->result();
//    die($this->db->last_query())
    $sql = "SELECT COUNT(DISTINCT sms_sender) AS count FROM (
							 SELECT InsertIntoDB AS sms_date, DestinationNumber AS sms_sender, TextDecoded AS sms_text FROM outbox
                             UNION ALL
                             SELECT InsertIntoDB AS sms_date, DestinationNumber AS sms_sender, TextDecoded AS sms_text FROM sentitems
                             UNION ALL
                             SELECT ReceivingDateTime AS sms_date, SenderNumber AS sms_sender, TextDecoded AS sms_text FROM inbox 
                ) AS t1 {$where}";
    $data['total'] = $this->db->query($sql)->row()->count;

    return $data;
  }

  public function insert_inbox() {
//    $sms_no = $this->input->post('dest_number');

    $dest_numbers = explode(',', $this->input->post('dest_number'));
    foreach ($dest_numbers as $sms_no) {
      $data = array(
//        'SendingDateTime' => '2015-11-10 08:35:00',
          'DestinationNumber' => preg_replace("/^0/", "+62", trim($sms_no)),
          'TextDecoded' => $this->input->post('sms_text'),
          'CreatorID' => 'Gammu',
          'Coding' => 'Default_No_Compression'
      );

      $this->db->insert('outbox', $data);
    }
  }

  public function get_sms_by_phone_number($param = 0) {
//    $param1 = '0' . strstr($param, '8');
    $sql = "SELECT * FROM (
            SELECT InsertIntoDB AS sms_date, SenderID AS sender_id, TextDecoded AS sms_text, 1 AS sms_type, 'On Process' AS status,  LEFT(UDH, 11) AS udh FROM outbox WHERE DestinationNumber = '{$param}'
            UNION ALL
            SELECT InsertIntoDB AS sms_date, SenderID AS sender_id, TextDecoded AS sms_text, 2 AS sms_type, status,  LEFT(UDH, 11) AS udh FROM sentitems WHERE DestinationNumber = '{$param}'
            UNION ALL    
            SELECT ReceivingDateTime AS sms_date, SenderNumber AS sender_id, TextDecoded AS sms_text, 3 AS sms_type, 'Received' AS status,  LEFT(UDH, 11) AS udh FROM inbox WHERE SenderNumber = '{$param}'
                ) AS t1
            ORDER BY sms_date ASC";

    return $this->db->query($sql)->result();
  }

  public function set_read($param = 0) {
    $data = array(
        'isRead' => 1,
    );
    $this->db->where(array(
        'SenderNumber' => $param,
        'isRead' => 0
    ));
    $this->db->update('inbox', $data);
  }

  public function delete($no = 0) {
    $this->db->trans_start();
    $this->db->delete('outbox', array('DestinationNumber' => $no));
    $this->db->delete('sentitems', array('DestinationNumber' => $no));
    $this->db->delete('inbox', array('SenderNumber' => $no));
    $this->db->trans_complete();

    return $this->db->trans_status();
  }

  public function get_uncheck_inbox() {
    $this->db->where(array('isChecked' => 0));
    $query = $this->db->get('inbox');

    return $query->result();
  }

  public function set_checked_inbox() {
    $data = array(
        'isChecked' => 1
    );
    $this->db->update('inbox', $data);
  }

}

?>