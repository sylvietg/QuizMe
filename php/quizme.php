<?php session_start(); ?>

<!--------------------------------------------->
<!--  										 -->
<!--  Template php							 -->
<!--  										 -->
<!--------------------------------------------->


<?php
$page_title="Quiz me";
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
	<h1></h1>
	<p>
		<br />
	    <h1>Quiz me: the game</h1>
		<ul>
		   <li>Earn <span id="orange">points</span></li><br />
		   <li>Gain <span id="pink">knowledge</span></li><br />
		   <li><span id="orange">Three</span> chances</li><br />
	       <li>Try the <span id="pink">Mix</span></li><br />
		 </ul>
	</p>
</section>
<?php
// footer
include("footer.php");
?>