<?php

$videoApi = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg";
$videoUrl = "https://youtu.be/55sTWNNfOxE?si=vHh5urL0397isdCE";
$videoUrlArray = explode('?si=', $videoUrl);
$videoUrlArray2 = explode('.be/', $videoUrlArray[0]);
$videoID = end($videoUrlArray2);

$api = str_replace("<insert-youtube-video-id-here>", $videoID , $videoApi);

echo "<img src=".$api.">";
?>