
<!--------------------------------------------->
<!-- 										 -->
<!--  Mix php								 -->
<!--  										 -->
<!--------------------------------------------->


<?php 
	session_start(); 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION['miA'] = $_POST['quiz'];
		$_SESSION['miS'] = $_POST['sco'];
		$_SESSION['totS'] = $_POST['tsco'];
		$_SESSION['totA'] += $_POST['quiz'];
	}
?>

<?php
$page_title="Quiz me: Mix";
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

<section>
	<h1>Quiz Me: Mix</h1>
	<br />
	<form>
		<p>
			<h3>Choose a number of digits</h3>
			<label><input type="radio" name="digit" id="d1" value="one" />&nbsp;One digit</label><br /><br />
			<label><input type="radio" name="digit" id="d2" value="two" />&nbsp;Two digits</label><br /><br />
			<label><input type="radio" name="digit" id="d3" value="three" />&nbsp;Three digits</label>
		</p>
		<br />
		<p>
			<h3>Find the answer</h3>
			<input type="text" name="op1" id="op1" size="1" />&nbsp;
			<input type="button" name="symb" id="symb" value="?" size="1" />&nbsp;
			<input type="text" name="op2" id="op2" size="1" />&nbsp; = &nbsp; 
			<input type="text" name="uAns" id="uAns" value="   ?"size="1" />
		</p>
		<p>
			<input type = "button" value="Check" onclick = "checkMix()"/>
		</p>
		<br />
		<p>
			<h3>My stats</h3>
			<label>Chance #&nbsp;<input type="text" name="chance" id="chance" value="3" size="1" /></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label>Quiz #&nbsp;<input type="text" name="quiz" id="quiz" value="1" size="1" /></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label>Score&nbsp;<input type="text" name="sco" id="sco" value="0" size="1" /></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label>Total Score&nbsp;<input type="text" name="tsco" value="0" id="tsco" size="1" /></label>
		</p>
		<script type="text/javaScript" src="http://users.encs.concordia.ca/~s_truo/A4/JSR/mixr.js"></script>
	</form>
</section>

<?php
// footer
include("footer.php");
?>