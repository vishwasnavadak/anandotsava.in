var d = new Date("February 25, 2016 00:00:00:000");
var mill = d.getTime();
var now = $.now();
var diff = mill - now;
var totSec = diff / 1000;
var totMin = totSec / 60;
var totHr = totMin / 60;
var time = {
  "days" : parseInt(totHr / 24),
  "hours" : parseInt(totHr % 24),
  "minutes" : parseInt(totMin % 60),
  "seconds" : parseInt(totSec % 60)
}
$("#time #dDays").text(pad(time.days));
$("#time #dHours").text(pad(time.hours));
$("#time #dMins").text(pad(time.minutes));
$("#time #dSecs").text(pad(time.seconds));
setInterval(function() {
  time.seconds--;
  if(time.seconds < 0) {
    time.minutes--;
    $("#time #dMins").text(pad(time.minutes));
    time.seconds = 59;
  }
  if(time.minutes < 0) {
    time.hours--;
    time.minutes = 59;
    $("#time #dHours").text(pad(time.hours));
    $("#time #dMins").text(pad(time.minutes));
  }
  if(time.hours < 0) {
    time.days--;
    time.hours = 23;
    $("#time #dDays").text(pad(time.days));
    $("#time #dHours").text(pad(time.hours));
  }
  $("#time #dSecs").text(pad(time.seconds));
}, 1000);
function pad(item) {
  if(item > 9)
    return item;
  else
    return '0' + item;
}
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({placement: "bottom", animation: true});
});
var isSideOpen = true;
$('#toggleSidebar').bind('click', function() {
  if(isSideOpen) {
    //$('#sidebar').addClass('hidden');
    $("#sidebar").animate({opacity: "hide", left: -250}, "slow")
    $('#toggleSidebar').removeClass('fa-arrow-left');
    $('#toggleSidebar').addClass('fa-bars');

    isSideOpen = false;
  } else {
    //$('#sidebar').removeClass('hidden');
    $("#sidebar").animate({opacity: "show", left: 0}, "slow")
    $('#toggleSidebar').removeClass('fa-bars');
    $('#toggleSidebar').addClass('fa-arrow-left')
    isSideOpen = true;
  }
});
