jQuery(document).ready(function() {
  "use strict";

    $('#btnSubscribe').click(function(){

        var formData = $('#subscribeForm').serialize();

        if($('#email').val() === ''){
            $('#email').focus();
            toastr.error("Please, enter an email", 'Notification', {timeOut: 5000})
            return false;
        }

        $.ajax({
        url: 'sendmail.php',
        method: 'POST',
        data: formData,
        success: function(data) {

            var response = JSON.parse(data);

            //////////////////

            toastr.success(response.message, 'Notification', {timeOut: 5000})
            $('#email').val("")

        },
        error: function(error) {
            var err = JSON.parse(error.responseText);
             toastr.error(err['message'], 'Notification', {timeOut: 5000})
        }
        });
    })

 });
