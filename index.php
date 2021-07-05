<!DOCTYPE html>
<html>
<head>
    <title>IMAGE DUMPER</title>
<style>
body {
	background-color: #000000;
	color: #ffffff;
	font-size: 32px;
	line-height: 24px;
	margin: 32px;
}

.container {
	width: 856px;
	text-align: left;
}

a {
	color: #dddddd;
}

.imagebox {
	background-size: cover;
	position: relative;
	display: inline-block;
	border: 2px solid #111111;
	margin: 5px;
	box-shadow: 1px 1px 6px #000000;
	filter: grayscale(100%);
	width: 200px;
	height: 200px;
	overflow: hidden;
	z-index: 1;
	-webkit-transition: 0.25s;
	transition: 0.25s;
}

.imagebox:hover {
	transform: scale(1.2, 1.2);
	-webkit-transition: 0.1s;
	transition: 0.1s;
	border: 2px solid #dddddd;
	filter: grayscale(0%);
	z-index: 100;
}

</style>
</head>
<body>
    <center>
        <div class="container">
            <?php $files=glob("*.{jpg,png,gif}", GLOB_BRACE);
            for ($i=0;
            $i<count($files);
            $i++) {
              $num=$files[$i];
              echo '<a href="image.php?image='.rawurlencode($num).'"><div class="imagebox" style="background-image:url('.rawurlencode($num).'); background-position:top"></div></a>';
            }
?>
        </div><br><br>
    </center>
</body>
</html>