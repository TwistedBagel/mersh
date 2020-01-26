var $burger = $('#menuToggle');
var $menu = $('.dropdown');
var $submenu = $('.submenu');

$burger.on('click', function() {
    $menu.toggleClass('menuClass');
})

// $submenu.each(function() {
//     $(this).on('hover', function() {
//         // $(this).children().toggleClass('subMenuClass');
//         console.log('toggled');
//     })
//     console.log('fuck');
// })

$('.toggle').click(function() {
    $(this).next('.submenu').toggle();
    console.log('clicked');
})