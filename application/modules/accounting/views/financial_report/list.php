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
    <h3 class="box-title"><i class="fa fa-list"></i> Laporan Laba Rugi</h3>
  </div>
  <div class="box-body no-padding">
    <form action="<?php echo base_url('accounting/financial_report/print_report'); ?>" class="form-horizontal" target="_blank">
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
              <button id="search_btn" class="btn btn-success search" type="button" name="search" value="1"><i class="fa fa-search"></i> Cari</button>
            </span>
          </div>
        </div>
        <button type="submit" name="print" value="1" class="btn btn-sm btn-success"><i class="fa fa-print"></i> Cetak</button>
      </div>
    </form>

    <table class="table table-bordered table-condensed table-hover" id="dataTable" style="width: 100%">
      <thead>
        <tr>
          <th style="width: 5%" class="text-center">No</th>
          <th style="width: 15%">No Rekening</th>
          <th style="width: 50%">Nama Rekening</th>
          <th style="width: 15%" class="text-right">Debet</th>
          <th style="width: 15%" class="text-right">Kredit</th>
        </tr>
      </thead>
      <tbody>
        <?php
//        $total_debit = 0;
//        $total_credit = 0;
//        foreach ($loss_profit as $key => $value) {
//          $key++;
//          $saldo = $value->debit - $value->credit;
//          if ($saldo > 0) {
//            $total_debit += $saldo;
//            $value->debit = format_idr_currency($saldo);
//            $value->credit = 0;
//          } else if ($saldo < 0) {
//            $total_credit += abs($saldo);
//            $value->credit = format_idr_currency(abs($saldo));
//            $value->debit = 0;
//          } else {
//            $value->debit = 0;
//            $value->credit = 0;
//          }
//
//          echo "<tr>
//            <td class='text-center'>{$key}</td>
//            <td>$value->account_no</td>
//            <td>$value->account_name</td>
//            <td class='text-right'>$value->debit</td>
//            <td class='text-right'>$value->credit</td>
//            </tr>";
//        }
//
//        $loss_profit_saldo = $total_credit - $total_debit;
//        if ($loss_profit_saldo > 0) {
//          $loss_profit_label = 'Laba';
//        } else {
//          $loss_profit_label = 'Rugi';
//        }
        ?>
      </tbody>
      <tfoot>
        <tr>
          <th class='text-right' colspan="3">Total</th>
          <th class='text-right'><?php //echo format_idr_currency($total_debit);                  ?></th>
          <th class='text-right'><?php //echo format_idr_currency($total_credit);                  ?></th>
        </tr>
        <tr>
          <th colspan="3"></th>
          <th class="text-right" id="loss-profit-label">0<?php //echo $loss_profit_label;                  ?></th>
          <th class="text-right" id="loss-profit-balance"><u>0<?php //echo format_idr_currency(abs($loss_profit_saldo));                  ?></u></th>
      </tr> 
      </tfoot>
    </table>

  </div>  
</div>

<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-list"></i> Laporan Perubahan Modal</h3>
  </div>
  <div class="box-body no-padding">
    <table class="table table-bordered table-condensed table-hover" id="dataTable2" style="width: 100%">
      <thead>
        <tr>
          <th style="width: 5%" class="text-center">No</th>
          <th style="width: 15%">No Rekening</th>
          <th style="width: 50%">Nama Rekening</th>
          <th style="width: 15%" class="text-right">Debet</th>
          <th style="width: 15%" class="text-right">Kredit</th>
        </tr>
      </thead>
      <tbody>
        <?php
