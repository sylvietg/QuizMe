
<!--------------------------------------------->
<!-- 										 -->
<!--  Addition php							 -->
<!--  										 -->
<!--------------------------------------------->

<?php 
	session_start(); 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION['aA'] = $_POST['quiz'];
		$_SESSION['aS'] = $_POST['sco'];
		$_SESSION['totS'] = $_POST['tsco'];
		$_SESSION['totA'] += $_POST['quiz'];
	}
?>

<?php
$page_title="Quiz me: Addition";
// header
include("top.php");
?>

<script type="text/javaScript" src="http://users.encs.concordia.ca/~s_truo/A4/JS/quizme.js"></script>

<?php
//header
include("header.php");
?>

<?php
//nav
include("nav.php");
?>

<!-- section -->
<section>
	<h1>Quiz Me: Addition</h1>
	<br />
	<form method="post" action="">
		<p>
			<h3>Choose a number of digits</h3>
			<label><input type="radio" name="digit" id="d1" value="one" />&nbsp;One digit</label><br /><br />
			<label><input type="radio" name="digit" id="d2" value="two" />&nbsp;Two digits</label><br /><br />
			<label><input type="radio" name="digit" id="d3" value="three" />&nbsp;Three digits</label>
			
		</p>
		<br />
		<p>
			<h3>Find the answer</h3>
			<input type="text" name="op1" id="op1" value ="" size="1" /> 
			&nbsp; + &nbsp; 
			<input type="text" name="op2" id="op2" value ="" size="1" />
			&nbsp; = &nbsp; 
			<input type="text" name="uAns" id="uAns" value ="   ?" size="1" />
		</p>
		<p>
			<input type = "button" value="Check" onclick = "checkAdd()"/>
		</p>
		<br />
		<p>
			<h3>My stats</h3>
			<label>Chance #&nbsp;<input type="text" name="chance" id="chance" value="3" size="1" /></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label>Quiz #&nbsp;<input type="text" name="quiz" id="quiz" value="1" size="1" /></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label>Score&nbsp;<input type="text" name="sco" id="sco" value="0" size="1" /></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label>Total Score&nbsp;<input type="text" name="tsco" value="0" id="tsco" size="1" /></label>
		</p>
		<script type="text/javaScript" src="http://users.encs.concordia.ca/~s_truo/A4/JSR/additionr.js"></script>
	</form>
</section>

<?php
// footer
include("footer.php");
?>