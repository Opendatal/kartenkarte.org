<?php
include __DIR__ . "/../default/conf.php";

$conf['data_url']		= '[out:json];area["postal_code"="42117"]["boundary"="postal_code"]->.boundaryarea;(
node(area.boundaryarea)["amenity"~"restaurant"];
node(area.boundaryarea)["highway"~"bus_stop"];
>;);out;';
$conf['data_url']               = trim(preg_replace('/\\n/', '', $conf['data_url']));
$conf['lat']                    = "51.2411";
$conf['lon']                    = "7.1364";
$conf['zoom']                   = "14";
$conf['title']			= "Arrenberg";

?>
