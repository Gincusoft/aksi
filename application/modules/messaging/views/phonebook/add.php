<!-- Type ahead -->
<script src="<?php echo base_url('assets/plugins/Bootstrap-3-Typeahead/bootstrap3-typeahead.min.js'); ?>" type="text/javascript"></script>

<div class="col-md-6 col-md-offset-3">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-file-text-o"></i> Tambah Buku Telepon</h3>
    </div>
    <?php echo form_open('', 'id="ff" class="form-horizontal"'); ?>
    <div class="box-body">
      <div class="form-group">
        <label class="control-label col-md-3">Nama <span class="text-red">*</span> :</label>
        <div class="col-md-9">
          <input name="name" id="name" type="text" class="form-control" autofocus="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Nomor Telepon <span class="text-red">*</span> :</label>
        <div class="col-md-9">
          <div class="input-group">
            <span class="input-group-addon">+62</span>
            <input type="text" class="form-control" placeholder="8xxxxxxxxxx" name="phone_number" id='phone_number'>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Grup :</label>
        <div class="col-md-9">
          <input name="phonebook_group_name" id="phonebook_group" type="text" class="form-control" autocomplete="off">
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

//    $('#phonebook_group').typeahead({
//      source: function(request, response) {
//        $.get('<?php echo base_url('messaging/phonebook/get_phonebook_group'); ?>', function(data) {
//          response(data);
//        }, 'json');
//      },
//    });

    $.get('<?php echo base_url('messaging/phonebook/get_phonebook_group'); ?>', function(data) {
      $("#phonebook_group").typeahead({source: data});
    }, 'json');

    $("#ff").validate({
      rules: {
        phone_number: {
          required: true,
//          remote: {
//            url: '<?php echo base_url('messaging/phonebook/is_unique'); ?>',
//          }
        },
        name: {
          required: true,
//          remote: {
//            url: '<?php echo base_url('messaging/phonebook/is_unique_name'); ?>',
//          }
        },
      },
      messages: {
        phone_number: {
          remote: 'Nomor ini sudah digunakan.'
        },
        name: {
          remote: 'Nama ini sudah digunakan.'
        },
      },
      submitHandler: function(form) {
        var btn = $('#save_btn');
        $.ajax({
          url: '<?php echo base_url('messaging/phonebook/add'); ?>',
          type: 'post',
          data: $('#ff').serialize(),
          dataType: 'json',
          beforeSend: function() {
            btn.button('loading');
          },
          success: function(data) {
            if (data.status == 'success') {
              closeModal();
              showConfirmation(data.message, data.status, function() {
                showModal('<?php echo base_url('messaging/phonebook/add'); ?>', '#phone_number');
              });
            } else {
              showNotification(data.message, data.status);
            }
          },
          complete: function() {
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