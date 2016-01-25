<?php
include __DIR__ . "/../default/conf.php";

$conf['data_url']		= '[out:json];area["name"="Deutschland"]["boundary"="administrative"];(node["amenity"="charging_station"](area););out;';
$conf['lat']                    = "51.159";
$conf['lon']                    = "9.976";
$conf['zoom']                   = "6";
$conf['title']			= "Ladestationen in Deuschland";

?>
