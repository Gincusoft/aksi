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
        <th style="width: 5%">No</th>
        <th style="width: 15%">No Rekening</th>
        <th style="width: 50%">Nama Rekening</th>
        <th style="width: 15%">Debet</th>
        <th style="width: 15%">Kredit</th>
      </tr>
    </thead>
    <?php
    $no = 1;
    $debit_total = 0;
    $credit_total = 0;

    foreach ($rows as $value) {
      echo "
    <tr>
      <td style='text-align:center'>{$no}</td>
      <td>$value->account_no</td>
      <td>$value->account_name</td>
      <td style='text-align:right'>{$value->debit_txt}</td>
      <td style='text-align:right'>{$value->credit_txt}</td>
    </tr>
    ";
      $no++;
      $debit_total += $value->debit;
      $credit_total += $value->credit;
    }
    ?>
    <tr>
      <th colspan="3" class="right">Total</th>
      <th class="right"><?php echo format_idr_currency($debit_total); ?></th>
      <th class="right"><?php echo format_idr_currency($credit_total); ?></th>
    </tr>
  </table>
<!--  <page_footer> 
    <hr>
    <div style="text-align: right;">
      <small><?php echo $company_address; ?></small>
    </div>
  </page_footer>-->
</page> 