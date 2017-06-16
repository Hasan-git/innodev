    jQuery(document).ready(function() {

    "use strict";
    var urlPath   = "php/news/";



    //////////////////////////////////////

    var news,_data;
    if( $.urlParam('month') && $.urlParam('year') ){
      _data= {
          month:$.urlParam('month'),
          year:$.urlParam('year')
        }
    }
    $.ajax({
        url: urlPath + 'get.php',
        method:'GET',
        dataType:'json',
        data: _data,
        success:function(data){

          var news = data.data;
          var newsDate = new Date(news[0].newsDate);
          var newsMonth = newsDate.getMonth()+1;
          var newsDay = newsDate.getDate();

          //////////////////

          // $.each(news, function(key, value) {
          //   // console.log(key)
          //   var current = key==0 ? "current" :" " ;
          //     $('.news_article_paginaton .pagination').find('.next').parent()
          //         .before('<li><a class="page-numbers '+ current +'" key="'+key+'" href="#">'+(key+1)+'</a></li>');
          // });
          actions.paginate(news,0,'initial')

          $('.news_article').find(".month").html(newsMonth);
          $('.news_article').find(".day").html(newsDay);
          $('.news_article').find("img").attr('src',"images/news/" + news[0].imageName);
          $('.news_article').find(".news_title").html(news[0].title);
          $('.news_article').find(".author").html(news[0].author);
          $('.news_article').find(".content").html(news[0].text);
          $('.news_article').find(".nxt-href").attr('href','newsdetail.php?id='+news[0].Id );

          actions.newDetailsClicked(news);
          actions.nextClicked(news);
          actions.preClicked(news);

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

          var newsObject = records[parseInt(key)];

          var newsDate = new Date(newsObject.newsDate);
          var newsMonth = newsDate.getMonth()+1;
          var newsDay = newsDate.getDate();

          ////////////////////////

          $('.news_article').find(".month").html(newsMonth);
          $('.news_article').find(".day").html(newsDay);
          $('.news_article').find("img").attr('src',"images/news/" + newsObject.imageName);
          $('.news_article').find(".news_title").html(newsObject.title);
          $('.news_article').find(".author").html(newsObject.author);
          $('.news_article').find(".content").html(newsObject.text);
          $('.news_article').find(".nxt-href").attr('href','newsdetail.php?id=' + newsObject.Id );

          $(".page-numbers.current").removeClass("current");
          $(_this).addClass("current");

          var target = $('#article') ;
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

          // console.log($('.page-numbers key['+key+']'),recordsObject);


          var newsDate = new Date(recordsObject.newsDate);
          var newsMonth = newsDate.getMonth()+1;
          var newsDay = newsDate.getDate();

          ////////////////////////

          $('.news_article').find(".month").html(newsMonth);
          $('.news_article').find(".day").html(newsDay);
          $('.news_article').find("img").attr('src',"images/news/" + recordsObject.imageName);
          $('.news_article').find(".news_title").html(recordsObject.title);
          $('.news_article').find(".author").html(recordsObject.author);
          $('.news_article').find(".content").html(recordsObject.text);
          $('.news_article').find(".nxt-href").attr('href','newsdetail.php?id=' + recordsObject.Id );

          // $(".page-numbers.current").removeClass("current");
          // $('.page-numbers key['+key+']').addClass("current");

          var target = $('#article') ;
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

           var key = $('.page-numbers:not(.next)').last().attr("key");
               key = (parseInt(key) + 1 ); // sum with 2 -> one for array shift and 1 increment for the next key

              actions.paginate(records,key,'next');

          var target = $('#article') ;
          if( target.length ) {
               event.preventDefault();
               $('html, body').stop().animate({
                   scrollTop: target.offset().top-140
               }, 1000);
           }
        })
      },
      preClicked :  function (records){
          $('.page-numbers.pre').click(function(){

          var _this = $(this);

          var key = $('.page-numbers:not(.pre)').first().attr("key");
              key = (parseInt(key) - 1 );

          actions.paginate(records,key,'pre');


          var target = $('#article') ;
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

              var current = parseInt(key) === parseInt(fnKey) ? "current" :" " ;

              $('.records_article_paginaton .pagination').find('.next').parent()
                  .before('<li><a class="page-numbers '+ current +' " key="'+key+'" href="#">'+(key+1)+'</a></li>');

            }else if( status == 'pre' && key <= fnKey && key > fnKey-limit ){

               var current = parseInt(key) === parseInt(fnKey) ? "current" :" " ;

              $('.records_article_paginaton .pagination').find('.next').parent()
                  .before('<li><a class="page-numbers '+ current +' " key="'+key+'" href="#">'+(key+1)+'</a></li>');

            }

            if(parseInt(key) === parseInt(fnKey))
                  actions.newAttach(records,fnKey)

            actions.newDetailsClicked(records);
            actions.nextClicked(records);
            actions.preClicked(records);


          });
      },
      initArchive: function(){

        $.ajax({
        url: urlPath + 'date.php',
        method:'GET',
        dataType:'json',
        success:function(response){
            // console.log(response);
            $.each(response.data,function(key,value){
                $("#archive").append('<li><a href="news.php?month='+value.month+'&year='+value.year+'">'+value.month+' '+value.year+'</a><span class="count">('+ value.count+')</span></li>')

            })
        },
        error:function(error){

        }
      })
      }
    }


    actions.initArchive();



    });
