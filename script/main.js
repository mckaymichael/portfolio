$(document).ready(function() {

    $('.topic').click(function() {
        let $topic = $(this);
        let $webId = $topic.data('desktop-id');

        $('.overlay-content.active').removeClass('active').addClass('inactive');
        $('#' + $webId).removeClass('inactive').addClass('active');
    });

});
