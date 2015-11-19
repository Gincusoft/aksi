<?php
/*
  Document   : employee_list
  Created on : Jun 25, 2015, 8:22:17 PM
  Author     : tumbas
  Description:
  Purpose of the PHP File follows.
 */

if (!defined('BASEPATH'))
  exit('No direct script access allowed');
?>

<style>
  .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    vertical-align: middle;
  }
</style>

<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-list"></i> <?php echo $title; ?></h3>
    <div class="pull-right">
      <!--<a href="<?php echo base_url('employees/employee/add'); ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah</a>-->
      <button class="btn btn-sm btn-success" onclick="doAdd();"><i class="fa fa-plus"></i> Tambah</button>
    </div>
  </div>
  <div class="box-body no-padding">
    <div id="toolbar" class="input-group input-group-sm col-md-4">
      <input id="search_txt" type="text" class="form-control search" autofocus="">
      <span class="input-group-btn">
        <button id="search_btn" class="btn btn-success search" type="button"><i class="fa fa-search"></i> Cari</button>
      </span>
    </div>

    <table class="table table-bordered table-condensed table-hover" id="dataTable" style="width: 100%">
      <thead>
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>TTL</th>
          <th>Telpon</th>
          <th>Bagian</th>
          <th>Jabatan</th>
          <th></th>
        </tr>
      </thead>
    </table>

  </div>
</div>

<table id="dg" style="width: 100%"></table>

<script>

        function doAdd() {
          showModal('<?php echo base_url('employees/employee/add'); ?>', '#employee_name');
        }

        function doEdit(url) {
          showNotification('Segera rilis.', 'info');
          //showModal(url, '#employee_name');
        }
        
        function viewData(param) {
          showModal('<?php echo base_url('employees/employee/view'); ?>/'+param);
        }
        
        function doDelete(id) {
          showNotification('Segera rilis.', 'info');
//          showConfirmation('Lanjutkan menghapus karyawan ini? ', 'confirm', function() {
//            $.ajax({
//              url: '<?php echo base_url('employees/employee/delete'); ?>',
//              type: 'post',
//              data: {employee_id: id},
//              dataType: 'json',
//              success: function(data) {
//                if (data.status == 'error')
//                  showNotification(data.message, data.status);
//              },
//              complete: function() {
//                reloadTable('dataTable');
//              }
//            });
//          });
        }

        $(document).ready(function() {
          $('#dataTable').DataTable({
//            paging: false,
            order: [[3, 'asc']],
            "ajax": {
              "url": "<?php echo base_url('employees/employee/get_list'); ?>",
              "type": "POST",
              "data": function(d) {
                d.search = $('#search_txt').val();
                d.month = $('#month').val();
                d.year = $('#year').val();
              }
            },
            "columns": [
              {"data": "no", orderable: false, className: 'text-center'},
              {"data": "photo_thumb", orderable: false, className: 'text-center'},
              {"data": "employee_no"},
              {"data": "employee_name"},
              {"data": "birth", orderable: false},
              {"data": "phone", orderable: false},
              {"data": "division_name"},
              {"data": "position_name"},
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