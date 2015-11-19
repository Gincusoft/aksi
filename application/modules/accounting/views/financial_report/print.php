<page backbottom="30px"> 
<!--  <page_header> 

  </page_header> -->
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      font-size: 12px;
    }
    table th {
      text-align: center;
      background: #f0f0f0;
    }
    table, td, th {
      border: 1px solid black;
      padding: 3px;
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
  <!--Laporan laba rugi-->
  <p class="center">
    <span style="font-size: 16px; font-weight: bold;">
      <?php
      echo trim($company_name);
      ?><br>
      Laporan Laba Rugi<br>
    </span>
    Periode : <?php echo $period; ?>
  </p>
  <table style="width: 100%">
    <thead>
      <tr>
        <th style="width: 5%">No</th>
        <th style="width: 15%">No Rekening</th>
        <th style="width: 50%">Nama Rekening</th>
        <th style="width: 15%"></th>
        <th style="width: 15%"></th>
      </tr>
    </thead>
    <tbody>
      <?php
            $total_debit = 0;
            $total_credit = 0;
            foreach ($loss_profit as $key => $value) {
              $key++;
              echo "<tr>
                <td style='text-align:center'>{$key}</td>
                <td>{$value->account_no}</td>
                <td>{$value->account_name}</td>
                <td style='text-align:right'>{$value->debit_txt}</td>
                <td style='text-align:right'>{$value->credit_txt}</td>
                </tr>";
              $total_debit += $value->debit;
              $total_credit += $value->credit;
            }
            
            $saldo = $total_credit - $total_debit;
            $saldo_label = '';
            if ($saldo > 0) {
              $saldo_label = 'Laba Bersih';
            } else if ($saldo < 0) {
              $saldo_label = 'Rugi Bersih';
            } else {
              $saldo_label = 'Laba Rugi Bersih';
            }
      ?>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="3" style="text-align: right;">Total</th>
        <th style="text-align: right;"><?php echo format_idr_currency($total_debit); ?></th>
        <th style="text-align: right;"><?php echo format_idr_currency($total_credit); ?></th>
      </tr>
      <tr>
        <th colspan="3" style="text-align: right;"><?php echo $saldo_label; ?></th>
        <th colspan="2" style="text-align: right;"><?php echo format_idr_currency(abs($saldo)); ?></th>
      </tr>
    </tfoot>
  </table>
  <!--end laporan laba rugi-->
  
  <!--laporan perubahan modal-->
  <p class="center">
    <span style="font-size: 16px; font-weight: bold;">
      <?php
      echo trim($company_name);
      ?><br>
      Laporan Perubahan Modal<br>
    </span>
    Periode : <?php echo $period; ?>
  </p>
  <table style="width: 100%">
    <thead>
      <tr>
        <th style="width: 5%">No</th>
        <th style="width: 15%">No Rekening</th>
        <th style="width: 50%">Nama Rekening</th>
        <th style="width: 15%"></th>
        <th style="width: 15%"></th>
      </tr>
    </thead>
    <tbody>
      <?php
            $total_debit = 0;
            $total_credit = 0;
            foreach ($capital_changes as $key => $value) {
              $key++;
              echo "<tr>
                <td style='text-align:center'>{$key}</td>
                <td>{$value->account_no}</td>
                <td>{$value->account_name}</td>
                <td style='text-align:right'>{$value->debit_txt}</td>
                <td style='text-align:right'>{$value->credit_txt}</td>
                </tr>";
              $total_debit += $value->debit;
              $total_credit += $value->credit;
            }
            
            $loss_profit_debit = 0;
            $loss_profit_credit = 0;
            $loss_profit = $saldo;
            if ($loss_profit > 0) {
              $loss_profit_credit = $loss_profit;
            } else {
              $loss_profit_debit = $loss_profit;
            }
            
            $saldo = ($total_credit + $loss_profit_credit) - ($total_debit + $loss_profit_debit);
      ?>
      <tr>
        <td></td>
        <td></td>
        <td><?php echo $saldo_label; ?></td>
        <td style="text-align: right;"><?php echo format_idr_currency(abs($loss_profit_debit)); ?></td>
        <td style="text-align: right;"><?php echo format_idr_currency(abs($loss_profit_credit)); ?></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="3" style="text-align: right;">Saldo</th>
        <th colspan="2" style="text-align: right;"><?php echo format_idr_currency($saldo); ?></th>
      </tr>
    </tfoot>
  </table>
  <!--end laporan perubahan modal-->
  
  <!--balance report-->
  <p class="center">
    <span style="font-size: 16px; font-weight: bold;">
      <?php
      echo trim($company_name);
      ?><br>
      Laporan Neraca<br>
    </span>
    Periode : <?php echo $period; ?>
  </p>
  <table style="width: 100%">
    <thead>
      <tr>
        <th style="width: 5%">No</th>
        <th style="width: 15%">No Rekening</th>
        <th style="width: 50%">Nama Rekening</th>
        <th style="width: 15%"></th>
        <th style="width: 15%"></th>
      </tr>
    </thead>
    <tbody>
      <?php
            $total_debit = 0;
            $total_credit = 0;
            foreach ($balance as $key => $value) {
              $key++;
              if ($value->account_no == '300') {
                $value->credit += $loss_profit;
                $value->credit_txt = format_idr_currency($value->credit);
              }
              echo "<tr>
                <td style='text-align:center'>{$key}</td>
                <td>{$value->account_no}</td>
                <td>{$value->account_name}</td>
                <td style='text-align:right'>{$value->debit_txt}</td>
                <td style='text-align:right'>{$value->credit_txt}</td>
                </tr>";
              $total_debit += $value->debit;
              $total_credit += $value->credit;
            }
            
            $saldo = $total_credit - $total_debit;
            $saldo_label = '';
            if ($saldo > 0) {
              $saldo_label = 'Laba Bersih';
            } else if ($saldo < 0) {
              $saldo_label = 'Rugi Bersih';
            } else {
              $saldo_label = 'Laba Rugi Bersih';
            }
      ?>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="3" style="text-align: right;">Total</th>
        <th style="text-align: right;"><?php echo format_idr_currency($total_debit); ?></th>
        <th style="text-align: right;"><?php echo format_idr_currency($total_credit); ?></th>
      </tr>
    </tfoot>
  </table>
  <!--end balance report-->
  
<!--  <page_footer> 
    <hr>
    <div style="text-align: right;">
      <small><?php echo $company_address; ?></small>
    </div>
  </page_footer>-->
</page> 