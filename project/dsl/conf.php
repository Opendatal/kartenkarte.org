<?php
include __DIR__ . "/../default/conf.php";

$conf['data_url']		= '[out:json];area["name"="Deutschland"]["boundary"="administrative"]->.boundaryarea;(
node(area.boundaryarea)["man_made"="MDF"];
>;);out;';
$conf['data_url']               = trim(preg_replace('/\\n/', '', $conf['data_url']));
$conf['lat']                    = "51.159";
$conf['lon']                    = "9.976";
$conf['zoom']                   = "6";
$conf['title']			= "DSL-Hauptverteiler in Deuschland";

?>
