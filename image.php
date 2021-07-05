<head>
<title>IMG_BROWSER</title>
<style>
body {
	background-color: #000000;
	color: #ffffff;
}

a {
	color: #dddddd;
}

img {
	border: 2px solid #dddddd;
	height: 90%;
}
</style>
</head>
<center>
<a href="index.php">GO BACK</a><br><br>

<?php
$image= $_GET['image'];
?>

<img src="<?php echo $image;?>">