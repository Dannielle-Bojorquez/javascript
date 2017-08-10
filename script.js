//this is code to chande the color of the circle
function changeColor() {
	document.getElementById("circle").style.backgroundColor="purple";
	document.getElementById("circle").style.color="pink";
}
function changeBack() {
	document.getElementById("circle").style.backgroundColor="chartreuse";
	document.getElementById("circle").style.color="black";
}
// change this text
function changeFont() {
	document.getElementById("change").style.fontFamily = "Impact,Charcoal,sans-serif";
}
//this is the code for button
function showMe() {
	document.getElementById("clicker").innerHTML = "OMG Why?!";

}

//adding ajax to the playing field
$(document).ready(function() {
	$("#crispyButton").click(function(){
		$.ajax({
			method: "GET" ,
			url: "https://baconipsum.com/api/?type=all-meat&paras=3&start-with-lorem=1&format=htm"}).done(function(reply) {
			$("#crispyOutput").html(reply);
			console.log("you have crispy bacon!");
		}
		)
	}
	)
});
