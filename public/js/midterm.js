var $burger = $('#menuToggle');
var $logo = $('.logo');
var $nav = $('.mobile ul');
var hidden = true;

$burger.on('click', () => {
    if (hidden) {
        $logo.css('display', 'none');
        $nav.css('overflow', 'unset');
        $nav.css('visibility', 'unset');
        hidden = false;
    } else {
        $logo.css('display', 'flex');
        $nav.css('overflow', 'hidden');
        $nav.css('visibility', 'hidden');
        hidden = true;
    }
})