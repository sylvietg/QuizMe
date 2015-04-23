
//------------------------------------------//
// 											//
// Quiz Me: Registration JS					//
//											//
//------------------------------------------//

function checkFname() {
	var f = document.getElementById("fname").value;
	if (f.search(/-/) == 0 || f == "") {						// Alert: if the string is empty or starts with a hyphen.
		alert ("Please enter your first name.");
		return false;
	}
	else {														// A value has been entered.
		if (f.search(/[^A-Za-z-]+/) >= 0) {						// Alert: if the string contains char that are not letters, digits or a hyphen.
			alert("Letters and hyphen only.");
			return false;
		}
		if (f.search(/^[A-Za-z-]+-$/) == 0) {					// Alert: if the string ends with a hyphen.
			alert ("Please remove the extra hyphen.");
			return false;
		}
		else {
			//alert("Thank you!");
			return true;
		}
	}
}

function checkLname() {
	var ln = document.getElementById("lname").value;			// Alert: if the string is empty or starts with a hyphen.
	if (ln.search(/-/) == 0 || ln == "") {
		alert ("Please enter your last name.");
		return false;
	}
	else {														// A value has been entered.
		if (ln.search(/[^A-Za-z-]+/) >= 0) {					// Alert: if the string contains char that are not letters, digits or a hyphen.
			alert("Letters and hyphen only.");
			return false;
		}
		if (ln.search(/^[A-Za-z-]+-$/) == 0) {					// Alert: if the string ends with a hyphen.
			alert ("Please remove the extra hyphen.");
			return false;
		}
		else {
			//alert("Thank you!");
			return true;
		}
	}
}

function checkPnum() {
	var p = document.getElementById("pnum").value;
	if (p == "") {													// Alert: if the string is empty.
		alert("Please enter your phone number.");
		return false;
	}
	else {															// A value has been entered.
		if (p.search(/^\(\d{3}\)\d{3}-\d{4}$/) != 0) {				// Alert: if the string doesn't follow the format (123)123-1234.
			alert("Please use the format: (123)123-1234");
			return false;
		}
		else {
			//alert ("Ok, thank you!");
			return true;
		}
	}
}

function checkEmail() {
	var e = document.getElementById("email").value;													// Alert: if the string is empty.
	if (e == "") {
		alert("Please enter your email address.");
		return false;
	}
	else {																							// A value has been entered.			
		if (e.search(/^([A-Za-z0-9]+[_.]?[A-Za-z0-9]+)+@[A-Za-z]+\.[A-Za-z]{2,}$/) != 0) {			// Alert: if the string doesn't follow the format.
			alert("Letters, digits, '_' or '.' only.");
			return false;
		}
		else {												
			//alert ("Ok, thank you!");
			return true;
		}
	}
} 

function checkLogin() {
	var l = document.getElementById("login").value;
	if (l == "") {											// Alert: if the string is empty.
		alert("Please enter a login name.");
		return false;
	}
	else {													// A value has been entered.
		if (l.search(/[^A-Za-z0-9]+/) >= 0) {				// Alert: if the string contains char that are not letters or digits.
			alert("Letters and digits only.");
			return false;
		}
		if (l.search(/^[A-Za-z0-9]{6,}$/) != 0) {			// Alert: if there is only 0 to 5 characters.
			alert("Choose at least 6 characters.");
			return false;
		}
		else {
			//alert ("Ok, thank you!");
			return true;
		}
	}
}

function checkPw1() {
	p1 = document.getElementById("pw1").value;
	if (p1 == "") {											// Alert: if the string is empty.
		alert("Please choose a password.");
		return false;
	}
	else {
		if (p1.search(/[A-Za-z]/) < 0) {					// Alert: if there's not at least one letter.
			alert("Add at least one letter.");
			return false;
		}
		if (p1.search(/\d/) < 0) {							// Alert: if there's not at least one digit.
			alert("Add at least one digit.");
			return false;
		}
		if (p1.search(/[A-Za-z0-9]{8,}/) != 0) {			// Alert: if there is only 0 to 5 characters.
			alert("Choose at least 6 characters.");
			return false;
		}
		else {
			//alert ("Ok, thank you!");
			return true;
		}
	}
}
		
function checkPw2() {
	p1 = document.getElementById("pw1").value;
	p2 = document.getElementById("pw2").value;
			
	if (p1 == "") {															// Alert: if a password has not been created.
		alert("Please choose a password first.");
		return false;
	}
	else {
		if (p2 == "") {														// Alert: a password has been created, but the user hasn't re-enter it.
			alert("Please re-enter your password.");
			return false;
		}
		else {
			if (p1 != p2) {													// Alert: the password doesn't match.
				alert("Sorry, it doesn't match.\nPlease re-enter.");
				return false;
			}
			else {
				//alert ("Ok, thank you!");
				return true;
			}
		}
	}
}
