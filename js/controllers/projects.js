jQuery(document).ready(function() {

  "use strict";
  var urlPath = "php/projects/";

    //////////////////////////////////////

    var records,fullRecords;

    var current_page = 1;
    var records_per_page = 1;
    var articleHtml = $( ".records_article" ).first().clone();

    $.ajax({
      url: urlPath + 'get.php',
      method: 'GET',
      dataType: 'json',
      success: function(data) {

        if (!data.data.length) {
              $('.records_article').children().remove()
              $('.records_article_paginaton').children().remove()
              $('.records_article').append('<div class="alert alert-info" style="min-width: 331px;"><i class="fa fa-briefcase"></i>  NO PROJECTS FOUND </div>');
              return;
            }

        fullRecords = data.data;
        records = fullRecords;

        var startDate = $.datepicker.formatDate('M d,yy', new Date(records[0].startDate));
        var endDate = $.datepicker.formatDate('M d,yy', new Date(records[0].endDate));

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

            var target = $('.records_article');
            if (target.length) {
              event.preventDefault();
              $('html, body').stop().animate({
                scrollTop: target.offset().top - 140
              }, 1000);
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


            var target = $('.records_article');
            if (target.length) {
              event.preventDefault();
              $('html, body').stop().animate({
                scrollTop: target.offset().top - 140
              }, 1000);
            }
          })
        },
        firstClicked: function() {
          $('.page-numbers.first').click(function() {

            current_page = 1;
            actions.changePage(current_page);

            var target = $('.records_article');
            if (target.length) {
              event.preventDefault();
              $('html, body').stop().animate({
                scrollTop: target.offset().top - 140
              }, 1000);
            }
          })
        },
        lastClicked: function() {
          $('.page-numbers.last').click(function() {


            current_page = numPages();
            actions.changePage(current_page);

            var target = $('.records_article');
            if (target.length) {
              event.preventDefault();
              $('html, body').stop().animate({
                scrollTop: target.offset().top - 140
              }, 1000);
            }
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



            $('.articles').find('.records_article') .remove()

            for (var i = (page - 1) * records_per_page; i < (page * records_per_page); i++) {
              if ( records[i] ) {

                var recordsObject = records[i];
                var startDate = $.datepicker.formatDate('M d,yy', new Date(recordsObject.startDate));
                var endDate = $.datepicker.formatDate('M d,yy', new Date(recordsObject.endDate));

                ////////////////////////

                var article = articleHtml.clone()

                article.find("#startDate").html(recordsObject.startDate);
                article.find("#endDate").html(recordsObject.endDate);

                article.find("#projectName").html(recordsObject.prname);
                article.find("#title").html(recordsObject.title);
                article.find("#imageName").attr('src', "images/project/" + recordsObject.imageName);
                article.find("#target").html(recordsObject.target);
                article.find("#doner").html(recordsObject.doner);
                article.find("#description").html(recordsObject.description);
                article.find("#notes").html(recordsObject.notes);

                article.find("#activitiesLink").attr('href', 'activities.php?prName=' + recordsObject.prname);
                article.find("#eventsLink").attr('href', 'events.php?prName=' + recordsObject.prname);

                article.appendTo('.articles')
              }
            }

            page_span.html(page);

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

        }

        function numPages() {
          return Math.ceil(records.length / records_per_page);
        }



      });
