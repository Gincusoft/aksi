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

<script src="<?php echo base_url('assets/plugins/flot/jquery.flot.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/flot/jquery.flot.categories.min.js'); ?>"></script>  
<script>
  $(document).ready(function() {

    $.ajax({
      url: '<?php echo base_url('dashboard/get_cash_flow'); ?>',
      data: {month: $('#month').val(), year: $('#year').val()},
      dataType: 'json',
      success: function(data) {
        $.plot("#cash-flow", [
          {data: data.debit, label: "Debit"},
          {data: data.credit, label: "Credit"}
        ], {
          series: {
            lines: {
              show: true,
//              barWidth: 0.6,
//              align: "center"
            },
            points: {show: true}
          },
          grid: {
            hoverable: true,
            clickable: true,
            backgroundColor: {colors: ["#fff", "#eee"]},
            borderWidth: {
              top: 0.5,
              right: 0.5,
              bottom: 1,
              left: 1
            }
          },
          xaxis: {
            mode: "categories",
            tickLength: 0
          }
        });

        $("<div id='tooltip'></div>").css({
          position: "absolute",
          display: "none",
          border: "1px solid #fdd",
          padding: "2px",
          "background-color": "#fee",
          opacity: 0.80
        }).appendTo("body");

        $("#cash-flow").bind("plothover", function(event, pos, item) {
          if (item) {
            var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

            $("#tooltip").html(item.series.label + " "+ idr_currency_format(y))
                    .css({top: item.pageY + 5, left: item.pageX + 5})
                    .fadeIn(200);
          } else {
            $("#tooltip").hide();
          }
        });
      },
      complete: function() {
        $('.overlay').hide();
      }
    });

  });
</script>

<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-money"></i> Arus Kas</h3>
  </div>
  <div class="box-body">
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
    <div id="cash-flow" class="col-md-12" style="height: 300px">
      <div class="overlay">
        <div class="fa fa-refresh fa-spin"></div>
      </div>
    </div>
  </div>
</div>

