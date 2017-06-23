    jQuery(document).ready(function() {

      "use strict";
      var urlPath   = "php/news/";



    //////////////////////////////////////

    var news,_data;
    if( $.urlParam('id')  ){
      _data= {
        id:$.urlParam('id'),
      }
    }
    $.ajax({
      url: urlPath + 'get.php',
      method:'GET',
      dataType:'json',
      data: _data,
      success:function(data){

        if(!data.data.length || data.data.length > 1){
          $('.site-main').children().remove();
          $('.site-main').append('<div class="alert alert-info" style="min-width: 331px;"><i class="fa fa-briefcase"></i>  NO DATA FOUND </div>');
          return;
        }
        var news = data.data;
        console.log(news)
        var newsDate = new Date(news[0].newsDate);
        var newsYear = newsDate.getFullYear();
          // var newsMonth = newsDate.getMonth()+1;
          var newsMonth = $.datepicker.formatDate('M', newsDate)

          var newsDay = newsDate.getDate();

          //////////////////

          $('.news_article').find("#year").html(newsYear);
          $('.news_article').find("#month").html(newsMonth);
          $('.news_article').find("#day").html(newsDay);
          $('.news_article').find("#title").html(news[0].title);
          $('.news_article').find("#author").html(news[0].author);
          $('.news_article').find("#img_").attr('src',"images/news/" + news[0].imageName);
          $('.news_article').find("#content").html(news[0].content);
          $('.news_article').find("#text").html(news[0].text);


        },
        error: function(error) {
          // toastr.error(err.responseText, 'Notification', {timeOut: 5000})
        }
      });

    var actions = {
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
