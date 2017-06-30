jQuery(document).ready(function() {
    "use strict";

    var urlPath = "php/index/";

    //////////////////////////////////////

    var actions = {
        initProjects: function() {
            $.ajax({
                url: urlPath + 'projects.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {

                    var records = data.data;

                    //////////////////

                    var projectHtml = $(".project_article").first().clone();

                    $('.current_projects').find('.project_article').remove()

                    $.each(records, function(key, val) {

                        var projectArticle = projectHtml.clone();

                        projectArticle.find('#description').html(val.description);
                        projectArticle.find('#title').html(val.title);
                        projectArticle.find("#image").attr('src', "images/project/" + val.imageName);
                        projectArticle.find("#activitiesLink").attr('href', 'activities.php?prName=' + val.prname);
                        projectArticle.find("#eventsLink").attr('href', 'events.php?prName=' + val.prname);

                        if (key % 2 != 0)
                            projectArticle.children().removeClass('block-img-left').addClass('block-img-right').addClass('mgb0')

                        projectArticle.appendTo(".current_projects")

                    })
                },
                error: function(error) {
                    // toastr.error(err.responseText, 'Notification', {timeOut: 5000})
                }
            });
        },
        initEvents: function() {
            $.ajax({
                url: urlPath + 'events.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {

                    var records = data.data;

                    //////////////////

                    var eventHtml = $(".event_article").first().clone();

                    $('.current_events').find('.event_article').remove()

                    $.each(records, function(key, val) {

                        var eventArticle = eventHtml.clone();

                        var eventDate = new Date(val.eDate)
                        var eventMonth = eventDate.getMonth()+1;
                        eventMonth = $.datepicker.formatDate('M ', eventDate)
                        var eventDay = eventDate.getDate();


                        eventArticle.find(".day").html(eventDay);
                        eventArticle.find(".month").html( eventMonth);
                        eventArticle.find('#description').html(val.description);
                        eventArticle.find('#title').html(val.title);
                        eventArticle.find("#image").attr('src', "images/event/" + val.imageName);

                        eventArticle.appendTo(".current_events")

                    })
                },
                error: function(error) {
                    // toastr.error(err.responseText, 'Notification', {timeOut: 5000})
                }
            });
        },
        initNews: function() {
            $.ajax({
                url: urlPath + 'news.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {

                    var records = data.data;

                    //////////////////

                    var newstHtml = $(".news_article").first().clone();

                    $('.current_news').find('.news_article').remove()

                    $.each(records, function(key, val) {

                        var newsArticle = newstHtml.clone();

                        newsArticle.find('#text').html(val.text);
                        newsArticle.find('#title').html(val.title);
                        newsArticle.find("#image").attr('src', "images/news/" + val.imageName);
                        newsArticle.find("#newsDetailLink").attr('href', 'newsdetail.php?id=' + val.Id);
                        newsArticle.attr('data-wow-delay','.'+ (key+1)*25 +'s');
                        newsArticle.appendTo(".current_news")

                    })
                },
                error: function(error) {
                    // toastr.error(err.responseText, 'Notification', {timeOut: 5000})
                }
            });
        },
        initActivities: function() {
            $.ajax({
                url: urlPath + 'activities.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {

                    var records = data.data;

                    //////////////////

                    var activitytHtml = $(".activity_article").first().clone();

                    $('.current_activities').find('.element-item').remove()

                    $.each(records, function(key, val) {

                        var activityArticle = activitytHtml.clone();

                        activityArticle.find('#atype').html(val.atype);
                        activityArticle.find('#prName').html(val.prName);
                        activityArticle.find('#title').html(val.title);
                        activityArticle.find("#image").attr('src', "images/activity/" + val.imageName);
                        var atype = val.atype
                        activityArticle.addClass(atype)

                        activityArticle.appendTo(".current_activities")

                    })
                },
                error: function(error) {
                    // toastr.error(err.responseText, 'Notification', {timeOut: 5000})
                }
            });
        }
    }

    actions.initProjects()
    actions.initEvents()
    actions.initNews()
    actions.initActivities()

});
