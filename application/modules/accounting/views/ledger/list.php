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
    <!--    <div class="pull-right">
          <button class="btn btn-sm btn-success" onclick="doAdd();"><i class="fa fa-plus"></i> Tambah</button>
        </div>-->
  </div>
  <div class="box-body no-padding">
    <form action="<?php echo base_url('accounting/ledger/print_report'); ?>" class="form-horizontal" target="_blank">
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
            <?php echo form_dropdown('account_id', $account_list, '', 'class="form-control" id="account-id" onchange="//reloadTable(\'dataTable\')"'); ?>
            <span class="input-group-btn">
              <button id="search_btn" class="btn btn-success search" type="button"><i class="fa fa-search"></i> Cari</button>
            </span>
          </div>
        </div>
        <button type="submit" name="print" value="1" class="btn btn-sm btn-success"><i class="fa fa-print"></i> Cetak</button>
      </div>
    </form>

    <table class="table table-bordered table-condensed table-hover" id="dataTable" style="width: 100%">
      <thead>
        <tr>
          <th rowspan="2">No</th>
          <th rowspan="2" style="width: 15%">Tanggal</th>
          <th rowspan="2">No Bukti</th>
          <th rowspan="2">No Rekening</th>
          <th rowspan="2" style="width: 15%">Nama Rekening</th>
          <th rowspan="2" style="width: 20%">Keterangan</th>
          <th rowspan="2">Debet</th>
          <th rowspan="2">Kredit</th>
          <th colspan="2" class="text-center">Saldo</th>
        </tr>
        <tr>
          <th>Debet</th>
          <th>Kredit</th>
        </tr>
      </thead>
<!--      <tfoot>
        <tr>
          <th colspan="6">Total</th>
          <th id="total-debit">0</th>
          <th id="total-credit">0</th>
          <th></th>
        </tr>
      </tfoot>-->
    </table>

  </div>
</div>

<table id="dg" style="width: 100%"></table>

<script>
  $(document).ready(function() {
    $('#dataTable').DataTable({
      paging: false,
      "ajax": {
        "url": "<?php echo base_url('accounting/ledger/get_list'); ?>",
        "type": "POST",
        "data": function(d) {
          d.account_id = $('#account-id').val();
          d.month = $('#month').val();
          d.year = $('#year').val();
        }
      },
      "columns": [
        {"data": "no", orderable: false, className: 'text-center'},
        {"data": "journals_date", orderable: false},
        {"data": "transaction_id", orderable: false},
        {"data": "account_no", orderable: false},
        {"data": "account_name", orderable: false},
        {"data": "remark", orderable: false},
        {"data": "debit_txt", className: 'text-right', orderable: false},
        {"data": "credit_txt", className: 'text-right', orderable: false},
        {"data": "saldo_debit", orderable: false, className: 'text-right'},
        {"data": "saldo_credit", orderable: false, className: 'text-right'}
      ],
    });

          $('#search_btn').on('click', function() {
            reloadTable('dataTable');
          });
//
//          $('#search_txt').on('keyup', function(e) {
//            if (e.which == 13)
//              reloadTable('dataTable');
//          });

  });

</script>