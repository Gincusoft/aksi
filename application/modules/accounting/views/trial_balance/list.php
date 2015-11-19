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
  </div>
  <div class="box-body no-padding">
    <form action="<?php echo base_url('accounting/trial_balance/print_report'); ?>" class="form-horizontal" target="_blank">
      <div id="toolbar">
        <div class="col-md-3">
          <div class="form-group form-group-sm">
            <label class="control-label col-md-4">Periode</label>
            <div class="col-md-8">
              <?php echo form_dropdown('month', $month_list, $month_now, 'class="form-control" id="month"') ?>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="input-group input-group-sm">
            <?php echo form_dropdown('year', $year_list, $year_now, 'class="form-control" id="year"') ?>
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
          <th style="width: 5%">No</th>
          <th style="width: 15%">No Rekening</th>
          <th style="width: 50%">Nama Rekening</th>
          <th style="width: 15%">Debet</th>
          <th style="width: 15%">Kredit</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th colspan="3">Total</th>
          <th>0</th>
          <th>0</th>
        </tr>
      </tfoot>
    </table>

  </div>
</div>

<script>
  $(document).ready(function() {
    $('#dataTable').DataTable({
      paging: false,
      info: false,
      "ajax": {
        "url": "<?php echo base_url('accounting/trial_balance/get_list'); ?>",
        "type": "POST",
        "data": function(d) {
          d.month = $('#month').val();
          d.year = $('#year').val();
        }
      },
      "columns": [
        {"data": "no", orderable: false, className: 'text-center'},
        {"data": "account_no", orderable: false},
        {"data": "account_name", orderable: false},
        {"data": "debit_txt", className: 'text-right', orderable: false},
        {"data": "credit_txt", className: 'text-right', orderable: false},
      ],
      "footerCallback": function(tfoot, data, start, end, display) {
        var totalDebit = 0;
        var totalCredit = 0;
        for (var i = 0; i < data.length; i++) {
          var debit = (data[i].debit);
          totalDebit += parseInt(debit);

          var credit = (data[i].credit);
          totalCredit += parseInt(credit);
        }
        var nCells = tfoot.getElementsByTagName('th');
        nCells[1].innerHTML = idr_currency_format(totalDebit);
        nCells[2].innerHTML = idr_currency_format(totalCredit);
      }
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