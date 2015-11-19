<style>
  .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    vertical-align: middle;
  }
</style>

<div class="col-md-10 col-md-offset-1">
  <div class="box box-success">
    <div class="box-header with-border">
      <h1 class="box-title"><i class="fa fa-file-text-o"></i> <?php echo $title; ?></h1>
      <!--      <div class="pull-right">
              <a href="<?php echo base_url('accounting/journals'); ?>" class="btn btn-sm btn-success"><i class="fa fa-reply-all"></i> Kembali</a>
            </div>-->
    </div>
    <form id="ff" class="">
      <div class="box-body">
        <!--Begin header-->
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label class="control-label ">No Bukti : </label>
              <input name="transaction_id" id="transaction_id" type="text" class="form-control" autofocus="" >
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label class="control-label">Tanggal <span class="text-red">*</span> :</label>
              <div class="input-group">
                <input name="journals_date" id="journals_date" type="text" class="form-control" value="<?php echo $journals_date; ?>" readonly="">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="control-label">Keterangan :</label>
              <input name="remark" id="remark" type="text" class="form-control" autofocus="" >
            </div>
          </div>
        </div>
        <!--End header-->

        <hr>

        <!--Begin table-->
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered table-condensed table-hover table-responsive" style="width: 100%">
              <thead>
                <tr>
                  <th style="width: 5%" class="text-center"><button title="Tambah Baris" type="button" class="btn btn-xs btn-success" onclick="addRow();"><i class="fa fa-plus"></i></button></th>
                  <th style="width: 55%">Rekening</th>
                  <th style="width: 20%">Debet</th>
                  <th style="width: 20%">Kredit</th>
                </tr>
              </thead>
              <tbody id="row-data">
                <tr>
                  <td class="text-center"><button title="Hapus Baris" type="button" class="btn btn-xs btn-success" onclick="removeRow(this);"><i class="fa fa-minus"></i></button></td>
                  <td>
                    <select name="account_id[]" class="form-control account_id" onchange="changeAccount(1)" id="account-id-1">
                      <option value="">- Pilih -</option>
                      <?php
                      foreach ($account_list as $value) {
                        echo "<option value='{$value->account_id}'>{$value->account_no} | {$value->account_name}</option>";
                      }
                      ?>
                    </select>
                  </td>
                  <td><input type="text" name="debit[]" id="debit-1" class="form-control currency debit" onkeyup="doDebit(1)" value="0"></td>
                  <td><input type="text" name="credit[]" id="credit-1" class="form-control currency credit" onkeyup="doCredit(1)" value="0"></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="2" class="text-right">Total</th>
                  <th class="text-right"><span id="debit-total">0</span></th>
                  <th class="text-right"><span id="credit-total">0</span></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <!--End table-->

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

                      $('#close_btn').click(function() {
                        closeModal();
                      });

                      initCurrencyFormat();
                      initNumericFormat();

                      $("#ff").validate({
                        rules: {
                          journals_date: {
                            required: true,
                          },
                        },
                        messages: {
                        },
                        submitHandler: function(form) {
                          $('.currency').inputmask('remove');
                          var btn = $('#save_btn');
                          $.ajax({
                            url: '<?php echo base_url('accounting/journals/add'); ?>',
                            type: 'post',
                            data: $('#ff').serialize(),
                            dataType: 'json',
                            beforeSend: function() {
                              if (validateInput() != '') {
                                initCurrencyFormat();
                                showNotification(validateInput(), 'warning');
                                return false;
                              }

                              if (checkBalance() != '') {
                                initCurrencyFormat();
                                showNotification(checkBalance(), 'warning');
                                return false;
                              }
                              btn.button('loading');
                            },
                            success: function(data) {
                              if (data.status == 'success') {
                                showConfirmation(data.message, data.status, function() {
                                  doAdd();
                                });
                                closeModal();
                              } else {
                                showNotification(data.message, data.status);
                              }
                            },
                            complete: function() {
                              btn.button('reset');
                              initCurrencyFormat();
                              reloadTable('dataTable');
                            }
                          });
                        }
                      });

                    });

                    function changeAccount(id) {
                      $('#debit-' + id).focus();
//                      var accountType = $('#account-id-' + id + ' option:selected').data('account-type');
//                      $('#account-type-' + id).val(accountType);
//                      changeAccountType(id);
                    }

                    function changeAccountType(id) {
//                      if ($('#account-type-' + id).val() == 1) {
//                        $('#kredit-' + id).val(0);
//                        $('#kredit-' + id).hide();
//                        $('#debit-' + id).show();
//                        $('#debit-' + id).focus();
//                      } else if ($('#account-type-' + id).val() == 2) {
//                        $('#debit-' + id).val(0);
//                        $('#debit-' + id).hide();
//                        $('#kredit-' + id).show();
//                        $('#kredit-' + id).focus();
//                      }
//                      doDebit();
//                      doCredit();
                    }

                    var rowId = 2;
                    function addRow() {
                      var html = '<tr><td class="text-center"><button title="Hapus Baris" type="button" class="btn btn-xs btn-success" onclick="removeRow(this);"><i class="fa fa-minus"></i></button></td>';
                      //account
                      html += '<td><select name="account_id[]" class="form-control account_id" onchange="changeAccount(' + rowId + ')" id="account-id-' + rowId + '"><option value="">- Pilih -</option>';
<?php
foreach ($account_list as $value) {
  echo "html += '<option value=\"{$value->account_id}\">{$value->account_no} | {$value->account_name}</option>';";
}
?>
                      html += '</select></td>';
                      html += '<td><input type="text" name="debit[]" id="debit-' + rowId + '" class="form-control currency debit" onkeyup="doDebit(' + rowId + ')"></td>';
                      html += '<td><input type="text" name="credit[]" id="credit-' + rowId + '" class="form-control currency credit" onkeyup="doCredit(' + rowId + ')"></td>';
                      html += '</tr>';
                      $('#row-data').append(html);
                      rowId++;
                      $('.currency').inputmask('remove');
                      initCurrencyFormat();
                    }

                    function removeRow(element) {
                      $(element).parent().parent().remove();
                    }

                    var totalDebit = 0;
                    function doDebit(rowId) {
                      var total = 0;
                      $('.debit').each(function(index, element) {
                        if ($(element).val() != '')
                          total = total + parseInt($(element).inputmask('unmaskedvalue'));
                      });
                      $('#debit-total').text(idr_currency_format(total));
                      totalDebit = total;
                      checkBalance();
                    }

                    var totalCredit = 0;
                    function doCredit(rowId) {
                      var total = 0;
                      $('.credit').each(function(index, element) {
                        if ($(element).val() != '')
                          total = total + parseInt($(element).inputmask('unmaskedvalue'));
                      });
                      $('#credit-total').text(idr_currency_format(total));
                      totalCredit = total;
                      checkBalance();
                    }

                    function validateInput() {
                      var message = '';
                      if ($('.debit').length < 2 || $('.credit').length < 2) {
                        message = 'Masukkan minimal 2 rekening.';
                        return message;
                      }

                      $('.account_id').each(function(index, element) {
                        if ($(element).val() == '') {
                          message = 'Silahkan pilih rekening.';
                        }
                      });

                      return message;
                    }

                    function checkBalance() {
                      var message = '';
                      $('#debit-total').parent().removeClass('text-red');
                      $('#credit-total').parent().removeClass('text-red');

                      if (totalDebit != totalCredit) {
                        message = 'Debet dan Kredit harus seimbang.';
                        $('#debit-total').parent().addClass('text-red');
                        $('#credit-total').parent().addClass('text-red');
                        return message;
                      }

                      if (totalDebit == 0) {
                        message = 'Debet harus diisi.';
                        $('#debit-total').parent().addClass('text-red');
                      } else if (totalCredit == 0) {
                        message = 'Kredit harus diisi.';
                        $('#credit-total').parent().addClass('text-red');
                      }
                      return message;
                    }

</script>