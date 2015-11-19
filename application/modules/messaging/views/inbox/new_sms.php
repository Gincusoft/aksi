<!--Tag Input-->
<link href="<?php echo base_url('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css'); ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js'); ?>"></script>

<style>
  .bootstrap-tagsinput {
    width: 100%;
  }
</style>

<div class="col-md-6 col-md-offset-3">
  <div class="box box-success">
    <div class="box-header with-border">
      <h1 class="box-title"><i class="fa fa-file-text-o"></i> <?php echo $title; ?></h1>
      <div class="pull-right">
        <i class="fa fa-close" onclick="closeModal()"></i>
      </div>
    </div>
    <form id="ff">
      <div class="box-body">
        <!--Begin header-->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="control-label ">No Tujuan : </label>
              <input name="dest_number" id="dest_number" type="text" class="form-control numeric" autofocus="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label class="control-label">Isi Pesan :</label>
              <textarea name="sms_text" id="sms_text" class="form-control" style="height: 100px"></textarea>
            </div>
          </div>
        </div>
        <!--End header-->
      </div>
      <div class="box-footer text-right">
        <div class="col-md-1 form-control-static" id="char-count">

        </div>
        <div class="col-md-11">
          <button class="btn btn-success" id="save_btn" type="submit" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Mengirim..."><i class="fa fa-send"></i> Kirim</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
          $(document).ready(function() {
//            initNumericFormat();
//            $('#dest_number').attr('style', 'text-align:left');
            $('#sms_text').keyup(function() {
              var smsText = $(this).val();
              $('#char-count').html(smsText.length);
//              console.log(smsText);
            });

            $('#dest_number').tagsinput({
              tagClass: 'label label-success',
              typeahead: {
                source: ['Amsterdam', 'Washington', 'Sydney', 'Beijing', 'Cairo']
              }
            });

            $('#ff').submit(function(e) {
              e.preventDefault();
              var btn = $('#save_btn');
              $.ajax({
                url: '<?php echo base_url('messaging/inbox/new_sms'); ?>',
                type: 'post',
                data: $('#ff').serialize(),
//                dataType: 'json',
                beforeSend: function() {
                  btn.button('loading');
                },
                success: function(data) {
                  closeModal();
                },
                complete: function() {
                  btn.button('reset');
                  reloadTable('dataTable');
                }
              });
            });

          });
</script>