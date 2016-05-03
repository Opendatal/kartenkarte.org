<?php
include __DIR__ . "/../default/conf.php";

$conf['data_url']		= '[out:json];area["name"="Deutschland"]["boundary"="administrative"];(node["tourism"="camp_site"](area);way["tourism"="camp_site"](area););out;';
$conf['lat']                    = "51.159";
$conf['lon']                    = "9.976";
$conf['zoom']                   = "6";
$conf['title']			= "Campingpl&auml;tze in Deuschland";

?>
