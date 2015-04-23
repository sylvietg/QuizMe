
<!--------------------------------------------->
<!--  										 -->
<!--  Registration php						 -->
<!--  										 -->
<!--------------------------------------------->


<?php
  //session_start();
  $page_title="Registration";
  // header
  include("top.php");
  include("validreg.php");
?>

<!-- javaScript -->
  <script type="text/javaScript" src="http://users.encs.concordia.ca/~s_truo/A4/JS/registration.js"></script>
  
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
	   <h1>Registration</h1>
	   	 <br />
		 <!-- <form method="post" action="validreg.php; upload.php" enctype="multipart/form-data -->
		 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
			<table>
			  <tr>
			    <td><h3>Registration</h3></td>
			  </tr>
			  <tr>
			    <td>First Name</td>
				<td>
				  <input type="text" name="fname" id="fname" value="" required="required" />
				</td>
				<td id="td3">&nbsp;(Letters and hyphen only)</td>
			  </tr>
			  <tr>
			    <td>Last Name</td>
				<td>
				  <input type="text" name="lname" id="lname" value="" required="required" />
				</td>
				<td id="td3">&nbsp;(Letters and hyphen only)</td>
			  </tr>
			  <tr>
			    <td>Phone Number</td>
				<td>
				  <input type="text" name="pnum" id="pnum" value="" required="required" />
				</td>
				<td id="td3">&nbsp;(Format: (123)123-1234 )</td>
			  </tr>
			  <tr>
			    <td>Email</td>
				<td>
				  <input type="text" name="email" id="email" value="" required="required" />
				</td>
				<td id="td3">&nbsp;(Letters, digits or underscore only)</td>
			  </tr>
			  <tr><td><br /><h3>Login Information</h3></td></tr>
			  <tr>
			    <td>Login Name</td>
				<td>
				  <input type="text" name="login" id="login" value="" required="required" />
				</td>
				<td id="td3">&nbsp;(At least 6 characters: letters and digits only)</td>
			  </tr>
			  <tr>
			    <td>Password</td>
				<td>
				  <input type="password" name="pw1" id="pw1" value="" required="required" >
				</td>
				<td id="td3">&nbsp;(At least 8 characters: letters and digits only, at least of each)</td>
			  </tr>
			  <tr>
			    <td>Re-enter Password</td>
				<td>
				  <input type="password" name="pw2" id="pw2" value="" required="required" />
				</td>
			  </tr>
			  <tr>
			    <td colspan="2">
				  <br /><br /><br /><br />
				  <input type="reset" id="re" value="Reset Form" />&nbsp;<input type="submit" id="sub" value="Submit Form" />
				</td>
			</table>
			<script type="text/javaScript" src="http://users.encs.concordia.ca/~s_truo/A4/JSR/registrationr.js"></script>
		  </form>
		</section>
		
<?php 

// footer
include("footer.php");
?>