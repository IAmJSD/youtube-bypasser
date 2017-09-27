<html>
<head>
<title>In Beta</title>
<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>

<?php 
exec('youtube-dl -k --download-archive download.txt -x --audio-format mp3 --output "/var/www/html/m/%(id)s.%(ext)s" https://youtube.com/watch?v=' . $_GET["id"] . '--max-filesize 100MB')
?>

<div class="center">
<audio controls autoplay>
	<source src="/m/<?php echo $_GET["id"] ?>.mp3">
</audio>
</div>
</body>
</html>
