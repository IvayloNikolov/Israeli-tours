var bg_url = $('#header').css('background-image');
bg_url= /url\(http:\/\/ivaylonikolov.net\/safaatours.global\/images([0-9]+).jpg\)/g.exec(bg_url);
bg_url = bg_url[1];
var counter = 0;
$('#header').backstretch("images1.jpg");

$(document).scroll(function(){
    counter++
    if(counter==2)
    {
        counter=0;
        $('#menu').slideDown();
    }
});

$('#slider li').click(function()
{
    $('#header').backstretch("images"+$(this).attr("id")+".jpg");
    var imageNumber = $(this).attr("id");
    if(imageNumber==1)
    {
        $("#header #headings h2").html('Feel sacred now');
    }
    else
    {
        $("#header #headings h2").html('BOOK A TOUR NOW');
    }
    if(imageNumber==1)
    {
        $("#header #headings h1").html('Enjoy Israel today')
    }
    if(imageNumber==2)
    {
        $("#header #headings h1").html("Enjoy JERUSALEM today");
    }
    if(imageNumber==3)
    {
        $("#header #headings h1").html('Enjoy Caesarea today')
    }
    if(imageNumber==4)
    {
        $("#header #headings h1").html('Enjoy Dead Sea today')
    }
    if(imageNumber==5)
    {
        $("#header #headings h1").html('Enjoy Haifa today');
    }
    if(imageNumber==2 || imageNumber==3 || imageNumber==5)
    {
        $('#headings').animate({paddingTop:'100px'}, 1000);
    }
    else
    {
        $('#headings').animate({paddingTop:'180px'}, 1000);
    }
});
function hide()
{
    $('#menu').slideUp();
}

$(window).on("backstretch.after", function (e, instance, index) {
    bg_url = $('#header').css('background-image');
    console.log(bg_url);
});

$('#header').on('mouseenter', function()
{
    $('#slider').animate({marginTop:'15px'}, 1000);
});
$('#header').on('mouseleave', function()
{
    $('#slider').animate({marginTop:'340px'}, 1000);
});
