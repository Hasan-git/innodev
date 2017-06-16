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

          $.each(news, function(key, value) {
            // console.log(key)
            var current = key==0 ? "current" :" " ;
              $('.news_article_paginaton .pagination').find('.next').parent()
                  .before('<li><a class="page-numbers '+ current +'" key="'+key+'" href="#">'+(key+1)+'</a></li>');
          });

          $('.news_article').find(".month").html(newsMonth);
          $('.news_article').find(".day").html(newsDay);
          $('.news_article').find("img").attr('src',"images/news/" + news[0].imageName);
          $('.news_article').find(".news_title").html(news[0].title);
          $('.news_article').find(".author").html(news[0].author);
          $('.news_article').find(".content").html(news[0].text);
          $('.news_article').find(".nxt-href").attr('href','newsdetail.php?id='+news[0].id );

          actions.newDetailsClicked(news);
          actions.nextClicked(news);

        },
        error: function(error) {
          // toastr.error(err.responseText, 'Notification', {timeOut: 5000})
        }
      });


    var actions = {
      initNews: function(news){


      },
      //Pagination btns
      newDetailsClicked : function (news){
          $('.page-numbers:not(.next)').click(function(){

          var _this = $(this);

          var key = $(_this).attr("key");

          var newsObject = news[parseInt(key)];

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
          $('.news_article').find(".nxt-href").attr('href','newsdetail.php?id=' + newsObject.id );

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
      //Pagination next btn
      nextClicked :  function (news){
          $('.page-numbers.next').click(function(){

          var _this = $(this);

          var key = $(".page-numbers.current").attr("key");
              key = parseInt(key)+1;

          var newsObject = news[key];

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
          $('.news_article').find(".nxt-href").attr('href','newsdetail.php?id=' + newsObject.id );

          $(".page-numbers.current").removeClass("current");
          var a = $("a[key='"+key+"']" ).addClass("current");

          var target = $('#article') ;
          if( target.length ) {
               event.preventDefault();
               $('html, body').stop().animate({
                   scrollTop: target.offset().top-140
               }, 1000);
           }
        })
      },
      initArchive: function(){

        $.ajax({
        url: urlPath + 'date.php',
        method:'GET',
        dataType:'json',
        success:function(response){
            console.log(response);
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
