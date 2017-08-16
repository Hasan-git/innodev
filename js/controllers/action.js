jQuery(document).ready(function() {
    "use strict";

    //VALIDATION CONFIGURATION
      var conf = $.formUtils.defaultConfig();
      conf.language = 'en';
      conf.modules = 'security, date';
      conf.scrollToTopOnError = false;

      // Call the setup function
      $.validate({
          language: conf.language,
          modules: conf.modules
      });


    ////////////////////////////////


    var actions = {

        mail: function() {

            $('#send').click(function() {

               if (!$('#contactForm').isValid(conf.language, conf, true)){

                 toastr.error("Some fields are required", 'Notification', {
                            timeOut: 5000
                        })
                 return false;
              }

                var formData = $('#contactForm').serialize();

                $.ajax({
                    url: 'send_form_email.php',
                    method: 'POST',
                    data: formData,
                    success: function(data) {

                        var response = data;

                        //////////////////

                        toastr.success(response, 'Notification', {
                            timeOut: 5000
                        })
                        $('#email').val("")

                    },
                    error: function(error) {
                        toastr.error(error.responseText, 'Notification', {
                            timeOut: 5000
                        })
                    }
                });

            })
        }
    }

    actions.mail();


});
