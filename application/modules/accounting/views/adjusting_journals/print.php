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
      <?php echo $company_name; ?><br>
      Jurnal Penyesuaian
    </span><br>
    Periode : <?php echo $period; ?>
  </p>
  <table style="width: 100%">
    <tr>
      <th style="width: 5%">No</th>
      <th style="width: 15%">Tanggal</th>
      <th style="width: 10%">No Bukti</th>
      <th style="width: 10%">No Rekening</th>
      <th style="width: 20%">Nama Rekening</th>
      <th style="width: 20%">Keterangan</th>
      <th style="width: 10%">Debet</th>
      <th style="width: 10%">Kredit</th>
    </tr>
    <?php
    $no = 1;
    $debit_total = 0;
    $credit_total = 0;

    foreach ($rows as $value) {
      echo "
    <tr>
      <td style='text-align:center'>{$no}</td>
      <td>" . sql_to_human($value->journals_date) . "</td>
      <td>{$value->transaction_id}</td>
      <td>$value->account_no</td>
      <td>$value->account_name</td>
      <td>$value->remark</td>
      <td style='text-align:right'>" . format_idr_currency($value->debit) . "</td>
      <td style='text-align:right'>" . format_idr_currency($value->credit) . "</td>
    </tr>
    ";
      $no++;
      $debit_total += $value->debit;
      $credit_total += $value->credit;
    }
    ?>
    <tr>
      <th colspan="6" class="right">Total</th>
      <th class="right"><?php echo format_idr_currency($debit_total); ?></th>
      <th class="right"><?php echo format_idr_currency($credit_total); ?></th>
    </tr>
  </table>
<!--  <page_footer> 
    <table style="width: 100%; font-size: 10px;" class="table_no_border">
      <tr>
        <td style="width: 33%"><?php echo $buying->invoice; ?></td>
        <td style="width: 34%" class="center"> [[page_cu]]/[[page_nb]] </td>
        <td style="width: 33%" class="right"><?php echo date('d M Y H:i:s'); ?></td>
      </tr>
    </table>
  </page_footer>-->
</page> 