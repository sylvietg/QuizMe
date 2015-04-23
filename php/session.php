
<!--------------------------------------------->
<!-- 										 -->
<!--  Session php						 	 -->
<!--  										 -->
<!--------------------------------------------->


<?php
	$msg='';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {	
		$_SESSION['member'] = '';
		$file = './members.txt';
		$members = unserialize(file_get_contents($file));
		$b = false;
		for ($i = 0; $i < count($members); $i++) {		// 2) search id % return key of 1st array
			if ($members[$i]['login'] === $_POST['id']) {
				$msg = "member exists";
				$b = true;
				if($members[$i]['pw'] === $_POST['p']) {
					$msg = "start session";
					$_SESSION['member'] = $_POST['id'];
					$_SESSION['aA'] = 0;
					$_SESSION['sA'] = 0;
					$_SESSION['mA'] = 0;
					$_SESSION['miA'] = 0;
					$_SESSION['tA'] = 0;
					$_SESSION['aS'] = 0;
					$_SESSION['sS'] = 0;
					$_SESSION['mS'] = 0;
					$_SESSION['miS'] = 0;
					$_SESSION['tS'] = 0;
					$_SESSION['key'] = $i;
					// print_r($_SESSION);
					// Redirect
					header('location: http://users.encs.concordia.ca/~s_truo/A4/php/mystats.php');
				}
				else
					$msg = "Invalid password";	
			}
				
		}
		if ($b == false)
			$msg = "Invalid login id";
		echo $msg;
	}
		
?>