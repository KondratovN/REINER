$(document).ready(function(){
     $('.nav-link').click(function(event) {
        $('.burger, .menu, .support, .header-list').removeClass('active');
        $('body').removeClass('lock');
    });

    $('.burger').click(function(event) {
        $('.burger, .menu, .support, .header-list').toggleClass('active');
        $('body, .header_container').toggleClass('lock');
    });

    $('.slick-news').slick({
        autoplay: true,
        autoplaySpeed: 5000
    });

    $('.blog-item').mouseenter(function(event) {
        $(this).addClass('animate');
    });
    $('.blog-item').mouseleave(function(event) {
        $(this).removeClass('animate');
    });
})

const btn = document.querySelector('.allnews');
const itemlenght = document.querySelectorAll('.blog-item-news').length;

let items = 9;

btn.addEventListener('click', function(event) { 
items += 9;
const array = Array.from(document.querySelector('.blog-news').children);
const visItem = array.slice(0, items);

visItem.forEach(el => el.classList.add('is_visible'));

if (visItem.length === itemlenght) {
    btn.classList.add('none');
}

});