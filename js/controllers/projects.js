    jQuery(document).ready(function() {

    "use strict";
    var urlPath   = "php/projects/";



    //////////////////////////////////////

    var records;

    $.ajax({
        url: urlPath + 'get.php',
        method:'GET',
        dataType:'json',
        success:function(data){

          var records = data.data;
          var startDate = $.datepicker.formatDate('M d,yy', new Date(records[0].startDate));
          var endDate = $.datepicker.formatDate('M d,yy', new Date(records[0].endDate));

          //////////////////

          $.each(records, function(key, value) {
            var current = key==0 ? "current" :" " ;
              $('.records_article_paginaton .pagination').find('.next').parent()
                  .before('<li><a class="page-numbers '+ current +'" key="'+key+'" href="#">'+(key+1)+'</a></li>');
          });

          $('.records_article').find("#startDate").html(startDate);
          $('.records_article').find("#endDate").html(endDate);

          $('.records_article').find("#projectName").html(records[0].prname);
          $('.records_article').find("#title").html(records[0].title);
          $('.records_article').find("#imageName").attr('src',"images/project/" + records[0].imageName);
          $('.records_article').find("#target").html(records[0].target);
          $('.records_article').find("#doner").html(records[0].doner);
          $('.records_article').find("#description").html(records[0].description);
          $('.records_article').find("#notes").html(records[0].notes);


          $('.records_article').find(".nxt-href").attr('href','newsdetail.php?id='+records[0].id );

          $('.records_article').find("#activitiesLink").attr('href','activities.php?prName='+records[0].prname );
          $('.records_article').find("#eventsLink").attr('href','events.php?prName='+records[0].prname );

          actions.newDetailsClicked(records);
          actions.nextClicked(records);

        },
        error: function(error) {
          // toastr.error(err.responseText, 'Notification', {timeOut: 5000})
        }
      });


    var actions = {
      //Pagination btns
      newDetailsClicked : function (records){
          $('.page-numbers:not(.next)').click(function(){

          var _this = $(this);

          var key = $(_this).attr("key");

          var recordsObject = records[parseInt(key)];

          var startDate = $.datepicker.formatDate('M d,yy', new Date(recordsObject.startDate));
          var endDate = $.datepicker.formatDate('M d,yy', new Date(recordsObject.endDate));

          ////////////////////////

          $('.records_article').find("#projectName").html(recordsObject.prname);
          $('.records_article').find("#title").html(recordsObject.title);
          $('.records_article').find("#imageName").attr('src',"images/project/" + recordsObject.imageName);
          $('.records_article').find("#target").html(recordsObject.target);
          $('.records_article').find("#doner").html(recordsObject.doner);
          $('.records_article').find("#description").html(recordsObject.description);
          $('.records_article').find("#notes").html(recordsObject.notes);

          $('.records_article').find("#activitiesLink").attr('href','activities.php?prName='+recordsObject.prname );
          $('.records_article').find("#eventsLink").attr('href','events.php?prName='+recordsObject.prname );

          $(".page-numbers.current").removeClass("current");
          $(_this).addClass("current");

          var target = $('.records_article') ;
          if( target.length ) {
               event.preventDefault();
               $('html, body').stop().animate({
                   scrollTop: target.offset().top-140
               }, 1000);
           }
        })
      },
      //Pagination next btn
      nextClicked :  function (records){
          $('.page-numbers.next').click(function(){

          var _this = $(this);

          var key = $(".page-numbers.current").attr("key");
              key = parseInt(key)+1;

          var recordsObject = records[key];

          var startDate = $.datepicker.formatDate('M d,yy', new Date(recordsObject.startDate));
          var endDate = $.datepicker.formatDate('M d,yy', new Date(recordsObject.endDate));

          ////////////////////////

          $('.records_article').find("#projectName").html(recordsObject.prname);
          $('.records_article').find("#title").html(recordsObject.title);
          $('.records_article').find("#imageName").attr('src',"images/project/" + recordsObject.imageName);
          $('.records_article').find("#target").html(recordsObject.target);
          $('.records_article').find("#doner").html(recordsObject.doner);
          $('.records_article').find("#description").html(recordsObject.description);
          $('.records_article').find("#notes").html(recordsObject.notes);

          $('.records_article').find("#activitiesLink").attr('href','activities.php?prName='+recordsObject.prname );
          $('.records_article').find("#eventsLink").attr('href','events.php?prName='+recordsObject.prname );

          $(".page-numbers.current").removeClass("current");
          var a = $("a[key='"+key+"']" ).addClass("current");

          var target = $('.records_article') ;
          if( target.length ) {
               event.preventDefault();
               $('html, body').stop().animate({
                   scrollTop: target.offset().top-140
               }, 1000);
           }
        })
      },

    }



    });
