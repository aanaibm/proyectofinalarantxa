$(document).ready(function(){

    var THEMEPATH = 'http://localhost:8888/proyectofinalarantxa/wp-content/themes/proyecto/Imagenes';

	$('.book')
	.mouseenter(function(){$('.book').attr('src', THEMEPATH + '/book2.png');})
	.mouseleave(function(){$('.book').attr('src', THEMEPATH + '/book.png');})

	$('.tumblr')
	.mouseenter(function(){$('.tumblr').attr('src', THEMEPATH + '/tumblrlogo2.png');})
	.mouseleave(function(){$('.tumblr').attr('src', THEMEPATH + '/tumblrlogo.png');})

	$('.deviantart')
	.mouseenter(function(){$('.deviantart').attr('src', THEMEPATH + '/deviantartlogo2.png');})
    .mouseleave(function(){$('.deviantart').attr('src', THEMEPATH + '/deviantartlogo.png');})

    $('.twitter')
	.mouseenter(function(){$('.twitter').attr('src', THEMEPATH + '/twitterlogo.png');})
    .mouseleave(function(){$('.twitter').attr('src', THEMEPATH + '/twitterlogo2.png');})

    $('#fondo')
    .mouseenter(function(){$('#fondo').attr('src', THEMEPATH + '/doctorcatcolor.png');})
    .mouseleave(function(){$('#fondo').attr('src', THEMEPATH + '/doctorcat.png');})

    $('#extrasicono')
    .mouseenter(function(){$('#extrasicono').attr('src', THEMEPATH + '/extrasiconocolor.png');})
    .mouseleave(function(){$('#extrasicono').attr('src', THEMEPATH + '/extrasicono.png');})

    $('#paintbrush')
    .mouseenter(function(){$('#paintbrush').attr('src', THEMEPATH + '/paintbrushcon.png');})
    .mouseleave(function(){$('#paintbrush').attr('src', THEMEPATH + '/paintbrush.png');})

    $('#hat')
    .mouseenter(function(){$('#hat').attr('src', THEMEPATH + '/designcolor.png');})
    .mouseleave(function(){$('#hat').attr('src', THEMEPATH + '/hat.png');})

    $('#writingcup')
    .mouseenter(function(){$('#writingcup').attr('src', THEMEPATH + '/writingcupcolor.png');})
    .mouseleave(function(){$('#writingcup').attr('src', THEMEPATH + '/writingcup.png');})

$(".linky a").click(function(){
    var link = $(this).attr('href');
    console.log(link);  
    event.preventDefault();

    $('#cajatexto').load( link + '#contenido_post');
    //$('#cajatexto').load('lorem.html #pitcher', function(){
        //alert('FUNCIONA')
   // });
});

});
