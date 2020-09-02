function checkForm() {

var name = document.getElementById("username").value;
var password = document.getElementById("password").value;
var email = document.getElementById("email").value;
var id = document.getElementById("id").value;
var usertype = document.getElementById("usertype").value;
//Check input Fields Should not be blanks.
if (name == '' || password == '' || email == '' || id == ''|| usertype == '') {
alert("Fill All Fields");
} else {
//Notifying error fields
var name1 = document.getElementById("username");
var password1 = document.getElementById("password");
var email1 = document.getElementById("email");
var id1 = document.getElementById("id");
var usertype1 = document.getElementById("usertype");
//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
if (username1.innerHTML == 'Must be 3+ letters' || password1.innerHTML == 'Password too short' || email1.innerHTML == 'Invalid email' || id1.innerHTML == 'Invalid id') {
alert("Fill Valid Information");
} else {
//Submit Form When All values are valid.
document.getElementById("myForm").submit();
}
}
}
// AJAX code to check input field values when onblur event triggerd.
function validate() {


		var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
		document.getElementById(field).innerHTML = "Validating..";
		} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		document.getElementById(field).innerHTML = xmlhttp.responseText;
		} else {
		document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
		}
		}
		xmlhttp.open("GET", "", false);
		xmlhttp.send();
}