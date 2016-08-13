<?php
include __DIR__ . "/../default/conf.php";
$conf['data_url']		= '[out:json];(
node["memorial:type"="stolperstein"];
node["historic"="stolpersteine"];
);out;';
$conf['data_url']               = trim(preg_replace('/\\n/', '', $conf['data_url']));
$conf['lat']                    = "51.159";
$conf['lon']                    = "9.976";
$conf['zoom']                   = "6";
$conf['title']			= "Stolpersteine";

?>
