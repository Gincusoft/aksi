<div class="col-md-10 col-md-offset-1" style="margin-top: 5px;">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-file-text-o"></i> Tambah Karyawan</h3>
    </div>
    <form id="ff" class="form-horizontal">
      <div class="box-body">
        <fieldset>
          <legend>Umum</legend>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="col-md-4">
                  <img id="photo_preview" class="img-thumbnail" data-src="" style="width: 150px; height: 150px" alt="">
                </div>
                <div class="col-md-8" style="margin-top: 117px;">
                  <input name="photo" id="photo" type="file" class="form-control" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">NIK :</label>
                <div class="col-md-8">
                  <input name="employee_no" id="employee_no" type="text" class="form-control"  autofocus="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Nama Lengkap <span class="text-red">*</span> :</label>
                <div class="col-md-8">
                  <input name="employee_name" id="employee_name" type="text" class="form-control"  autofocus="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">NPWP :</label>
                <div class="col-md-8">
                  <input name="npwp" id="npwp" type="text" class="form-control"  autofocus="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Jenis Kelamin :</label>
                <div class="col-md-8">
                  <?php echo form_dropdown('gender_id', $list_gender, '', 'class="form-control"') ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label col-md-4">Tempat Lahir :</label>
                <div class="col-md-8">
                  <?php echo form_dropdown('birth_place_id', $list_city, '', 'class="form-control"') ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Tanggal Lahir :</label>
                <div class="col-md-2">
                  <?php echo form_dropdown('day', $list_day, '', 'class="form-control" style="padding-left:5px"') ?>
                </div>
                <div class="col-md-2">
                  <?php echo form_dropdown('month', $list_month, '', 'class="form-control" style="padding-left:5px"') ?>
                </div>
                <div class="col-md-4">
                  <?php echo form_dropdown('year', $list_year, '1950', 'class="form-control" style="padding-left:5px"') ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Agama :</label>
                <div class="col-md-8">
                  <?php echo form_dropdown('religion_id', $list_religion, '', 'class="form-control"') ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Status Perkawinan :</label>
                <div class="col-md-8">
                  <?php echo form_dropdown('marriage_status_id', $list_marriage_status, '', 'class="form-control"') ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Alamat :</label>
                <div class="col-md-8">
                  <textarea name="address" id="address" type="text" class="form-control"  style="height: 55px"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Telepon :</label>
                <div class="col-md-8">
                  <input name="phone" id="phone" type="text" class="form-control" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Pendidikan Terakhir :</label>
                <div class="col-md-8">
                  <?php echo form_dropdown('education_id', $list_education, '', 'class="form-control"') ?>
                </div>
              </div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Profesi</legend>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label col-md-4">Tanggal Masuk :</label>
                <div class="col-md-8">
                  <div class="input-group">
                    <input name="start_date" id="journals_date" type="text" class="form-control" value="<?php echo sql_to_human(date('Y-m-d')); ?>" readonly="">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Status Karyawan :</label>
                <div class="col-md-8">
                  <?php echo form_dropdown('employee_status_id', $list_employee_status, '', 'class="form-control"') ?>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label col-md-4">Bagian :</label>
                <div class="col-md-8">
                  <?php echo form_dropdown('division_id', $list_division, '', 'class="form-control"') ?>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Jabatan :</label>
                <div class="col-md-8">
                  <?php echo form_dropdown('position_id', $list_position, '', 'class="form-control"') ?>
                </div>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
      <div class="box-footer text-right">
        <button type="submit" class="btn btn-success" id="save_btn" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Menyimpan..."><i class="fa fa-check"></i> Simpan</button>
        <button type="button" class="btn btn-default" id="close_btn"><i class="fa fa-close"></i> Tutup</button>
      </div>
    </form>
  </div>
</div>

<script>
  $(document).ready(function() {

    $('#journals_date').datepicker({
      autoclose: true,
      todayHighlight: true,
      todayBtn: true,
      format: 'dd MM yyyy',
      language: 'id'
    });

    $("#ff").validate({
      rules: {
        employee_no: {
//          required: true,
          remote: {
            url: '<?php echo base_url('employees/employee/is_unique'); ?>',
            type: 'post',
          }
        },
        employee_name: {
          required: true,
        },
      },
      messages: {
        employee_no: {
          remote: 'NIK ini sudah ada.'
        },
      },
      submitHandler: function(form) {
        var btn = $('#save_btn');
        $.ajax({
          url: '<?php echo base_url('employees/employee/add'); ?>',
          type: 'post',
          data: new FormData($('#ff')[0]),
          dataType: 'json',
          contentType: false,
          processData: false,
          beforeSend: function() {
            btn.button('loading');
          },
          success: function(data) {
            if (data.status == 'success') {
              closeModal();
              showConfirmation(data.message, data.status, function() {
                showModal('<?php echo base_url('employees/employee/add'); ?>', '#employee_no');
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
      showConfirmation('Lanjutkan menutup formulir ini?', 'warning', function() {
        closeModal();
      });
    });

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#photo_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#photo").change(function() {
      readURL(this);
    });

  });
</script>