//        $total_debit = 0;
//        $total_credit = 0;
//        $capital = 0;
//        foreach ($capital_changes as $key => $value) {
//          $key++;
//          $saldo = $value->debit - $value->credit;
//          $capital += $saldo;
//          if ($saldo > 0) {
//            $value->debit = format_idr_currency($saldo);
//            $value->credit = 0;
//          } else if ($saldo < 0) {
//            $value->debit = 0;
//            $value->credit = format_idr_currency(abs($saldo));
//          } else {
//            $value->debit = 0;
//            $value->credit = 0;
//          }
//
//          echo "<tr>
//            <td class='text-center'>{$key}</td>
//            <td>$value->account_no</td>
//            <td>$value->account_name</td>
//            <td class='text-right'>$value->debit</td>
//            <td class='text-right'>$value->credit</td>
//            </tr>";
//        }
//
//        if ($loss_profit_saldo > 0) {
//          $capital_debit = 0;
//          $capital_credit = $loss_profit_saldo;
//          $total_credit = $capital - $loss_profit_saldo;
//        } else {
//          $capital_debit = $loss_profit_saldo;
//          $capital_credit = 0;
//          $total_debit = $capital - $loss_profit_saldo;
//        }
        ?>
      </tbody>
      <tfoot>
        <tr>
          <td></td>
          <td></td>
          <td>Laba Rugi Bersih<?php //echo $loss_profit_label;      ?></td>
          <td class='text-right'>0<?php //echo ($loss_profit_balance < 0) ? format_idr_currency(abs($loss_profit_balance)):'0';      ?></td>
          <td class='text-right'>0<?php //echo ($loss_profit_balance > 0) ? format_idr_currency($loss_profit_balance):'0';      ?></td>
        </tr>
        <tr>
          <th colspan="3" class="text-right">Total</th>
          <th class="text-right" id="loss-profit-debit">0</th>
          <th class="text-right" id="loss-profit-credit">0</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>

<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-list"></i> Laporan Neraca</h3>
  </div>
  <div class="box-body no-padding">
    <table class="table table-bordered table-condensed table-hover" id="dataTable3" style="width: 100%">
      <thead>
        <tr>
          <th style="width: 5%">No</th>
          <th style="width: 15%">No Rekening</th>
          <th style="width: 50%">Nama Rekening</th>
          <th style="width: 15%" class="text-right">Debet</th>
          <th style="width: 15%" class="text-right">Kredit</th>
        </tr>
      </thead>
      <tbody>
        <?php
//        $total_debit = 0;
//        $total_credit = 0;
//        foreach ($balance as $key => $value) {
//          $key++;
//          
//          //capital changes
//          if ($value->account_no == '300') {
//            $capital = $value->credit + $loss_profit_saldo;
//            if ($capital > 0) { //positif
//              $value->debit = 0;
//              $value->credit = $capital;
//            } else { //minus
//              $value->debit = $capital;
//              $value->credit = 0;
//            }
//          }
//          
//          $saldo = $value->debit - $value->credit;
//          if ($saldo > 0) {
//            $value->debit = format_idr_currency($saldo);
//            $value->credit = 0;
//            $total_debit += $saldo;
//          } else if ($saldo < 0) {
//            $value->debit = 0;
//            $value->credit = format_idr_currency(abs($saldo));
//            $total_credit += abs($saldo);
//          } else {
//            $value->debit = 0;
//            $value->credit = 0;
//          }
//
//          echo "<tr>
//            <td class='text-center'>{$key}</td>
//            <td>$value->account_no</td>
//            <td>$value->account_name</td>
//            <td class='text-right'>$value->debit</td>
//            <td class='text-right'>$value->credit</td>
//            </tr>";
//        }
        ?>
      <tfoot>
        <tr>
          <th colspan="3" class="text-right">Total</th>
          <th class="text-right"><?php //echo format_idr_currency(abs($total_debit));                  ?></th>
          <th class="text-right"><?php //echo format_idr_currency(abs($total_credit));                  ?></th>
        </tr>
      </tfoot>
      </tbody>
    </table>

  </div>
</div>

