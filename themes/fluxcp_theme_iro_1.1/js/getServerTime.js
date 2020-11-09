$(function () {
        $.getJSON("http://www.warpportal.com/brandingbar_new/json_servertime.aspx?callback=?", function (data) { })
})

function jpCallback_servertime(data) {
	currenttime = data.servertime;
	serverdate = new Date(currenttime)
	startServerTime();
}

var currenttime;
var montharray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")
var serverdate;
function padlength(what) {
    var output = (what.toString().length == 1) ? "0" + what : what
    return output
}
function displaytime() {
    serverdate.setSeconds(serverdate.getSeconds() + 1)
    var datestring = montharray[serverdate.getMonth()] + " " + padlength(serverdate.getDate()) + ", " + serverdate.getFullYear()

    var daynight = (serverdate.getHours() > 11) ? "PM" : "AM";
    var newHr = (serverdate.getHours() > 12) ? (serverdate.getHours() - 12) : serverdate.getHours();
    if (newHr == 0) { newHr = 12 };
    var timestring = padlength(newHr) + ":" + padlength(serverdate.getMinutes()) + ":" + padlength(serverdate.getSeconds()) + " " + daynight;
    document.getElementById("serverclock").innerHTML = "PDT " + timestring /*noUse: datestring*/
}
function startServerTime() {
    setInterval("displaytime()", 1000)
}