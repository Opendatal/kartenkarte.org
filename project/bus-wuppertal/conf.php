<?php
include __DIR__ . "/../default/conf.php";

$conf['data_url']		= '[out:json];area["name"="Wuppertal"]["boundary"="administrative"];(node["highway"="bus_stop"](area););out;';
$conf['lat']                    = "51.2655";
$conf['lon']                    = "7.1869";
$conf['zoom']                   = "14";
$conf['title']			= "Bus Wuppertal";

?>
