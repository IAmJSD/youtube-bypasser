<html>
<head>
<title>Math Practice</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>


<?php 
function CleanSTR($str) {
	$disallowedchars = ["\0", "\n", "\r", "*", "'", '"'];
	foreach($disallowedchars as $char) {
	    $str = str_replace($char, "X", $str);
	}
	return $str;
}
$yt = CleanSTR($_GET["id"]);
$id = str_replace("https://www.youtube.com/watch?v=","\n",$yt);
exec('youtube-dl -f 22 --download-archive download.txt --output "v/%(id)s.%(ext)s" ' . $yt . '--max-filesize 600MB')
?>

<div class="center">
<video controls autoplay>
	<source src="/v/<?php echo $id ?>.mp4">
</video>
</div>
</body>
</html>
