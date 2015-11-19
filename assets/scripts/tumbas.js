/*
 * Andedi Tarmadi
 * 
 * 
 * ----------------
 * Tumbas Wiralodra
 * Email : andedi.foss@gmail.com
 * 087829986468
 */

$.ajaxSetup({
  timeout: 60000,
  error: function(xhr, status, message) {
    var msg = message;
    if (message == 'Not Found') {
      message = 'Gagal menghubungi server, periksa kembali koneksi Anda.'
    } else {
      message = 'Ada kesalahan, silahkan hubungi Administrator.';
    }
    showNotification(message, 'error');
  }
});

/**
 * Default setting for dataTable. Write less do more.
 */
$.extend($.fn.dataTable.defaults, {
  "order": [[1, 'asc']],
  'processing': true,
  'serverSide': true,
  'ordering': true,
  'lengthMenu' : [10,15,25,50,100],
  'pageLength' : 15,
//  "scrollX": true,
  'language': {
    'processing': '<div class="overlay"><i class="fa fa-refresh fa-spin"></i></div>',
    'paginate': {
      'previous': '<i class="fa fa-chevron-left"></i>',
      'next': '<i class="fa fa-chevron-right"></i>',
    },
    "emptyTable": "Tidak ada data",
    "info": "Total : _TOTAL_ data",
    "infoEmpty": "Total : 0 data",
    "infoFiltered": "(filtered from _MAX_ total entries)",
    "infoPostFix": "",
    "thousands": ",",
    "lengthMenu": "Per halaman : _MENU_ data",
    "loadingRecords": "Memuat...",
    "search": "Cari : :",
    "zeroRecords": "Tidak ada data",
  },
  'dom': '<"toolbar">t<"col-md-4"l><"col-md-4 text-center"i><"col-md-4"p>r',
});

/**
 * {^_^) Tumbas JS <br>
 * <br>
 * Reload data from server (dependent datatable.js) <br>
 * @param {String} id Table ID
 */
function reloadTable(id) {
  var table = $('#' + id).DataTable();
  table.draw(false);
}

/**
 * {^_^) Tumbas JS <br>
 * <br>
 * Show Notification Message (dependent notyfy.js) <br>
 * @param {String} message Displaying message
 * @param {String} type success, information, error
 * @param {Function} okCallback Callback function when ok button clicked
 * @return {Popup} Popup notification
 */
function showNotification(message, type, okCallback) {
  var header = '';
  if (type == 'success') {
    type = 'information';
    header = '<h4><i class="fa fa-check-circle"></i> Sukses</h4><br>';
  } else if (type == 'error') {
    header = '<h4><i class="fa fa-times-circle"></i> Gagal</h4><br>';
  } else if (type == 'warning') {
    header = '<h4><i class="fa fa-exclamation-circle"></i> Peringatan</h4><br>';
  } else {
    header = '<h4><i class="fa fa-info-circle"></i> Pemberitahuan</h4><br>';
  }
  notyfy({
    layout: 'center',
    text: header + message,
    type: 'success', // alert, success, error, warning, information, confirm
    dismissQueue: false,
    modal: true,
    showEffect: function(bar) {
      bar.animate({height: 'toggle'}, 500, 'swing');
    },
    hideEffect: function(bar) {
      bar.animate({height: 'toggle'}, 500, 'swing');
    },
    buttons: [{
        addClass: 'btn btn-sm btn-success btn-notyfy-ok',
        text: '<i class="fa fa-close"></i> Tutup',
        onClick: function(notyfy) {
          notyfy.close();

          if (typeof okCallback != 'undefined' && typeof okCallback == 'function') {
            okCallback();
          }
        }
      }],
    events: {
      shown: function() {
//        document.getElementsByClassName('notyfy_buttons')[0].style.textAlign = 'center';
        document.getElementsByClassName('btn-notyfy-ok')[0].focus();
      }
    }
  });
}

/**
 * {^_^) Tumbas JS <br>
 * <br>
 * Show Confirmation Message (dependent notyfy.js) <br>
 * @param {String} message Displaying message
 * @param {String} type success, confirm
 * @param {Function} okCallback Callback function when ok button clicked
 * @param {Function} noCallback Callback function when no button clicked
 * @return {Popup} Popup confirmation
 */
