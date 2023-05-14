$(document).ready(function(){

var inProgress = false;
var startFrom = 10;

    $(window).scroll(function() {

        if($(window).scrollTop() + $(window).height() >= $(document).height() && !inProgress) {

        $.ajax({
            url: 'scrolling.php',
            method: 'POST',
            data: {"startFrom" : startFrom},
            beforeSend: function() {
            inProgress = true;}
            }).done(function(data){

            data = jQuery.parseJSON(data);

            if (data.length > 0) {

            $.each(data, function(index, data){

            $("#maspost").append("<p><b>" + data.Name_P + "</b><br /><p>" + data.Text_P + "<br /></p>");
            });

            inProgress = false;
            startFrom += 10;
            }});
        }
    });
});
