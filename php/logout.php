
<!--------------------------------------------->
<!-- 										 -->
<!--  Log out php							 -->
<!--  										 -->
<!--------------------------------------------->

<?php 
	session_start();  
	// Store data before log out
	// Update members.txt				
	$file = './members.txt';
	$members = unserialize(file_get_contents($file));
	$i = $_SESSION['key'];
	$members[$i]['addA'] += $_SESSION['aA'];
	$members[$i]['subA'] += $_SESSION['sA'];
	$members[$i]['subA'] += $_SESSION['sA'];
	$members[$i]['multA'] += $_SESSION['mA'];
	$members[$i]['mixA'] += $_SESSION['miA'];
	$members[$i]['totA'] += $_SESSION['tA'];
	$members[$i]['addS'] += $_SESSION['aS'];
	$members[$i]['subS'] += $_SESSION['sS'];
	$members[$i]['multS'] += $_SESSION['mS'];
	$members[$i]['mixS'] += $_SESSION['miS'];
	$members[$i]['totS'] += $_SESSION['tS'];
	file_put_contents($file, serialize($members));
						
	// Delete the variables
	session_unset();
	
	// End the session
	session_destroy();
	
	// Redirect to index.php 
	header('Location:http://users.encs.concordia.ca/~s_truo/A4/php/index.php');
	die();
?>
