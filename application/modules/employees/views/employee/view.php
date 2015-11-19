<div class="col-md-10 col-md-offset-1">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-file-text-o"></i> Info Karyawan</h3>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-md-3 text-center">
          <img width="200px" class="img-circle" src="<?php echo base_url("assets/images/employee/{$photo}"); ?>">
          <h3><span class="label label-success"><?php echo $employee_name; ?></span></h3>
        </div>
        <div class="col-md-9">
          <div class="box box-default">
            <div class="box-body">
              <!--<div class="nav-tabs-custom">-->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Umum</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false" onclick="loadJobContent();">Pekerjaan</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  <table class="table table-bordered table-striped">
                    <tbody>
                      <tr>
                      <th class="col-md-3">NIK  </th>
                      <td>: <?php echo $employee_no; ?></td>
                    </tr>
                    <tr>
                      <th>NPWP  </th>
                      <td>: <?php echo $npwp; ?></td>
                    </tr>
                    <tr>
                      <th>Tempat & Tanggal Lahir  </th>
                      <td>: <?php echo "{$city_name}, {$birth_date}"; ?></td>
                    </tr>
                    <tr>
                      <th>Jenis Kelamin  </th>
                      <td>: <?php echo $gender_name; ?></td>
                    </tr>
                    <tr>
                      <th>Alamat  </th>
                      <td>: <?php echo $address; ?></td>
                    </tr>
                    <tr>
                      <th>Agama  </th>
                      <td>: <?php echo $religion_name; ?></td>
                    </tr>
                    <tr>
                      <th>Status Perkawinan  </th>
                      <td>: <?php echo $marriage_status_name; ?></td>
                    </tr>
                    <tr>
                      <th>Pendidikan Terakhir  </th>
                      <td>: <?php echo $education_name; ?></td>
                    </tr>
                    <tr>
                      <th>Telpon  </th>
                      <td>: <?php echo $phone; ?></td>
                    </tr>
                    </tbody>
                  </table>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                  <i class="fa fa-refresh fa-spin"></i> Memuat...
                </div><!-- /.tab-pane -->
              </div><!-- /.tab-content -->
              <!--</div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="box-footer text-right">
      <button type="button" class="btn btn-default" id="close_btn"><i class="fa fa-close"></i> Tutup</button>
    </div>
    </form>
  </div>
</div>

<script>
                  $('#close_btn').click(function() {
                    closeModal();
                  });

                  var isLoadedJobContent = false;
                  function loadJobContent() {
                    if (isLoadedJobContent == false) {
                      $.ajax({
                        url: '<?php echo base_url("employee/view_job/{$employee_id}"); ?>',
                        type: 'get',
                        beforeSend: function() {
                        },
                        success: function(data) {
                          $('#tab_2').html(data);
                          isLoadedJobContent = true;
                        },
                        complete: function() {
                        }
                      });
                    }

                  }

</script>