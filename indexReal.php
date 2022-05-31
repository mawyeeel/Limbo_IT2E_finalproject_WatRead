
<!DOCTYPE html>
<html  lang="en">
<head>
	<meta charset="utf=8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title> WatRead</title>
</head>
<body>
		<header>

			<div id="main">
				<div class="logo"> </div>
				<nav> 
					<ul>
						<li><a href="index.php"class="active">Home</a></li>
						<li><a href="about/about.php">About</a></li>
						<li><a href="discoveries/discoveries.php">Discover</a></li>
						<li><a href="faqs/faqs.php">Faqs</a></li>
					</ul>
				</nav>
			</div>

			
			<div class="text">
				<p><?php echo "Hi Folks, Welcome to:" ?> </p>
				<h1> WATREAD </h1>
				<span></span>
				<p>We offer you BOOKS that</p>
				<p> you'll desire! </p>
				<br>
				<form action="discoveries/discoveries.php" method="POST">
					<input type="submit" class="btn" value="READ NOW" />
				</form>
				</div> 


	   </header>

</body>
</html>