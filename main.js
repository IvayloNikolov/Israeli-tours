var bg_url = $('#header').css('background-image');
bg_url= /url\(http:\/\/localhost:63342\/Israeli-tours\/images([0-9]+).jpg\)/g.exec(bg_url);
bg_url = bg_url[1];

$('#slider li').click(function()
{
    $('#header').backstretch("images"+$(this).attr("id")+".jpg");
    alert($(this).attr("id"));
    var imageNumber = $(this).attr("id");
    if(imageNumber==1)
    {
        $("#header #headings h2").html('Feel sacred now');
    }
    else
    {
        $("#header #headings h2").html('BOOK A TOUR NOW');
    }
    if(imageNumber==5)
    {
        $("#header #headings h1").html('Enjoy Bethlehem today');
    }
    else
    {
        $("#header #headings h1").html('ENJOY JERUSALEM TODAY');
    }
    if(imageNumber==2 || imageNumber==3 || imageNumber==5)
    {
        $('#headings').animate({paddingTop:'60px'}, 1000);
    }
    else
    {
        $('#headings').animate({paddingTop:'160px'}, 1000);
    }
});

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

