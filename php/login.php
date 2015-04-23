<?php 
session_start(); 
include('session.php');
?>
	
<!--------------------------------------------->
<!--										 -->
<!--  Log in php							 -->
<!--  										 -->
<!--------------------------------------------->


<?php
$page_title="Log in";
// header
include("top.php");
?>

<!-- javaScript -->

<?php
//header
include("header.php");
?>

<?php
// nav
include("nav.php");
?>

<!-- section -->
<section>
  <h1>Log in</h1>
  <br />
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
    <table>
	  <tr>
	    <td>ID&nbsp;&nbsp;<br /><br /></td>
		<td><input type="text" name="id" id="id" /><br /><br /></td>
	  </tr>
	  <tr>
	    <td>Password&nbsp;&nbsp;<br /><br /></td>
		<td><input type="password" name="p" id="id" /><br /><br /></td>
	  </tr>
	  <tr>
	    <td></td>
	    <td><input type="submit" value="Log in" />&nbsp;&nbsp;</td>
	  </tr>
	  <tr>
		<td><br /><br /><br /><br /></td>
		<td colspan="2"><a href="registration.php"><em>No account? Click here to register!</em></a></td>
	  </tr>
	</table>
  </form>
</section>

<?php
// footer
include("footer.php");
?>