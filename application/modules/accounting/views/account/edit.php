<div class="col-md-6 col-md-offset-3">
  <div class="box box-success box-solid">
    <div class="box-header">
      <i class="fa fa-file-text-o"></i> Tambah Rekening
    </div>
    <?php echo form_open('', 'id="ff" class="form-horizontal"'); ?>
      <input name="account_id" id="account_id" value="<?php echo $account_id;?>" type="hidden" class="form-control">
      <div class="box-body">
        <div class="form-group">
          <label class="control-label col-md-3">No Rekening <span class="text-red">*</span> :</label>
          <div class="col-md-9">
            <input name="account_no" id="account_no" type="text" class="form-control" value="<?php echo $account_no;?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Nama Rekening <span class="text-red">*</span> :</label>
          <div class="col-md-9">
            <input name="account_name" id="account_name" type="text" class="form-control" value="<?php echo $account_name;?>">
          </div>
        </div>
      </div>
      <div class="box-footer text-right">
        <button type="submit" class="btn btn-success" id="save_btn"><i class="fa fa-check"></i> Simpan</button>
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
          required: true,
          remote: {
            url: '<?php echo base_url('accounting/account/is_unique'); ?>',
            data: {
              account_id: function() {
                return $('#account_id').val();
              }
            }
          }
        },
        account_name: {
          required: true,
        },
      },
      messages: {
        account_no: {
          remote: 'No Rekening ini sudah ada.'
        },
      },
      submitHandler: function(form) {
        $.ajax({
          url: '<?php echo base_url('accounting/account/edit'); ?>',
          type: 'post',
          data: $('#ff').serialize(),
          dataType: 'json',
          beforeSend: function() {
            $('#save_btn').addClass('disabled');
          },
          success: function(data) {
            if (data.status == 'success') closeModal();
            showNotification(data.message, data.status);
          },
          complete: function() {
            reloadTable('dataTable');
            $('#save_btn').removeClass('disabled');
          }
        });
      }
    });

    $('#close_btn').click(function() {
      closeModal();
    });

  });
</script>