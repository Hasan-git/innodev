    jQuery(document).ready(function() {

      "use strict";
      var urlPath   = "php/events/";



    //////////////////////////////////////

    var records,_data;
    if( $.urlParam('prName') ){
      _data= {
        prName:$.urlParam('prName'),
      }
    }

    $.ajax({
      url: urlPath + 'get.php',
      method:'GET',
      dataType:'json',
      data: _data,
      success:function(data){

        if(!data.data.length){
          $('.records_article').children().remove()
          $('.records_article_paginaton').children().remove()
          $('.records_article').append('<div class="alert alert-info" style="min-width: 331px;"><i class="fa fa-briefcase"></i>  NO EVENTS FOUND </div>');
          return;
        }


        var records = data.data;
        var eventDate = new Date(records[0].eDate);
        var eventMonth = eventDate.getMonth()+1;
        var eventDay = eventDate.getDate();


          //////////////////

          actions.paginate(records,0,'initial')

          $('.records_article').find(".day").html(eventMonth);
          $('.records_article').find(".month").html(eventDay);

          $('.records_article').find("#projectName").html(records[0].prName);
          $('.records_article').find("#title").html(records[0].title);
          $('.records_article').find("#img").attr('src',"images/event/" + records[0].imageName);
          $('.records_article').find("#description").html(records[0].description);
          $('.records_article').find("#location").html(records[0].location);

          actions.newDetailsClicked(records);
          actions.nextClicked(records);
          actions.preClicked(records);

        },
        error: function(error) {
          // toastr.error(err.responseText, 'Notification', {timeOut: 5000})
        }
      });


    var actions = {
      //Pagination btns
      newDetailsClicked : function (records){

        $('.page-numbers:not(.next,.pre)').click(function(){

          var _this = $(this);

          var key = $(_this).attr("key");

          var recordsObject = records[parseInt(key)];

          var eventDate = new Date(recordsObject.eDate);
          var eventMonth = eventDate.getMonth()+1;
          var eventDay = eventDate.getDate();

            ////////////////////////

            $('.records_article').find(".day").html(eventMonth);
            $('.records_article').find(".month").html(eventDay);
            $('.records_article').find("#projectName").html(recordsObject.prName);
            $('.records_article').find("#title").html(recordsObject.title);
            $('.records_article').find("#img").attr('src',"images/event/" + recordsObject.imageName);
            $('.records_article').find("#description").html(recordsObject.description);
            $('.records_article').find("#location").html(recordsObject.location);

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
  newAttach : function (records,preferedKey){

    var key = preferedKey ;

    var recordsObject = records[parseInt(key)];

    console.log($('.page-numbers key['+key+']'),recordsObject);


    var eventDate = new Date(recordsObject.eDate);
    var eventMonth = eventDate.getMonth()+1;
    var eventDay = eventDate.getDate();

          ////////////////////////

          $('.records_article').find(".day").html(eventMonth);
          $('.records_article').find(".month").html(eventDay);
          $('.records_article').find("#projectName").html(recordsObject.prName);
          $('.records_article').find("#title").html(recordsObject.title);
          $('.records_article').find("#img").attr('src',"images/event/" + recordsObject.imageName);
          $('.records_article').find("#description").html(recordsObject.description);
          $('.records_article').find("#location").html(recordsObject.location);

          // $(".page-numbers.current").removeClass("current");
          // $('.page-numbers key['+key+']').addClass("current");

          var target = $('.records_article') ;
          if( target.length ) {
           event.preventDefault();
           $('html, body').stop().animate({
             scrollTop: target.offset().top-140
           }, 1000);
         }
       },
      //Pagination next btn
      nextClicked :  function (records){
        $('.page-numbers.next').click(function(){

          var _this = $(this);

          var key = $('.page-numbers:not(.next)').last().attr("key");
              key = (parseInt(key) + 1 ); // sum with 2 -> one for array shift and 1 increment for the next key

              actions.paginate(records,key,'next');


              var target = $('.records_article') ;
              if( target.length ) {
               event.preventDefault();
               $('html, body').stop().animate({
                 scrollTop: target.offset().top-140
               }, 1000);
             }
           })
      },
      //Pagination pre btn
      preClicked :  function (records){
        $('.page-numbers.pre').click(function(){

          var _this = $(this);

          var key = $('.page-numbers:not(.pre)').first().attr("key");
          key = (parseInt(key) - 1 );

          actions.paginate(records,key,'pre');


          var target = $('.records_article') ;
          if( target.length ) {
           event.preventDefault();
           $('html, body').stop().animate({
             scrollTop: target.offset().top-140
           }, 1000);
         }
       })
      },
      paginate: function(records,fnKey,status){

        //pagination limit
        var limit = 2;

        if(fnKey> records.length-1 || fnKey < 0)
          return false;

        $('.records_article_paginaton .page-numbers:not(.next,.pre) ').remove();
        $(".page-numbers.current").removeClass("current");
        $.each(records, function(key, value) {

          if( (status == 'next' || status == 'initial' ) && key >=fnKey && key < fnKey+limit ){
            if(parseInt(key) === parseInt(fnKey))
              actions.newAttach(records,fnKey)

            var current = parseInt(key) === parseInt(fnKey) ? "current" :" " ;
            $('.records_article_paginaton .pagination').find('.next').parent()
            .before('<li><a class="page-numbers '+ current +' " key="'+key+'" href="#">'+(key+1)+'</a></li>');
          }else if( status == 'pre' && key <= fnKey && key > fnKey-limit ){

            if(parseInt(key) === parseInt(fnKey))
              actions.newAttach(records,fnKey)

            var current = parseInt(key) === parseInt(fnKey) ? "current" :" " ;
            $('.records_article_paginaton .pagination').find('.next').parent()
            .before('<li><a class="page-numbers '+ current +' " key="'+key+'" href="#">'+(key+1)+'</a></li>');
          }
          actions.newDetailsClicked(records);
          actions.nextClicked(records);
          actions.preClicked(records);
        });
  }

}



});
