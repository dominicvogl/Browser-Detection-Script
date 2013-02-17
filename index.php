<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 no-js" lang="de"> <![endif]-->
<!--[if IE 7]><html class="ie7 no-js" lang="de"> <![endif]-->
<!--[if IE 8]><html class="ie8 no-js" lang="de"> <![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="de"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="de"> <!--<![endif]-->
	<head>
	
		<meta charset="utf-8">	
		
		<title>Detecting your Browser Client</title>
		
		<!-- Insert Favicons -->
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="icon" type="image/png" href="images/favicon.png" />
		
		<!-- Insert CSS -->
		<link href="css/global.css" type="text/css" rel="stylesheet" media="all" />
	
	</head>
	
	<body>
	
		<?php
			require_once('functions/brDec_function.php');	
			
			/*echo '<div class="head">';
				echo $browser['browser'];
			echo '</div>';
			*/
			
			echo(brDec_Outp_Container());
		
			
			
			
		?>
	
	</body>
	
</html>