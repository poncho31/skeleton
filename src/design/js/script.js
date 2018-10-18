// $(document).ready(function(){
//     var url = window.location.href;
//     $('a').click(function(e){
//         e.preventDefault();
//         console.log(e.currentTarget.href);
//         alert('ff');
//         $('a[href="' + url + '"]').addClass('active');
//         window.location.replace(e.currentTarget.href);
//     })
//     console.log(url);

// })

$(document).ready(function () {
    $(".textLoaded").addClass('loaded');

    $(window).on('beforeunload', function () {
        $('.textLoaded').removeClass('loaded');
    });
});