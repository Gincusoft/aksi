<page backbottom="30px"> 
<!--  <page_header> 

  </page_header> -->
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      font-size: 10px;
    }
    table th {
      text-align: center;
    }
    table, td, th {
      border: 1px solid black;
    }
    .table_no_border td, .table_no_border th {
      border: 0px solid black;
    }
    td {
      vertical-align: top;
    }
    .center {
      text-align: center;
    }
    .right {
      text-align: right;
    }
  </style>
  <div class="">
    <span style="font-size: 16xp; font-weight: bold;"><?php echo $rows[0]->account_no . ' - ' . $rows[0]->account_name; ?></span><br>
  </div>
  <table style="width: 100%">
    <tr>
      <th rowspan="2" style="width: 5%">No</th>
      <th rowspan="2" style="width: 15%">Tanggal</th>
      <th rowspan="2" style="width: 15%">No Bukti</th>
      <th rowspan="2" style="width: 25%">Keterangan</th>
      <th rowspan="2" style="width: 10%">Debet</th>
      <th rowspan="2" style="width: 10%">Kredit</th>
      <th colspan="2" style="width: 20%" class="text-center">Saldo</th>
    </tr>
    <tr>
      <th style="width: 10%">Debet</th>
      <th style="width: 10%">Kredit</th>
    </tr>
    <?php
    foreach ($rows as $value) {
      echo "
    <tr>
      <td style='text-align:center'>{$value->no}</td>
      <td>{$value->journals_date}</td>
      <td>{$value->transaction_id}</td>
      <td>{$value->remark}</td>
      <td style='text-align:right'>{$value->debit_txt}</td>
      <td style='text-align:right'>{$value->credit_txt}</td>
      <td style='text-align:right'>{$value->saldo_debit}</td>
      <td style='text-align:right'>{$value->saldo_credit}</td>
    </tr>
    ";
    }
    ?>
  </table>
</page> 