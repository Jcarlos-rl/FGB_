$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.fixed-action-btn').floatingActionButton();
    $('.slider').slider({
        height: 500
    });
    $('.carousel').carousel({
        dist: -10,
        indicators: true
    });
    $('.collapsible').collapsible();

    autoplay();
    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 4000);
    }
});