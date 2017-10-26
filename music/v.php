<html>
<head>
<title>In Beta</title>
<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>

<?php 
$yt = $_GET["id"];
$id = str_replace("https://www.youtube.com/watch?v=","\n",$yt);
exec('youtube-dl -k --download-archive download.txt -x --audio-format mp3 --output "m/%(id)s.%(ext)s" ' . $_GET["id"] . '--max-filesize 100MB')
?>

<div class="center">
<audio controls autoplay>
	<source src="/m/<?php echo $id ?>.mp3">
</audio>
</div>
</body>
</html>
