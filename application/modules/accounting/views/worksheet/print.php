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
      background: #f0f0f0;
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
  <p class="center">
    <span style="font-size: 16px; font-weight: bold;">
      <?php
      echo trim($company_name);
      ?><br>
      Neraca Saldo<br>
    </span>
    Periode : <?php echo $period; ?>
  </p>
  <table style="width: 100%">
    <thead>
      <tr>
        <th rowspan="2" style="width: 3%">No</th>
        <th rowspan="2" style="width: 7%">No Rekening</th>
        <th rowspan="2" style="width: 15%">Nama Rekening</th>
        <th colspan="2" class="text-center">Neraca Saldo</th>
        <th colspan="2" class="text-center">Penyesuaian</th>
        <th colspan="2" class="text-center">NSSP</th>
        <th colspan="2" class="text-center">Laba Rugi</th>
        <th colspan="2" class="text-center">Neraca</th>
      </tr>
      <tr>
        <th style="width: 7.5%">Debet</th>
        <th style="width: 7.5%">Kredit</th>
        <th style="width: 7.5%">Debet</th>
        <th style="width: 7.5%">Kredit</th>
        <th style="width: 7.5%">Debet</th>
        <th style="width: 7.5%">Kredit</th>
        <th style="width: 7.5%">Debet</th>
        <th style="width: 7.5%">Kredit</th>
        <th style="width: 7.5%">Debet</th>
        <th style="width: 7.5%">Kredit</th> 
      </tr>
    </thead>
    <?php
    $no = 1;
    $debit1_total = 0;
    $credit1_total = 0;
    $debit2_total = 0;
    $credit2_total = 0;
    $debit3_total = 0;
    $credit3_total = 0;
    $debit4_total = 0;
    $credit4_total = 0;
    $debit5_total = 0;
    $credit5_total = 0;
    foreach ($rows as $value) {
      echo "
    <tr>
      <td style='text-align:center'>{$no}</td>
      <td>$value->account_no</td>
      <td>$value->account_name</td>
      <td style='text-align:right'>{$value->debit1_txt}</td>
      <td style='text-align:right'>{$value->credit1_txt}</td>
      <td style='text-align:right'>{$value->debit2_txt}</td>
      <td style='text-align:right'>{$value->credit2_txt}</td>
      <td style='text-align:right'>{$value->debit3_txt}</td>
      <td style='text-align:right'>{$value->credit3_txt}</td>
      <td style='text-align:right'>{$value->debit4_txt}</td>
      <td style='text-align:right'>{$value->credit4_txt}</td>
      <td style='text-align:right'>{$value->debit5_txt}</td>
      <td style='text-align:right'>{$value->credit5_txt}</td>
    </tr>
    ";
      $no++;
      $debit1_total += $value->debit1;
      $credit1_total += $value->credit1;
      $debit2_total += $value->debit2;
      $credit2_total += $value->credit2;
      $debit3_total += $value->debit3;
      $credit3_total += $value->credit3;
      $debit4_total += $value->debit4;
      $credit4_total += $value->credit4;
      $debit5_total += $value->debit5;
      $credit5_total += $value->credit5;
    }

    $saldo1 = $credit4_total - $debit4_total;
    $saldo1_1 = 0;
    $saldo1_2 = 0;
    $saldo1_3 = 0;
    $saldo1_4 = 0;
    
    $total1 = $debit4_total;
    $total2 = $credit4_total;
    $total3 = $debit5_total;
    $total4 = $credit5_total;
    
    if ($saldo1 > 0) {
      $saldo1_label = 'Laba Bersih';
      $saldo1_1 = $saldo1;
      $saldo1_4 = $saldo1;
      $total1 += $saldo1;
      $total4 += $saldo1;
    } else {
      $saldo1_label = 'Rugi Bersih';
      $saldo1 = abs($saldo1);
      $saldo1_2 = $saldo1;
      $saldo1_3 = $saldo1;
      $total2 += $saldo1;
      $total3 += $saldo1;
    }
    
    
    ?>
    <tr>
      <th colspan="3" style="text-align: right;">Total</th>
      <th style="text-align:right;"><?php echo format_idr_currency($debit1_total); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($credit1_total); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($debit2_total); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($credit2_total); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($debit3_total); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($credit3_total); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($debit4_total); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($credit4_total); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($debit5_total); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($credit5_total); ?></th>
    </tr>
    <tr>
      <th colspan="9" style="text-align:right;"><?php echo $saldo1_label; ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($saldo1_1); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($saldo1_2); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($saldo1_3); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($saldo1_4); ?></th>
    </tr>
    <tr>
      <th style="text-align:right;" colspan="9"></th>
      <th style="text-align:right;"><?php echo format_idr_currency($total1); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($total2); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($total3); ?></th>
      <th style="text-align:right;"><?php echo format_idr_currency($total4); ?></th>
    </tr>
  </table>
<!--  <page_footer> 
    <hr>
    <div style="text-align: right;">
      <small><?php echo $company_address; ?></small>
    </div>
  </page_footer>-->
</page> 