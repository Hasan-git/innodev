jQuery(document).ready(function() {
  "use strict";

  var urlPath   = "php/activities/";

    //////////////////////////////////////

    var record,_data;
    if( $.urlParam('id') ){
      _data= {
        id:$.urlParam('id'),
      }
    }

    $.ajax({
      url: urlPath + 'get.php',
      method: 'GET',
      data: _data,
      dataType: 'json',
      success: function(data) {
        record = data.data[0];
            //////////////////
            $.each(record.images,function(key,val){
              $('#sync3,#sync4').append('<div class="item ">'+
                '<img src="images/activity/'+val.imageName+'" class="img-responsive" alt="Image">'+
                '</div>'
                );
            })
            $('#description').html(record.description);
            $('#title').html(record.title);
            $('#prName').html(record.prName);
            $('#atype').html(record.atype);
            $('#location').html(record.location);
            $('#actDate').html(record.actDate);
            initOwl() // OWL is modified to global variable in custom-owl.js to fit actDetails.js ajax call
          },
          error: function(error) {
            // toastr.error(err.responseText, 'Notification', {timeOut: 5000})
          }
          });


 });
