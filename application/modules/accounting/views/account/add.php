<div class="col-md-6 col-md-offset-3">
  <div class="box box-success">
    <div class="box-header with-border">
      <i class="fa fa-file-text-o"></i> Tambah Rekening
    </div>
    <?php echo form_open('', 'id="ff" class="form-horizontal"'); ?>
      <div class="box-body">
        <div class="form-group">
          <label class="control-label col-md-3">No Rekening <span class="text-red">*</span> :</label>
          <div class="col-md-9">
            <input name="account_no" id="account_no" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Nama Rekening <span class="text-red">*</span> :</label>
          <div class="col-md-9">
            <input name="account_name" id="account_name" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="box-footer text-right">
        <button type="submit" class="btn btn-success" id="save_btn" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Menyimpan..."><i class="fa fa-check"></i> Simpan</button>
        <button type="button" class="btn btn-default" id="close_btn"><i class="fa fa-close"></i> Tutup</button>
      </div>
    <?php echo form_close(); ?>
  </div>
</div>

<script>
  $(document).ready(function() {

    $("#ff").validate({
      rules: {
        account_no: {
          required : true,
          remote: {
            url: '<?php echo base_url('accounting/account/is_unique'); ?>',
          }
        },
        account_name: {
          required : true,  
        },
      },
      messages: {
        account_no: {
          remote: 'No Rekening ini sudah ada.'
        },
      },
      submitHandler: function(form) {
        var btn = $('#save_btn');
        $.ajax({
          url: '<?php echo base_url('accounting/account/add'); ?>',
          type: 'post',
          data: $('#ff').serialize(),
          dataType: 'json',
          beforeSend: function() {
            btn.button('loading');
          },
          success: function(data) {
            if (data.status == 'success') {
              showConfirmation(data.message, data.status, function (){
                showModal('<?php echo base_url('accounting/account/add'); ?>', '#account_no');
              });
            } else {
              showNotification(data.message, data.status);
            }
          },
          complete: function() {
            closeModal();
            reloadTable('dataTable');
            btn.button('reset');
          }
        });
      }
    });

    $('#close_btn').click(function() {
      closeModal();
    });

  });
</script>