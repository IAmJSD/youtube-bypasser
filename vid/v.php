<html>
<head>
<title>In Beta</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<?php 
exec('youtube-dl -f 22 --download-archive download.txt --output "/var/www/html/v/%(id)s.%(ext)s" https://youtube.com/watch?v=' . $_GET["id"] . '--max-filesize 600MB')
?>

<div class="center">
<video controls autoplay>
	<source src="/v/<?php echo $_GET["id"] ?>.mp4">
</video>
</div>
</body>
</html>
