<?php
/*
 * COba yaaa.php, Mar 31, 2015 9:44:29 PM    
 * 
 * Andedi Tarmadi
 * 
 * 
 * ----------------
 * Tumbas Wiralodra
 * Email : andedi.foss@gmail.com
 * 087829986468
 */
if (!defined('BASEPATH'))
  exit('No direct script access allowed');
?>

<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-list"></i> <?php echo $title; ?></h3>
    <div class="pull-right">
      <button class="btn btn-sm btn-success" onclick="doAdd();"><i class="fa fa-plus"></i> Tambah</button>
    </div>
  </div>
  <div class="box-body no-padding">
    <div id="toolbar" style="margin-bottom: 30px;">
      <div class="col-md-4">
        <div class="input-group input-group-sm">
          <input id="search_txt" type="text" class="form-control search" autofocus="">
          <span class="input-group-btn">
            <button id="search_btn" class="btn btn-success search" type="button"><i class="fa fa-search"></i> Cari</button>
          </span>
        </div>
      </div>
    </div>

    <table class="table table-bordered table-condensed table-hover" id="dataTable" style="width: 100%">
      <thead>
        <tr>
          <th style="width: 5%">No</th>
          <th style="width: 25%">Nama</th>
          <th style="width: 30%">Grup</th>
          <th style="width: 30%">Nomor Telepon</th>
          <th style="width: 10%">Aksi</th>
        </tr>
      </thead>
    </table>

  </div>
</div>

<script>

        function doAdd() {
          showModal('<?php echo base_url('messaging/phonebook/add'); ?>', '#name');
        }

        function doEdit(url) {
          showModal(url, '#phonebook_no');
        }

        function doDelete(id, name) {
          showConfirmation('Lanjutkan menghapus rekening "<b>' + name + '</b>" ? ', 'confirm', function() {
            $.ajax({
              url: '<?php echo base_url('messaging/phonebook/delete'); ?>',
              type: 'post',
              data: {phonebook_id: id, phonebook_name: name, '<?php echo $csrf_token ?>' : '<?php echo $csrf_hash; ?>'},
              dataType: 'json',
//              success: function(data) {
//                showNotification(data.message, data.status);
//              },
              complete: function() {
                reloadTable('dataTable');
              }
            });
          });
        }

        $(document).ready(function() {
          $('#dataTable').DataTable({
            "ajax": {
              "url": "<?php echo base_url('messaging/phonebook/get_list'); ?>",
              "data": function(d) {
                d.search = $('#search_txt').val();
              }
            },
            "columns": [
              {"data": "no", orderable: false, className: 'text-center'},
              {"data": "name"},
              {"data": "phonebook_group_name"},
              {"data": "phone_number"},
              {"data": "action", orderable: false, className: 'text-center'}
            ],
          });

          $('#search_btn').on('click', function() {
            reloadTable('dataTable');
          });

          $('#search_txt').on('keyup', function(e) {
            if (e.which == 13)
              reloadTable('dataTable');
          });

        });

</script>