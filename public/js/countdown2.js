// let deadline=new Date("August 2, 2021 23:59").getTime();

// let timer=setInterval(tick,1000);
// function tick(){
//     let skrg=new Date().getTime();
//     let t=deadline-skrg;
//     if(t>0){
//         var days = Math.floor(t/(1000*60*60*24));
//         if(days<10){
//             days = "0" + days;
//         }
//         var hours = Math.floor((t%(1000*60*60*24))/(1000*60*60));
//         if(hours<10){
//             hours = "0" + hours;
//         }
//         var mins = Math.floor((t%(1000*60*60))/(1000*60));
//         if(mins<10){
//             mins = "0" + mins;
//         }
//         var secs = Math.floor((t%(1000*60))/1000);
//         if(secs<10){
//             secs = "0" + secs;
//         }
//         const timer = document.querySelector(".countdown");
//         timer.textContent = days+' : '+hours+' : '+mins+' : '+secs;
//     }
// }

timedown("August 2, 2021 23:59",'demoa');
timedown("September 12, 2021 23:59",'demob');
timedown("September 30, 2021 23:59",'democ');
timedown("October 10, 2021 23:59",'demod');
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