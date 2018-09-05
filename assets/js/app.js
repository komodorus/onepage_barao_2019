var offset = 0;

$(document).ready(function() {
    offset = $('nav').outerHeight();
    containerFluid(767);

    var navMain = $(".navbar-collapse"); // avoid dependency on #id
    // "a:not([data-toggle])" - to avoid issues caused
    // when you have dropdown inside navbar
    
    navMain.on("click", "a:not([data-toggle])", null, function () {
    	navMain.collapse('hide');
    });

});

function changeText(el, text){
    return $(el).html(text);
}

function href(el, href){
    return $(el).attr('href', href);
}

$('#ver-e-mail').on('click', function(){
    changeText(this, 'vestibular@baraodemaua.br');
    href(this, 'mailto:vestibular@baraodemaua.br&subject=Vestibular%202019');
}); 

$('#ver-telefone').on('click', function(){
    changeText(this, '0800 18 35 66');
    href(this, 'tel:+55160800183566');
}); 

function containerFluid(width){
    if($(window).width() <= width){
        $('#nav-fluid').removeClass('container').addClass('container-fluid');
    }else{
        if ($('#nav-fluid').hasClass('container-fluid')){
            $('#nav-fluid').removeClass('container-fluid').addClass('container');
        }
    }
}

$(window).resize(function(){
    offset = $('nav').outerHeight();
    containerFluid(767);
}); 


// handle links with @href started with '#' only
$(document).on('click', 'a[href^="#"]', function (e) {
    // target element id
    var id = $(this).attr('href');

    //make it so carousel next/prev doesnt animate up
    if (id == '#carouselExampleIndicators')
        return;

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $id.offset().top;

    // animated top scrolling
    $('body, html').stop().animate({
        scrollTop: pos - offset
    }, 600);
});

$('#select_cursos').on('change', function(){
    window.location.href = base_url + 'curso/' + $(this).val();
});