$('li').click( function()
{
    $('#header').backstretch("images"+$(this).attr("id")+".jpg");
});
$('#header').on('mouseenter', function()
{
    $('#slider').animate({marginTop:'15px'}, 1000);
});
$('#header').on('mouseleave', function()
{
    $('#slider').animate({marginTop:'340px'}, 1000);
});