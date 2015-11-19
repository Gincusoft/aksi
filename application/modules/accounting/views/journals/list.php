<?php
/*
  Document   : journals_list
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
      <!--<a href="<?php echo base_url('accounting/journals/add'); ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah</a>-->
      <button class="btn btn-sm btn-success" onclick="doAdd();"><i class="fa fa-plus"></i> Tambah</button>
    </div>
  </div>
  <div class="box-body no-padding">
    <form class="form-horizontal" target="_blank" action="<?php echo base_url('accounting/journals/print_report'); ?>">
      <div id="toolbar">
        <div class="col-md-3">
          <div class="form-group form-group-sm">
            <label class="control-label col-md-4">Periode</label>
            <div class="col-md-8">
              <?php echo form_dropdown('month', $month_list, $month_now, 'class="form-control" id="month"') ?>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group form-group-sm">
            <div class="col-md-12">
              <?php echo form_dropdown('year', $year_list, $year_now, 'class="form-control" id="year"') ?>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="input-group input-group-sm">
            <input id="search_txt" type="text" class="form-control search" autofocus="">
            <span class="input-group-btn">
              <button id="search_btn" class="btn btn-success search" type="button"><i class="fa fa-search"></i> Cari</button>
            </span>
          </div>
        </div>
        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-print"></i> Cetak</button>
      </div>
    </form>

    <table class="table table-bordered table-condensed table-hover" id="dataTable" style="width: 100%">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>No Bukti</th>
          <th>No Rekening</th>
          <th style="width: 20%">Nama Rekening</th>
          <th style="width: 20%">Keterangan</th>
          <th>Debet</th>
          <th>Kredit</th>
          <th></th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th colspan="6">Total</th>
          <th id="total-debit">0</th>
          <th id="total-credit">0</th>
          <th></th>
        </tr>
      </tfoot>
    </table>

  </div>
</div>

<script>

        function doAdd() {
          showModal('<?php echo base_url('accounting/journals/add'); ?>', '#transaction_id');
        }

        function doEdit(url) {
          showModal(url, '#transaction_id');
        }

        function doDelete(id) {
          showConfirmation('Lanjutkan menghapus jurnal ini? ', 'confirm', function() {
            $.ajax({
              url: '<?php echo base_url('accounting/journals/delete'); ?>',
              type: 'post',
              data: {journals_id: id},
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
          
          $('#dataTable').DataTable({
            paging: false,
            order: [[1, 'asc']],
            "ajax": {
              "url": "<?php echo base_url('accounting/journals/get_list'); ?>",
              "type": "POST",
              "data": function(d) {
                d.search = $('#search_txt').val();
                d.month = $('#month').val();
                d.year = $('#year').val();
              }
            },
            "columns": [
              {"data": "no", orderable: false, className: 'text-center'},
              {"data": "journals_date"},
              {"data": "transaction_id", orderable: false},
              {"data": "account_no", orderable: false},
              {"data": "account_name", orderable: false},
              {"data": "remark", orderable: false},
              {"data": "debit_txt", className: 'text-right', orderable: false},
              {"data": "credit_txt", className: 'text-right', orderable: false},
              {"data": "action", orderable: false, className: 'text-center'}
            ],
            "footerCallback": function(tfoot, data, start, end, display) {
              var totalDebit = 0;
              var totalCredit = 0;
              for (var i = 0; i < data.length; i++) {
                var debit = (data[i].debit).replace('.', '');
                totalDebit += parseInt(debit);

                var credit = (data[i].credit).replace('.', '');
                totalCredit += parseInt(credit);
              }
              var nCells = tfoot.getElementsByTagName('th');
              nCells[1].innerHTML = idr_currency_format(totalDebit);
              nCells[2].innerHTML = idr_currency_format(totalCredit);
            }
//            'drawCallback': function() {
//              totalDebit = 0;
//              totalCredit = 0;
//            },
//            "createdRow": function(row, data, dataIndex) {
//              var debit = (data.debit).replace('.', '');
//              totalDebit += parseInt(debit);
//              $('#total-debit').html(idr_currency_format(totalDebit));
//              console.log(totalDebit);
//
//              var credit = (data.credit).replace('.', '');
//              totalCredit += parseInt(credit);
//              $('#total-credit').html(idr_currency_format(totalCredit));
//              console.log(totalCredit);
//            }
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