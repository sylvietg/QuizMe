
<!--------------------------------------------->
<!--  										 -->
<!--  Nav php								 -->
<!--  										 -->
<!--------------------------------------------->


         <nav>
	         <ul>
		     <br />
			     <li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/index.php">Home</a></li><br /><br />
				 <li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/registration.php">Register</a></li><br /><br />
				 <li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/quizme.php">Quiz Me</a>
		         <ul><br />
				 <?php
				     if (empty($_SESSION['member'])) {		// no user = not logged in
						loggedOut();						// display login link
					}
					 else {									// user is logged in
					    loggedIn();							// display logout lint
					}
				 ?>
		         <li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/contact.php">Contact Us</a></li><br /><br /><br /><br />
	         </ul> 
		 </nav>

		 
<?php
// Goes to operation pages
	function loggedIn() {
			echo 
			'	<li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/addition.php">Addition</a></li><br />
				<li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/subtraction.php">Subtraction</a></li><br />
				<li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/multiplication.php">Multiplication</a></li><br />
				<li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/mix.php">Mix</a></li>
			</ul>
			<br /><br />
			<li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/mystats.php">My Stats</a></li><br /><br />';
	}

// Redirect to login.php
	function loggedOut() {
			echo '
				<li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/login.php">Addition</a></li><br />
				<li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/login.php">Subtraction</a></li><br />
				<li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/login.php">Multiplication</a></li><br />
				<li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/login.php">Mix</a></li>
			</ul>
			<br /><br />
			<li><a href="http://users.encs.concordia.ca/~s_truo/A4/php/login.php">My Stats</a></li><br /><br />';
	}
?>