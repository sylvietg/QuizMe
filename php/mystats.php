<?php
	session_start();
	include 'statdata.php';
?>

<!--------------------------------------------->
<!--  										 -->
<!--  My Stats php							 -->
<!-- 										 -->
<!--------------------------------------------->


<?php
$page_title="My Stats";
// header
include("top.php");
?>

<!-- javaScript -->

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
	<h1>My Stats</h1>
	<table>
			<tr>
				<td><h3>Current Stats</h3></td>
			</tr>
			<tr>
				<td></td>
				<td>&nbsp;&nbsp;Attempts</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;Score</td>
			</tr>
			<tr>
				<td>Addition</td>
				<td>&nbsp;&nbsp;<?php echo $_SESSION['aA']; ?></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['aS']; ?></td>
			</tr>
			<tr>
				<td>Subtraction</td>
				<td>&nbsp;&nbsp;<?php echo $_SESSION['sA']; ?></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['sS']; ?></td>
			</tr>
			<tr>
				<td>Multiplication</td>
				<td>&nbsp;&nbsp;<?php echo $_SESSION['mA']; ?></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['mS']; ?></td>
			</tr>
			<tr>
				<td>Mix</td>
				<td>&nbsp;&nbsp;<?php echo $_SESSION['miA']; ?></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['miS']; ?></td>
			</tr>
			<tr>
				<td>Total</td>
				<td>&nbsp;&nbsp;<?php echo $_SESSION['tA']; ?></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['tS']; ?></td>
			</tr>
			
			<tr>
				<td><br /><h3>Cumulative Stats</h3></td>
			</tr>
			<tr>
				<td></td>
				<td>&nbsp;&nbsp;Attempts</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;Score</td>
			</tr>
			<tr>
				<td>Addition</td>
				<td>&nbsp;&nbsp;<?php echo $addA; ?></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $addS; ?></td>
			</tr>
			<tr>
				<td>Subtraction</td>
				<td>&nbsp;&nbsp;<?php echo $subA; ?></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $subS; ?></td>
			</tr>
			<tr>
				<td>Multiplication</td>
				<td>&nbsp;&nbsp;<?php echo $multA; ?></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $multS; ?></td>
			</tr>
			<tr>
				<td>Mix</td>
				<td>&nbsp;&nbsp;<?php echo $mixA; ?></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mixS; ?></td>
			</tr>
			<tr>
				<td>Total</td>
				<td>&nbsp;&nbsp;<?php echo $totA; ?></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $totS; ?></td>
			</tr>
	</table>
</section>

<?php
// footer
include("footer.php");
?>