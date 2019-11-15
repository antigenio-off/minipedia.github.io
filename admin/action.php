<?php 
if (isset($_POST['submit']))
{
	$title = $_POST['title'];
	$desprication = $_POST['desprication'];
	$imageUrl = $_POST['imageUrl'];
	$content = $_POST['content'];

	echo $title;
	echo "<hr>";
	echo $desprication;
	echo "<hr>";
	echo $imageUrl;
	echo "<hr>";
	echo $content;
	echo "<hr>";
}
 ?>