<script>
  $(document).ready(function() {
    //begin table 1
    var lossProfitBalance = 0;
    $('#dataTable').DataTable({
      paging: false,
      info: false,
      "ajax": {
        "url": "<?php echo base_url('accounting/financial_report/get_loss_profit_list'); ?>",
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

        var saldo = totalCredit - totalDebit;
        if (saldo > 0) {
          $('#loss-profit-label').html('Laba Bersih');
          $('#loss-profit-balance').html(idr_currency_format(saldo));
          $('#loss-profit-balance').addClass('text-green');
        } else if (saldo < 0) {
          $('#loss-profit-label').html('Rugi Bersih');
          $('#loss-profit-balance').html(idr_currency_format(Math.abs(saldo)));
          $('#loss-profit-balance').addClass('text-red');
        }
        lossProfitBalance = saldo;
      }
    });
    // end table 1

    //begin table 2
    $('#dataTable2').DataTable({
      paging: false,
      info: false,
      "ajax": {
        "url": "<?php echo base_url('accounting/financial_report/get_capital_changes_list'); ?>",
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
//        console.log(lossProfitBalance);
        var nCells = tfoot.getElementsByTagName('td');
        if (lossProfitBalance > 0) {
          nCells[2].innerHTML = 'Laba Bersih';
          nCells[4].innerHTML = idr_currency_format(lossProfitBalance);
        } else if (lossProfitBalance < 0) {
          nCells[2].innerHTML = 'Rugi Bersih';
          nCells[3].innerHTML = idr_currency_format(Math.abs(lossProfitBalance));
        } else {
          nCells[3].innerHTML = 0;
          nCells[4].innerHTML = 0;
        }

        var saldo = lossProfitBalance + totalCredit - totalDebit;
        if (saldo > 0) {
          $('#loss-profit-credit').html(idr_currency_format(saldo));
        } else {
          $('#loss-profit-credit').html(idr_currency_format(Math.abs(saldo)));
        }

//        nCells[1].innerHTML = idr_currency_format(totalDebit);
//        nCells[2].innerHTML = idr_currency_format(totalCredit);

//        var saldo = totalCredit - totalDebit;
//        if (saldo > 0) {
//          $('#loss-profit-label').html('Laba Bersih');
//          $('#loss-profit-balance').html(idr_currency_format(saldo));
//          $('#loss-profit-balance').addClass('text-green');
//        } else if (saldo < 0) {
//          saldo = Math.abs(saldo);
//          $('#loss-profit-label').html('Rugi Bersih');
//          $('#loss-profit-balance').html(idr_currency_format(saldo));
//          $('#loss-profit-balance').addClass('text-red');
//        }
//        lossProfitBalance = saldo;
      }
    });
    // end table 2

    //begin table 3
    $('#dataTable3').DataTable({
      paging: false,
      info: false,
      "ajax": {
        "url": "<?php echo base_url('accounting/financial_report/get_balance_list'); ?>",
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
      "rowCallback": function(row, data, index) {
        if (data.account_no == "300") {
          data.credit += lossProfitBalance;
          data.credit_txt = idr_currency_format(data.credit);
          $('td:eq(4)', row).html(data.credit_txt);
        }
      },
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

//        var saldo = totalCredit - totalDebit;
//        if (saldo > 0) {
//          $('#saldo-txt').html('Laba Bersih');
//          $('#saldo').html(idr_currency_format(saldo));
//          $('#saldo').addClass('text-green');
//        } else if (saldo < 0) {
//          $('#saldo-txt').html('Rugi Bersih');
//          $('#saldo').html(idr_currency_format(Math.abs(saldo)));
//          $('#saldo').addClass('text-red');
//        }

      }
    });
    // end table 3

    $('#search_btn').on('click', function() {
      $('#loss-profit-balance').html(0);
      lossProfitBalance = 0;
      reloadTable('dataTable');
      reloadTable('dataTable2');
      reloadTable('dataTable3');
    });
//
//          $('#search_txt').on('keyup', function(e) {
//            if (e.which == 13)
//              reloadTable('dataTable');
//          });

  });

</script>