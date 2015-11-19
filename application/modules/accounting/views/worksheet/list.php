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
    <form action="<?php echo base_url('accounting/worksheet/print_report'); ?>" class="form-horizontal" target="_blank">
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
          <th rowspan="2">No</th>
          <th rowspan="2">No Rekening</th>
          <th rowspan="2">Nama Rekening</th>
          <th colspan="2" class="text-center">Neraca Saldo</th>
          <th colspan="2" class="text-center">Penyesuaian</th>
          <th colspan="2" class="text-center">NSSP</th>
          <th colspan="2" class="text-center">Laba Rugi</th>
          <th colspan="2" class="text-center">Neraca</th>
        </tr>
        <tr>
          <th>Debet</th>
          <th>Kredit</th>
          <th>Debet</th>
          <th>Kredit</th>
          <th>Debet</th>
          <th>Kredit</th>
          <th>Debet</th>
          <th>Kredit</th>
          <th>Debet</th>
          <th>Kredit</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th colspan="3">Total</th>
          <th>0</th>
          <th>0</th>
          <th>0</th>
          <th>0</th>
          <th>0</th>
          <th>0</th>
          <th>0</th>
          <th>0</th>
          <th>0</th>
          <th>0</th>
        </tr>
        <tr>
          <th colspan="9" class="text-right" id="saldo-txt">Laba / Rugi Bersih</th>
          <th class="text-right" id="profit-loss-debit4">0</th>
          <th class="text-right" id="profit-loss-credit4">0</th>
          <th class="text-right" id="profit-loss-debit5">0</th>
          <th class="text-right" id="profit-loss-credit5">0</th>
        </tr>
        <tr>
          <th class="text-right" colspan="9"></th>
          <th class="text-right" id="saldo-debit4">0</th>
          <th class="text-right" id="saldo-credit4">0</th>
          <th class="text-right" id="saldo-debit5">0</th>
          <th class="text-right" id="saldo-credit5">0</th>
        </tr>
      </tfoot>
    </table>

  </div>
</div>

<table id="dg" style="width: 100%"></table>

<script>
  //begin ready
  $(document).ready(function() {
    $('#dataTable').DataTable({
      paging: false,
      info: false,
      ordering: false,
      "ajax": {
        "url": "<?php echo base_url('accounting/worksheet/get_list'); ?>",
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
        {"data": "debit1_txt", className: 'text-right', orderable: false},
        {"data": "credit1_txt", className: 'text-right', orderable: false},
        {"data": "debit2_txt", className: 'text-right', orderable: false},
        {"data": "credit2_txt", className: 'text-right', orderable: false},
        {"data": "debit3_txt", className: 'text-right', orderable: false},
        {"data": "credit3_txt", className: 'text-right', orderable: false},
        {"data": "debit4_txt", className: 'text-right', orderable: false},
        {"data": "credit4_txt", className: 'text-right', orderable: false},
        {"data": "debit5_txt", className: 'text-right', orderable: false},
        {"data": "credit5_txt", className: 'text-right', orderable: false},
      ],
      "footerCallback": function(tfoot, data, start, end, display) {
        var nCells = tfoot.getElementsByTagName('th');
        //Neraca Saldo
        var totalDebit1 = 0;
        var totalCredit1 = 0;
        for (var i = 0; i < data.length; i++) {
          var debit1 = (data[i].debit1);
          totalDebit1 += parseInt(debit1);

          var credit1 = (data[i].credit1);
          totalCredit1 += parseInt(credit1);
        }
        nCells[1].innerHTML = idr_currency_format(totalDebit1);
        nCells[2].innerHTML = idr_currency_format(totalCredit1);
        //Penyesuaian
        var totalDebit2 = 0;
        var totalCredit2 = 0;
        for (var i = 0; i < data.length; i++) {
          var debit2 = (data[i].debit2);
          totalDebit2 += parseInt(debit2);

          var credit2 = (data[i].credit2);
          totalCredit2 += parseInt(credit2);
        }
        nCells[3].innerHTML = idr_currency_format(totalDebit2);
        nCells[4].innerHTML = idr_currency_format(totalCredit2);
        //Neraca saldo setelah penyesuaian
        var totalDebit3 = 0;
        var totalCredit3 = 0;
        for (var i = 0; i < data.length; i++) {
          var debit3 = (data[i].debit3);
          totalDebit3 += parseInt(debit3);

          var credit3 = (data[i].credit3);
          totalCredit3 += parseInt(credit3);
        }
        nCells[5].innerHTML = idr_currency_format(totalDebit3);
        nCells[6].innerHTML = idr_currency_format(totalCredit3);
        // Laba rugi
        var totalDebit4 = 0;
        var totalCredit4 = 0;
        for (var i = 0; i < data.length; i++) {
          var debit4 = (data[i].debit4);
          totalDebit4 += parseInt(debit4);

          var credit4 = (data[i].credit4);
          totalCredit4 += parseInt(credit4);
        }
        nCells[7].innerHTML = idr_currency_format(totalDebit4);
        nCells[8].innerHTML = idr_currency_format(totalCredit4);
        // Neraca
        var totalDebit5 = 0;
        var totalCredit5 = 0;
        for (var i = 0; i < data.length; i++) {
          var debit5 = (data[i].debit5);
          totalDebit5 += parseInt(debit5);

          var credit5 = (data[i].credit5);
          totalCredit5 += parseInt(credit5);
        }
        nCells[9].innerHTML = idr_currency_format(totalDebit5);
        nCells[10].innerHTML = idr_currency_format(totalCredit5);

        var saldo = totalCredit4 - totalDebit4;
        if (saldo > 0) {
          $('#saldo-txt').html('Laba Bersih');
          $('#profit-loss-debit4').html(idr_currency_format(saldo));
          $('#profit-loss-debit4').addClass('text-green');
          $('#profit-loss-credit5').html(idr_currency_format(saldo));
          $('#profit-loss-credit5').addClass('text-green');
          totalDebit4 += saldo;
          totalCredit5 += saldo;
        } else if (saldo < 0) {
          saldo = Math.abs(saldo);
          $('#saldo-txt').html('Rugi Bersih');
          saldo = Math.abs(saldo);
          $('#profit-loss-credit4').html(idr_currency_format(saldo));
          $('#profit-loss-credit4').addClass('text-red');
          $('#profit-loss-debit5').html(idr_currency_format(saldo));
          $('#profit-loss-debit5').addClass('text-green');
          totalCredit4 += saldo;
          totalDebit5 += saldo;
        }
        //Summary row
        $('#saldo-debit4').html(idr_currency_format(totalDebit4));
        $('#saldo-credit4').html(idr_currency_format(totalCredit4));
        $('#saldo-debit5').html(idr_currency_format(totalDebit5));
        $('#saldo-credit5').html(idr_currency_format(totalCredit5));
      }
    });

    $('#search_btn').on('click', function() {
      $('#profit-loss-credit4').html(0);
      $('#profit-loss-debit4').html(0);
      $('#profit-loss-credit5').html(0);
      $('#profit-loss-debit5').html(0);
      reloadTable('dataTable');
    });
//
//          $('#search_txt').on('keyup', function(e) {
//            if (e.which == 13)
//              reloadTable('dataTable');
//          });

  });
  //end ready

</script>