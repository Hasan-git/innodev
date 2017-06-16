    jQuery(document).ready(function() {

    "use strict";
    var urlPath   = "php/activities/";



    //////////////////////////////////////

    var records;
    var limit;

    $.ajax({
        url: urlPath + 'get.php',
        method:'GET',
        dataType:'json',
        success:function(data){

          var records = data.data;
          // var startDate = $.datepicker.formatDate('M d,yy', new Date(records[0].startDate));
          // var endDate = $.datepicker.formatDate('M d,yy', new Date(records[0].endDate));

          //////////////////

          $.each(records, function(key, value) {
            var current = key==0 ? "current" :" " ;
              $('.records_article_paginaton .pagination').find('.next').parent()
                  .before('<li><a class="page-numbers '+ current +'" key="'+key+'" href="#">'+(key+1)+'</a></li>');
          });

          //images/activity/'+ value.imageName +'

          $.each(records, function(key, value) {

              var a= '<div class="element-item '+ value.atype +'">'+
                        '<a class="portfolio-img-demo" href="actdetail.php">'+
                           '<img src="images/activity/'+ value.imageName +'" class="img-responsive" alt="Image">'+
                        '</a>'+
                        '<div class="project-info">'+
                           '<a href="actdetail.php">'+
                              '<h4 class="title-project text-cap text-cap">'+ value.title +' </h4>'+
                           '</a>'+
                           '<a href="actdetail.php" class="cateProject">'+ value.atype +' / '+ value.prName +'</a>'+
                        '</div>'+
                     '</div>';

               $('.projectContainer').append(a)
          });

          actions.newDetailsClicked(records);
          // actions.nextClicked(records);
          actions.nextBtnClicked(records);

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

      nextBtnClicked :  function (records){
          $('.page-numbers.next').click(function(){

          var _this = $(this);

          var key = $(".page-numbers.current").attr("key");
              key = parseInt(key)+1;

              console.log($('.pagination .page-numbers:not(.next)').last().attr('key'))

          // var recordsObject = records[key];

          // var startDate = $.datepicker.formatDate('M d,yy', new Date(recordsObject.startDate));
          // var endDate = $.datepicker.formatDate('M d,yy', new Date(recordsObject.endDate));

          // ////////////////////////

          // $('.records_article').find("#projectName").html(recordsObject.prname);
          // $('.records_article').find("#title").html(recordsObject.title);
          // $('.records_article').find("#imageName").attr('src',"images/project/" + recordsObject.imageName);
          // $('.records_article').find("#target").html(recordsObject.target);
          // $('.records_article').find("#doner").html(recordsObject.doner);
          // $('.records_article').find("#description").html(recordsObject.description);
          // $('.records_article').find("#notes").html(recordsObject.notes);

          // $('.records_article').find("#activitiesLink").attr('href','activities.php?prName='+recordsObject.prname );
          // $('.records_article').find("#eventsLink").attr('href','events.php?prName='+recordsObject.prname );

          // $(".page-numbers.current").removeClass("current");
          // var a = $("a[key='"+key+"']" ).addClass("current");

          // var target = $('.records_article') ;
          // if( target.length ) {
          //      event.preventDefault();
          //      $('html, body').stop().animate({
          //          scrollTop: target.offset().top-140
          //      }, 1000);
          //  }
        })
      }

    }



    });
