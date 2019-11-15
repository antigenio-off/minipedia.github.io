<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
		<link rel="icon"  href="img/rel.png">
		<title>Mini - - Pedia Admin</title>
		<link rel="stylesheet" type="text/css" href="style-admin.css">
		<style type="text/css">
			body
			{
				font-family: 'Righteous', cursive;
			}
		</style>
	</head>
	<body>
		<div class="div">
			<header>
			<nav class="nav">
				<div class="contain" id="nav">
					<dl class="nav" style="display: flex; background-color: #5599bb; color:">
						<li><a href="home.php">&#160&#160Home page</a></li>&#160&#160&#160
						<li><a href="html.php">HTML</a></li>&#160&#160&#160
						<li><a href="css.php">CSS</a></li>&#160&#160&#160
						<li><a href="about.php">About</a></li>&#160&#160&#160
						<li><a href="contact.php">Contact</a></li>&#160&#160&#160
						<li><a href="news.php">News</a></li>&#160&#160&#160
					</dl>
				</div>
			</nav>
		</header>
			<div class="contain">
				<h1 style="margin-left: 10px;">Administration</h1>
				<form action="action.php" method="POST" style="margin-left: 10px;">
					<input type="text" name="title" placeholder="title"><br>
					<input type="text" name="desprication" placeholder="desprication"><br>
					<input type="text" name="imageUrl" placeholder="imageUrl"><br>
					<input type="text" name="content" placeholder="content"><br>
					<input type="submit" name="submit" value="submit"><br>
				</form>
            </div>
			<hr class="hr">
			<div class="contain">
				<footer class="footer"><p>&#160&copyԱշոտ նահապետյան 2019թ</p></footer>
			</div>
		</div>
	</body>
</html>