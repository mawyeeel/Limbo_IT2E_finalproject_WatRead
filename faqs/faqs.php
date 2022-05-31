
<!DOCTYPE html>
<html  lang="en">
<head>
	<meta charset="utf=8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title> Header </title>
</head>
<body>
		<header>
			<div id="main">
				<div class="logo"> </div>
				<nav> 
					<ul>
						<li><a href="faqs.php"class="active">Faqs</a></li>
						<li><a href="premium.php">Premium</a></li>
					</ul>
				</nav>
			</div>

			
			<div class="text">
				<p><?php echo "Hi Folks, Welcome to:" ?> </p>
				<h1> WATREAD </h1>
				<span></span>
				</br>
				<p> FREQUENTLY ASKED QUESTION</p>
				<br>
				<form action="ReachOut.php" method="POST">
					<input type="submit" class="btn" value="REACH OUT" />
				</form>
				</div> 


	   </header>

</body>
</html>