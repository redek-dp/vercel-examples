<?php

$xml  = file_get_contents("https://www.youtube.com/feeds/videos.xml?playlist_id=PL9tjqljCWvB3dF-Zo16jHwaAvCt6uzcGZ");

$xmldata = simplexml_load_string($xml);
 
$jsondata = json_encode($xmldata);

//file_put_contents("api.json", $jsondata);

print_r($jsondata);

//echo "<a href='/arquivo.json' target='_blank'>/arquivo.json</a>";

//print_r($jsondata);  https://rss.app/feeds/GY72k3NLXlP0da2m.xml


?>