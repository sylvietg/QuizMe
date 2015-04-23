
//------------------------------------------//
// 											//
// Quiz Me: Logic in JS						//
//											//
//------------------------------------------//


// Global Variables
var ans;
var r1;
var r2;
var numQuiz = 1;
var totScore = 0;
var addScore = 0;
var subScore = 0;
var multScore = 0;


// Functions
function disableMyStats() {								// Prevent the 'My Stats' textfield value to be modified.
	document.getElementById("chance").disabled=true;
	document.getElementById("quiz").disabled=true;
	document.getElementById("sco").disabled=true;
	document.getElementById("tsco").disabled=true;
}

function clearField() {									// Clear the answer box when the user clicks on it.
	document.getElementById("uAns").value="";
}

function genOneDigit() {
	ctr = 3;											// Reset the counter to 3 chances.
	document.getElementById("uAns").value="   ?";		// Reset the answer box text to '?'.
	document.getElementById("uAns").disabled=false;		
	document.getElementById("op1").disabled=true;		// Protect the operands text field.
	document.getElementById("op2").disabled=true;
	r2 = Math.floor(Math.random()*9);					// Generate two random numbers.
	do {
		r1 = Math.floor(Math.random()*9);
	} while (r1<r2);									// Condition: r1 must be greater than r2 to avoid negative results during subtraction operation.
	document.getElementById("op1").value=r1;			// Output the random numbers in the text fields.
	document.getElementById("op2").value=r2;
	document.getElementById("chance").value=ctr;		
}

function genTwoDigits() {								// Similar to genOneDigit().
	ctr=3;
	document.getElementById("uAns").value="   ?";
	document.getElementById("uAns").disabled=false;
	document.getElementById("op1").disabled=true;
	document.getElementById("op2").disabled=true;
	r2 = Math.floor(Math.random()*99);
	do {
		r1 = Math.floor(Math.random()*99);
	} while (r1<r2);									
	document.getElementById("op1").value=r1;
	document.getElementById("op2").value=r2;
	
	document.getElementById("chance").value=ctr;	
}

function genThreeDigits() {								// Similar to genOneDigit().
	ctr=3;
	
	document.getElementById("uAns").value="   ?";
	document.getElementById("uAns").disabled=false;
	document.getElementById("op1").disabled=true;
	document.getElementById("op2").disabled=true;
	r2 = Math.floor(Math.random()*999);
	do {
		r1 = Math.floor(Math.random()*999);
	} while(r1<r2);										
	document.getElementById("op1").value=r1;
	document.getElementById("op2").value=r2;
	document.getElementById("op1").disabled=true;
	document.getElementById("op2").disabled=true;
	document.getElementById("chance").value=ctr;
}

function checkAdd() {												
	ans = r1 + r2;
	if (ctr > 0) {																		// Limit the number of submission to three.
		u = parseInt(document.getElementById("uAns").value);
		if (u == ans) {
			alert("Fantastic! :) +" + ctr);
			addScore += ctr;
			totScore += ctr;
			document.getElementById("sco").value=addScore;								// Store the score for this type of operation. 
			document.getElementById("tsco").value=totScore;								// Store the total score.
			document.getElementById("quiz").value=quizNum++;							// Increment the number of completed quiz.
			alert("Choose a number of digits or a type of operation to continue.");		
		}
		else {
			if (ctr == 3) {
				alert("Almost! chance again you still have 2 chances!");
				ctr--;
				document.getElementById("chance").value=ctr;							// Decrement the number of remaining chances to 2.
			}
			else if (ctr == 2) { 
				alert("Don't give up! You still have one chance left!");
				ctr--;
				document.getElementById("chance").value=ctr;							// Decrement the number of remaining chances to 1.
			}
			else {
				alert("You will do better for next the equation! :)");
				ctr--;
				document.getElementById("chance").value=ctr;
				document.getElementById("uAns").disabled=true;							// Prevent the user from submitting a new answer since the limit has been reached.
				document.getElementById("quiz").value=quizNum++;						// Increment the number of completed quiz.
				alert("Choose a number of digits or a type of operation to continue.");
			}
		}
	}
}

