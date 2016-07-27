<?php
include __DIR__ . "/../default/conf.php";


$conf['data_url']		= '[out:json];area["name"="Wuppertal"]["boundary"="administrative"]->.boundaryarea;(
node(area.boundaryarea)["amenity"="restaurant"];
node(area.boundaryarea)["amenity"="bar"];
node(area.boundaryarea)["amenity"="cafe"];
node(area.boundaryarea)["amenity"="pub"];
>;);out;';
$conf['data_url']               = trim(preg_replace('/\\n/', '', $conf['data_url']));

$conf['lat']                    = "51.2655";
$conf['lon']                    = "7.1869";
$conf['zoom']                   = "14";
$conf['title']			= "Kneipen in Wuppertal";

?>
