
<!--------------------------------------------->
<!--  										 -->
<!--  Header php							 -->
<!--  										 -->
<!--------------------------------------------->


		<!-- javaScript -->
	</head>
    <body>
        <header>
			<?php
				// Display log in/log out
				if (!empty($_SESSION['member'])) {
					// Change the link
					echo '<a id="log" href ="logout.php">Log out</a>';			
				}
				
				else {
					echo '<a id="log" href="http://users.encs.concordia.ca/~s_truo/A4/php/login.php">Log in</a>';
				}
			?>
        </header>
		
	
	
