<page backbottom="30px"> 
  <page_header> 

  </page_header> 
  <page_footer> 
    <table style="width: 100%; font-size: 10px;" class="table_no_border">
      <tr>
        <td style="width: 33%"><?php echo $buying->invoice; ?></td>
        <td style="width: 34%" class="center"> [[page_cu]]/[[page_nb]] </td>
        <td style="width: 33%" class="right"><?php echo date('d M Y H:i:s'); ?></td>
      </tr>
    </table>
  </page_footer>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
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
  <table class="table_no_border" style="width: 100%">
    <tr>
      <td><b><?php echo $company_name; ?></b></td>
      <td></td>
      <td class="right"><b><?php echo $buying->supp_name; ?></b></td>
    </tr>
    <tr>
      <td style="width: 40%"><?php echo $company_address; ?></td>
      <td style="width: 20%"></td>
      <td style="width: 40%" class="right"><?php echo $buying->supp_address; ?></td>
    </tr>
  </table>
  <h2 class="center">Faktur Pembelian Barang</h2>
  <table class="table_no_border" style="width: 100%">
    <tr>
      <th style="width: 20%">Invoice</th>
      <td style="width: 20%">: <?php echo $buying->invoice; ?></td>
      <td style="width: 60%" rowspan="4" class="right">
    <barcode type="EAN13" value="<?php echo $buying->invoice; ?>" label="" style="width:30mm; height:6mm; color: black; font-size: 4mm"></barcode>
    </td>
    </tr>
    <tr>
      <th>Tanggal </th>
      <td>: <?php echo $buying->buying_date; ?></td>
    </tr>
  <!--  <tr>
      <th>Pemasok</th>
      <td> : <?php echo $buying->supp_name ?></td>
    </tr>-->
    <tr>
      <th>Tipe Pembayaran</th>
      <td> : <?php echo $buying->payment_type; ?></td>
    </tr>
  </table>
  <table style="margin-top: 30px; width: 100%">
    <tr style="background-color: gray; color: white">
      <th class="center">No</th>
      <th class="center">Kode</th>
      <th class="center">Nama Barang</th>
      <th class="center">Harga</th>
      <th class="center">Jumlah</th>
      <th class="center">Diskon</th>
      <th class="center">Subtotal</th>
    </tr>
    <?php
    $no = 1;
    $grand_total = 0;

    foreach ($buying_item as $value) {
      echo "
    <tr>
      <td style='text-align:center; width: 5%;'>{$no}</td>
      <td style='width: 10%;'>{$value->item_code}</td>
      <td style='width: 40%'>{$value->item_name}</td>
      <td style='text-align:right; width: 11%;'>" . format_idr_currency($value->cost) . "</td>
      <td style='text-align:right; width: 11%;'>" . format_idr_currency($value->quantity) . "</td>
      <td style='text-align:right; width: 11%;'>" . format_idr_currency($value->discount) . "</td>
      <td style='text-align:right; width: 12%;'>" . format_idr_currency($value->total) . "</td>
    </tr>
    ";
      $no++;
      $grand_total += $value->total;
    }
    ?>
    <tr>
      <th colspan="6" class="right">Total</th>
      <th class="right"><?php echo format_idr_currency($grand_total); ?></th>
    </tr>
  </table>
  <table class="table_no_border" style="width: 100%; margin-top: 50px">
    <tr>
      <td class="center" style="width: 30%">
        Penerima
        <br>
        <br>
        <br>
        <br>
        (________________)
      </td>
      <td style="width: 40%"></td>
      <td class="center" style="width: 30%">
        Pemasok
        <br>
        <br>
        <br>
        <br>
        (________________)
      </td>
    </tr>
  </table>
</page> 