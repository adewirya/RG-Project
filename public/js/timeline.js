


$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".countdown").not(targetBox).hide();
        $(targetBox).show();
    });
});

timedown("August 2, 2021 23:59",'demo');
timedown("September 12, 2021 23:59",'demo1');
timedown("September 30, 2021 23:59",'demo2');
timedown("October 10, 2021 23:59",'demo3');
function timedown(ti,id){
// Set the date we're counting down to
var countDownDate = new Date(ti).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById(id).innerHTML = (days!=0 ? days + "d " : '') + (hours!= 0 ? hours + "h " : '')
    + (minutes != 0 ? minutes + "m " : '') + seconds + "s ";
    
}, 1000);
}