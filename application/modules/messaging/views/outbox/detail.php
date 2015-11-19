<div class="col-md-6 col-md-offset-3">
  <div class="box box-success direct-chat direct-chat-success">
    <div class="box-header with-border">
      <h1 class="box-title"><i class="fa fa-file-text-o"></i> <?php echo $title; ?></h1>
      <div class="pull-right">
        <i class="fa fa-close" onclick="closeModal()"></i>
      </div>
    </div>
    <form id="ff" class="">
      <input type="hidden" name="dest_number" value="<?php echo $title; ?>">
      <div class="box-body">
        <div class="direct-chat-messages" style="height: 400px; overflow-x: hidden; word-break: break-all">

          <?php
          $udh = '';
          $sms_type = 1;
          $i=0;
          $img = base_url('assets/images/employee/male.png');
          foreach ($sms as $value) {
            if ($value->udh != '' && $value->sms_type == $sms_type && $value->udh == $udh) {
              echo "<script>$('#msg-{$i}').append('{$value->sms_text}');</script>";
            } else {
              $i++;
              if ($value->sms_type == 3) { // inbox
                echo "
              <div class='direct-chat-msg col-md-11'>
            <div class='direct-chat-info clearfix'>
              <span class='direct-chat-name pull-left'>{$value->sender_id}</span>
              <span class='direct-chat-timestamp pull-right'>{$value->sms_date} <i class='fa fa-arrow-circle-down'></i></span> 
            </div>
            <img class='direct-chat-img' src='{$img}' alt='message user image'>
            <div class='direct-chat-text' id='msg-{$i}'>
              {$value->sms_text}
            </div>
          </div>
              ";
              } else { //outbox & sentitems
                if ($value->sms_type == 1) {
                  $status = 'fa fa-clock-o';
                } else if ($value->sms_type == 2) {
                  if (strripos($value->status, 'SendingOk') !== FALSE) {
                    $status = 'fa fa-check-circle';
                  } else {
                    $status = 'fa fa-exclamation-circle';
                  }
                }
                echo "
              <div class='direct-chat-msg col-md-11 right pull-right'>
            <div class='direct-chat-info clearfix'>
              <span class='direct-chat-name pull-right'>{$value->sender_id}</span>
              <span class='direct-chat-timestamp pull-left'>{$value->sms_date} <i class='{$status}'></i></span>
            </div>
            <img class='direct-chat-img' src='{$img}' alt='message user image'>
            <div class='direct-chat-text text-right' id='msg-{$i}'>
            {$value->sms_text}
            </div>
          </div>
              ";
              }
            }
            $sms_type = $value->sms_type;
            $udh = $value->udh;
            
          }
          ?>

        </div>
      </div>
      <div class="box-footer text-right">
        <div class="col-md-1 form-control-static" id="char-count">
        </div>
        <div class="col-md-11">
          <div class="input-group input-group-">
            <input name="sms_text" id="sms_text" type="text" class="form-control" autofocus="" required="" autocomplete="off">
            <span class="input-group-btn">
              <button class="btn btn-success" id="save_btn" type="submit" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Mengirim..."><i class="fa fa-send"></i> Kirim</button>
            </span>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
          $(document).ready(function() {

            $('#sms_text').keyup(function() {
              var smsText = $(this).val();
              $('#char-count').html(smsText.length);
              console.log(smsText);
            });

            autoScroll();
            $('#ff').submit(function(e) {
              e.preventDefault();
              var btn = $('#save_btn');
              $.ajax({
                url: '<?php echo base_url('messaging/inbox/sending'); ?>',
                type: 'post',
                data: $('#ff').serialize(),
                dataType: 'json',
                beforeSend: function() {
                  btn.button('loading');
                },
                success: function(data) {
                  var img = '<?php  echo base_url('assets/images/employee/male.png'); ?>';
                  var html = '<div class="direct-chat-msg right col-md-11 pull-right">\n\
            <div class="direct-chat-info clearfix">\n\
                    <span class="direct-chat-name pull-right">' + data.sender_id + '</span>\n\
              <span class="direct-chat-timestamp pull-left">' + data.sms_date + ' <i class="fa fa-clock-o"></i></span>\n\
            </div>\n\
            <img class="direct-chat-img" src="'+img+'" alt="message user image">\n\
            <div class="direct-chat-text text-right">\n\
              ' + data.sms_text + '\n\
            </div>\n\
          </div>';

                  $('.direct-chat-messages').append(html);
                  autoScroll();
                  $('#sms_text').val('');
                },
                complete: function() {
                  btn.button('reset');
                  reloadTable('dataTable');
                  $('#char-count').html(0);
                }
              });
            });

          });

          function autoScroll() {
            $('.direct-chat-messages').scrollTop($('.direct-chat-messages')[0].scrollHeight);
          }

</script>