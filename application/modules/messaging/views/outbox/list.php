<?php
/*
  Document   : outbox_list
  Created on : Jun 25, 2015, 8:22:17 PM
  Author     : tumbas
  Description:
  Purpose of the PHP File follows.
 */

if (!defined('BASEPATH'))
  exit('No direct script access allowed');
?>

<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-list"></i> <?php echo $title; ?></h3>
    <div class="pull-right">
      <button class="btn btn-sm btn-success" onclick="doAdd();"><i class="fa fa-plus"></i> Pesan Baru</button>
    </div>
  </div>
  <div class="box-body no-padding">
    <div class="row">
      <div id="toolbar">
        <div class="col-md-4">
          <div class="input-group input-group-sm">
            <input id="search_txt" type="text" class="form-control search" autofocus="">
            <span class="input-group-btn">
              <button id="search_btn" class="btn btn-success search" type="button"><i class="fa fa-search"></i> Cari</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <table class="table table-bordered table-condensed table-hover" id="dataTable" style="width: 100%">
      <thead>
        <tr>
          <th style="width: 5%">No</th>
          <th style="width: 15%">Tanggal</th>
          <th style="width: 10%">No. Tujuan</th>
          <th style="width: 12%">Nama</th>
          <th style="width: 12%">Grup</th>
          <th>Isi Pesan</th>
          <th style="width: 5%"></th>
        </tr>
      </thead>
    </table>

  </div>
</div>
<div id="result"></div>
<script>

        function doDetail(url, el) {
          showModal(url, '#sms_text');
          $(el).parent().parent().removeAttr('style');
        }

        function doAdd() {
          showModal('<?php echo base_url('messaging/outbox/new_sms'); ?>', '#dest_number');
        }

        function doDelete(id) {
          showConfirmation('Lanjutkan menghapus pesan ini? ', 'confirm', function() {
            $.ajax({
              url: '<?php echo base_url('messaging/outbox/delete'); ?>',
              type: 'post',
              data: {outbox_id: id},
              dataType: 'json',
              success: function(data) {
                if (data.status == 'error')
                  showNotification(data.message, data.status);
              },
              complete: function() {
                reloadTable('dataTable');
              }
            });
          });
        }

        $(document).ready(function() {
          $('#journals_date').datepicker({
            autoclose: true,
            todayHighlight: true,
            todayBtn: true,
            format: 'dd MM yyyy',
            language: 'id'
          });

          $('#dataTable').DataTable({
            // paging: false,
            order: [[1, 'desc']],
            "ajax": {
              "url": "<?php echo base_url('messaging/outbox/get_list'); ?>",
              "data": function(d) {
                d.search = $('#search_txt').val();
              }
            },
            "columns": [
              {"data": "no", orderable: false, className: 'text-center'},
              {"data": "sms_date"},
              {"data": "dest_no", orderable: false},
              {"data": "name", orderable: false},
              {"data": "phonebook_group_name", orderable: false},
              {"data": "sms_text", orderable: false},
              {"data": "action", orderable: false, className: 'text-center'}
            ],
            createdRow: function(row, data, dataIndex) {
              if (data.status == 'SendingError') {
                $(row).addClass('text-red');
                $(row).find('a').removeClass('text-black');
                $(row).find('a').addClass('text-red');
              }
            }
          });

          $('#search_btn').on('click', function() {
            reloadTable('dataTable');
          });

          $('#search_txt').on('keyup', function(e) {
            if (e.which == 13)
              reloadTable('dataTable');
          });

          //Realtime updates
          var source = new EventSource("<?php echo base_url('messaging/outbox/check_outbox'); ?>");
          source.onmessage = function(event) {
            if (event.data != '') {
              notifyMe(event.data);
              reloadTable('dataTable');
            }
          };

        });

        // request permission on page load
        document.addEventListener('DOMContentLoaded', function() {
          if (Notification.permission !== "granted")
            Notification.requestPermission();
        });

        function notifyMe(textMessage) {
          if (!Notification) {
            alert('Notifikasi tidak mendukung pada peramban anda. Coba menggunakan Google Chrome.');
            return;
          }

          if (Notification.permission !== "granted")
            Notification.requestPermission();
          else {
            var notification = new Notification('Notifikasi', {
              icon: '<?php echo base_url('assets/images/logo-mini.jpg'); ?>',
              body: textMessage,
            });

            notification.onclick = function() {
              alert('eo');
//              doDetail();
            };

          }

        }

</script>