function checkSub() {																	//Similar to checkAdd().
	ans = r1 - r2;
	if (ctr > 0) {
		u = parseInt(document.getElementById("uAns").value);
		if (u == ans) {
			alert("Wonderful! :) +" + ctr);
			subScore += ctr;
			totScore += ctr;
			document.getElementById("sco").value=subScore;
			document.getElementById("tsco").value=totScore;
			document.getElementById("quiz").value=quizNum++;
			alert("Choose a number of digits or a type of operation to continue.");
		}
		else {
			if (ctr == 3) {
				alert("Almost! chance again you still have 2 chances!");
				ctr--;
				document.getElementById("chance").value=ctr;
			}
			else if (ctr == 2) { 
				alert("Don't give up! You still have one chance left!");
				ctr--;
				document.getElementById("chance").value=ctr;
			}
			else {
				alert("You will do better for next the equation! :)");
				ctr--;
				document.getElementById("chance").value=ctr;
				document.getElementById("uAns").disabled=true;
				document.getElementById("quiz").value=quizNum++;
				alert("Choose a number of digits or a type of operation to continue.");
			}
		}
	}
}

function checkMulti() {																	//Similar to checkAdd().
	ans = r1 * r2;
	if (ctr > 0) {
		u = parseInt(document.getElementById("uAns").value);
		if (u == ans) {
			alert("Incredible! :) +" + ctr);
			multScore += ctr;
			totScore += ctr;
			document.getElementById("sco").value=multScore;
			document.getElementById("tsco").value=totScore;
			document.getElementById("quiz").value=quizNum++;
			alert("Choose a number of digits or a type of operation to continue.");
		}
		else {
			if (ctr == 3) {
				alert("Almost! chance again you still have 2 chances!");
				ctr--;
				document.getElementById("chance").value=ctr;
			}
			else if (ctr == 2) { 
				alert("Don't give up! You still have one chance left!");
				ctr--;
				document.getElementById("chance").value=ctr;
			}
			else {
				alert("You will do better for next the equation! :)");
				ctr--;
				document.getElementById("chance").value=ctr;
				document.getElementById("uAns").disabled=true;
				document.getElementById("quiz").value=quizNum++;
				alert("Choose a number of digits or a type of operation to continue.");
			}
		}
	}
}

function displayOperator() {
	o = Math.floor(Math.random()*3);						
	switch (o) {
		case 0:
			document.getElementById("symb").value="+";
			document.getElementById("symb").text="+";
			break;
		case 1:
			document.getElementById("symb").value="-";
			document.getElementById("symb").text="-";
			break;
		case 2:
			document.getElementById("symb").value="*";	
			document.getElementById("symb").text="*";	
			break;
	}
}
		
function checkMix() {
	if (o == 0)				// The answer is determined with the type of operator: it depends on the value of 'o' from displayOperator(). 
		ans = r1 + r2;
	else if (o == 1)
		ans = r1 - r2;
	else
		ans = r1 * r2;
		
	if (ctr > 0) {
		u = parseInt(document.getElementById("uAns").value);			// Similar to checkAdd().
		if (u == ans) {
			alert("Amazing! :) +" + ctr);
			addScore += ctr;
			totScore += ctr;
			document.getElementById("sco").value=addScore;
			document.getElementById("tsco").value=totScore;
			document.getElementById("quiz").value=quizNum++;
			alert("Choose a number of digits or a type of operation to continue.");
			document.getElementById("symb").value="?";
			document.getElementById("symb").text="?";
		}
		else {
			if (ctr == 3) {
				alert("Almost! chance again you still have 2 chances!");
				ctr--;
				document.getElementById("chance").value=ctr;
			}
			else if (ctr == 2) { 
				alert("Don't give up! You still have one chance left!");
				ctr--;
				document.getElementById("chance").value=ctr;
			}
			else {
				alert("You will do better for next the equation! :)");
				ctr--;
				document.getElementById("chance").value=ctr;
				document.getElementById("uAns").disabled=true;
				document.getElementById("quiz").value=quizNum++;
				alert("Choose a number of digits or a type of operation to continue.");
				document.getElementById("symb").value="?";
				document.getElementById("symb").text="?";
			}
		}
	}
}