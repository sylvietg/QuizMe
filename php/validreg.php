
<!--------------------------------------------->
<!--  										 -->
<!--  Quiz Me: validation php				 -->
<!--  										 -->
<!--------------------------------------------->


<?php
  // Attributes
  $fname = $lname = $pnum = $email = $login = $pw1 = $pw2 = $msg = "";
 // $fn = $ln = $pn = $em = $lg = $p1 = $p2;
 
  // Methods
	// Submit button is clicked
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Check if empty
    $fn = empty($_POST["fname"]);
	$ln = empty($_POST["lname"]);
    $pn = empty($_POST["pnum"]);
    $em = empty($_POST["email"]);
    $lg = empty($_POST["login"]);
    $p1;
    if(empty($_POST["pw1"]) || strlen($_POST["pw1"]) < 8) // 1) Check if a pw has been entered 2) Check if it has a valid length
   	  $p1 = true;
    else
	  $p1 = false;
	$p2;
    if(empty($_POST["pw2"]) || $_POST["pw1"] !== $_POST["pw2"]) // 1) Check if a pw has been entered 2) Check if it's equal to pw1 
      $p2 = true;
    else
      $p2 = false;
  
	// Display message
    if ($fn || $ln || $pn || $em || $lg || $p1 || $p2) { // Check that every field has an input
	  echo ("<h1>Registration error.</h1><br />");  
	  if($fn)
	    echo ("Please enter your first name.<br />"); 	// Corresponding warning message
	  if($ln)
		echo ("Please enter your last name.<br />");
	  if($pn)
		echo ("Please enter your phone number.<br />");
	  if($em)
		echo ("Please enter your email address.<br />");
      if($lg)
		echo("Please enter a login id.<br />");
	  if($p1)
		echo("Please enter a password with at least 8 characters.<br />");
	  if($p2)
		echo ("Please re-enter your password.<br />");
	  }
	else {
		// Save data
		if ($_SERVER["REQUEST_METHOD"] == "POST") {	 // Check if the submit is submitted (with post method)	
			$file = './members.txt'; 
			$member = array('fname' => $_POST["fname"], 'lname' => $_POST["fname"], 'pnum' => $_POST["pnum"],   // Personal info
				  'email' => $_POST["email"], 'login' => $_POST["login"], 'pw' => $_POST["pw1"], 
				  'addA' => 0, 'subA' => 0, 'multA' => 0, 'mixA' => 0, 'totA' => 0,								// Number of attempts for each operation
				  'addS' => 0, 'subS' => 0, 'multS' => 0, 'mixS' => 0, 'totS' => 0); 							// Scores
			if (file_get_contents($file) == "") {	// Create a new file and a member array
				//echo "not set";
				$members[0] = $member;
			}
			else {	
				//echo "set";
				$members = unserialize(file_get_contents($file)); // Retrieve the file and convert into a string
				$key = count($members);
			//	echo "key $key";
				$members[$key] = $member; // add new member to the end of the list
		    }
			file_put_contents($file, serialize($members)); // save the list 
			
			echo ("<h1>Registration successful!</h1>");
		}
		// For test
		$file = './members.txt';												// Print the array!
		$members = unserialize(file_get_contents($file));
		print_r($members);
	  }
	}
	  
  
  
?>