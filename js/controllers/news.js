    jQuery(document).ready(function() {

      "use strict";
      var urlPath = "php/news/";



        //////////////////////////////////////

        var records, _data,fullRecords;

        var current_page = 1;
        var records_per_page = 2;
        var articleHtml = $(".records_article").first().clone();

        if ($.urlParam('month') && $.urlParam('year')) {
          _data = {
            month: $.urlParam('month'),
            year: $.urlParam('year')
          }
        }
        $.ajax({
          url: urlPath + 'get.php',
          method: 'GET',
          dataType: 'json',
          data: _data,
          success: function(data) {

            if (!data.data.length) {
              $('.records_article').children().remove()
              $('.records_article_paginaton').children().remove()
              $('.records_article').append('<div class="alert alert-info" style="min-width: 331px;"><i class="fa fa-briefcase"></i>  NO NEWS FOUND </div>');
              return;
            }

            var fullRecords = data.data;
            records = fullRecords;

            //////////////////

            actions.nextClicked();
            actions.preClicked();
            actions.firstClicked();
            actions.lastClicked();
            actions.changePage(1)

              },
              error: function(error) {
                // toastr.error(err.responseText, 'Notification', {timeOut: 5000})
              }
            });


        var actions = {
            //Pagination next btn
            nextClicked: function() {
              $('.page-numbers.next').click(function() {

                if (current_page < numPages()) {
                  current_page++;
                  actions.changePage(current_page);
                }
              })
            },
            //Pagination pre btn
            preClicked: function() {
              $('.page-numbers.pre').click(function() {

                if (current_page > 1) {
                  current_page--;
                  actions.changePage(current_page);
                }
              })
            },
            firstClicked: function() {
              $('.page-numbers.first').click(function() {

                current_page = 1;
                actions.changePage(current_page);
              })
            },
            lastClicked: function() {
              $('.page-numbers.last').click(function() {

                current_page = numPages();
                actions.changePage(current_page);
              })
            },
            changePage: function(page) {
              var btn_next = $('.next');
              var btn_prev = $('.pre');
              var btn_first = $('.first');
              var btn_last = $('.last');
              var page_span = $('.page');

                // Validate page
                if (page < 1) page = 1;
                if (page > numPages()) page = numPages();



                $('.articles').find('.records_article').remove()

                for (var i = (page - 1) * records_per_page; i < (page * records_per_page); i++) {
                  if (records[i]) {

                    var recordsObject = records[i];
                    var eventDate = new Date(recordsObject.newsDate);
                    var newsMonth = eventDate.getMonth() + 1;
                    var newsDay = eventDate.getDate();

                        ////////////////////////

                        var article = articleHtml.clone()

                        article.find(".month").html(newsMonth);
                        article.find(".day").html(newsDay);
                        article.find("img").attr('src', "images/news/" + recordsObject.imageName);
                        article.find(".news_title").html(recordsObject.title);
                        article.find(".author").html(recordsObject.author);
                        article.find(".content").html(recordsObject.text);
                        article.find(".nxt-href").attr('href', 'newsdetail.php?id=' + recordsObject.Id);

                        article.prependTo('.articles')
                      }
                    }

                    page_span.html(page);

                    var target = $('.records_article');
                    if (target.length) {
                      event.preventDefault();
                      $('html, body').stop().animate({
                        scrollTop: target.offset().top - 140
                      }, 1000);
                    }

                    if (page == 1) {
                      btn_prev.css('visibility', 'hidden');
                      btn_first.css('visibility', 'hidden');
                    } else {
                      btn_prev.css('visibility', 'visible');
                      btn_first.css('visibility', 'visible');
                    }

                    if (page == numPages()) {
                      btn_next.css('visibility', 'hidden');
                      btn_last.css('visibility', 'hidden');
                    } else {
                      btn_next.css('visibility', 'visible');
                      btn_last.css('visibility', 'visible');
                    }

                    setInterval(function() {
                      if ($('.projectContainer').height() < 400) {
                        $('.records_article_paginaton').css('margin-top', 280 + 'px')
                      } else {
                        $('.records_article_paginaton').css('margin-top', 0 + 'px')
                      }

                    }, 1000);
                  },
                  initArchive: function() {
                    $.ajax({
                      url: urlPath + 'date.php',
                      method: 'GET',
                      dataType: 'json',
                      success: function(response) {
                        // console.log(response);
                        $.each(response.data, function(key, value) {
                          $("#archive").append('<li><a href="news.php?month=' + value.month + '&year=' + value.year + '">' + value.month + ' ' + value.year + '</a><span class="count">(' + value.count + ')</span></li>')

                        })
                      },
                      error: function(error) {

                      }
                    })
                  }
                }


                actions.initArchive();

            function numPages() {
              return Math.ceil(records.length / records_per_page);
            }


              });