function showConfirmation(message, type, okCallback, noCallback) {
  var header = '';
  if (type == 'success') {
    header = '<h4><i class="fa fa-check-circle"></i> Sukses</h4><br>';
  } else {
    header = '<h4><i class="fa fa-question-circle"></i> Konfirmasi</h4><br>';
  }

  notyfy({
    layout: 'center',
    text: header + message,
    type: 'success',
    dismissQueue: false,
    modal: true,
    showEffect: function(bar) {
      bar.animate({height: 'toggle'}, 500, 'swing');
    },
    hideEffect: function(bar) {
      bar.animate({height: 'toggle'}, 500, 'swing');
    },
    buttons: [
      {
        addClass: 'btn btn-sm btn-success btn-notyfy-ok',
        text: '<i class="fa fa-check"></i> Ya',
        onClick: function(notyfy) {
          notyfy.close();

          if (typeof okCallback != 'undefined' && typeof okCallback == 'function') {
            okCallback();
          }
        }
      },
      {
        addClass: 'btn btn-sm btn-default btn-notyfy-no',
        text: '<i class="fa fa-close"></i> Tidak',
        onClick: function(notyfy) {
          notyfy.close();
          if (typeof noCallback != 'undefined' && typeof noCallback == 'function') {
            noCallback();
          }
        }
      }
    ],
    events: {
      shown: function() {
//        document.getElementsByClassName('notyfy_buttons')[0].style.textAlign = 'center';
        document.getElementsByClassName('btn-notyfy-ok')[0].focus();
      }
    }
  });
}

/**
 * {^_^) Tumbas JS <br>
 * <br>
 * Show Modal Window(dependent magnific-popup.js) <br>
 * @param {String} url URL content
 * @param {String} focusComponent Component focused when popup shown
 * @return {Modal} Modal Window
 */
function showModal(url, focusComponent) {
  $.magnificPopup.open({
    items: {
      src: url
    },
    modal: true,
    type: 'ajax',
    showCloseBtn: false,
    removalDelay: 300,
    mainClass: 'mfp-fade',
    focus: focusComponent,
//    alignTop : true
  });
}

/**
 * {^_^) Tumbas JS <br>
 * <br>
 * Show Modal Window(dependent magnific-popup.js) <br>
 * @param {String} url URL content
 * @param {String} focusComponent Component focused when popup shown
 * @return {Modal} Modal Window
 */
function showSplashScreen(url, focusComponent) {
  $.magnificPopup.open({
    items: {
      src: url
    },
    modal: true,
    type: 'ajax',
    showCloseBtn: false,
    removalDelay: 300,
    mainClass: 'mfp-fade',
    focus: focusComponent,
  });
}

/**
 * {^_^) Tumbas JS <br>
 * <br>
 * Close Modal Window(dependent magnific-popup.js) <br>
 */
function closeModal() {
  $.magnificPopup.close();
}

$.validator.setDefaults({
  debug: true,
  onkeyup: false,
  onclick: false,
  onfocusout: false,
  errorElement: 'em',
  errorClass: "has-error",
//  validClass : 'has-success',
  highlight: function(element, errorClass, validClass) {
    $(element).closest('.form-group').addClass(errorClass).removeClass(validClass);
  },
  unhighlight: function(element, errorClass, validClass) {
    $(element).closest('.form-group').removeClass(errorClass).addClass(validClass);
  }
});

$.extend($.validator.messages, {
  required: "Data ini harus diisi.",
  remote: "Silahkan perbaiki data ini.",
  email: "Silahkan masukkan format email yang benar.",
  url: "Silakan masukkan format URL yang benar.",
  date: "Silakan masukkan format tanggal yang benar.",
  dateISO: "Silakan masukkan format tanggal(ISO) yang benar.",
  number: "Silakan masukkan angka yang benar.",
  digits: "Silahkan masukan angka saja.",
  creditcard: "Silahkan masukkan format kartu kredit yang benar.",
  equalTo: "Silahkan masukkan nilai yg sama dengan sebelumnya.",
  maxlength: $.validator.format("Input dibatasi hanya {0} karakter."),
  minlength: $.validator.format("Input tidak kurang dari {0} karakter."),
  rangelength: $.validator.format("Panjang karakter yg diizinkan antara {0} dan {1} karakter."),
  range: $.validator.format("Silahkan masukkan nilai antara {0} dan {1}."),
  max: $.validator.format("Silahkan masukkan nilai lebih kecil atau sama dengan {0}."),
  min: $.validator.format("Silahkan masukkan nilai lebih besar atau sama dengan {0}.")
});

/**
 * {^_^) Tumbas JS <br>
 * <br>
 * Change input format to curreny format with separator (dependent inputmask.js)<br>
 */
function initCurrencyFormat() {
  $('.currency').inputmask('decimal',
          {'alias': 'numeric',
            'groupSeparator': '.',
            'autoGroup': true,
            'digits': 0,
            'radixPoint': ",",
            'digitsOptional': false,
            'prefix': '',
            'placeholder': '0',
            allowMinus: true,
            //removeMaskOnSubmit : true
          }
  );
}

/**
 * {^_^) Tumbas JS <br>
 * <br>
 * Change input to only numeric input (dependent inputmask.js)<br>
 */
function initNumericFormat() {
  $('.numeric').inputmask('numeric');
}

/**
 * {^_^) Tumbas JS <br>
 * <br>
 * Change format number to Indonesia Currency (dependent number_format.js)<br>
 * 
 * @param {int} number The input number
 * 
 * @returns {string} 
 */
function idr_currency_format(number) {
  return number_format(number, 0, ',', '.');
}

//prevent submit form by enter
$(window).keydown(function(event) {
  if (event.keyCode == 13) {
    event.preventDefault();
    return false;
  }
});