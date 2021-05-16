margin();

$(window).resize(function(){
    margin();
});

function margin()
{
    var right = $('#right-section'),
    left  = $('#left-section');

    if(right.height() > left.height() && right.width() > left.width()) {
        var resalt = ((right.height() - left.height()) / 2);
        left.css('margin-top', resalt);
    }
}
