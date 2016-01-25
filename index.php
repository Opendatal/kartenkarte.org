<?php

$domain = explode(".",$_SERVER[HTTP_HOST]);
$project = $domain[0];
$conf_file = "conf/".$project.".php";

if( !file_exists($conf_file) )
{
	$project = "default";
	$conf_file = "conf/default.php";
}

include $conf_file;


?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $conf['title'] ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="css/leaflet.css" />
  <link rel="stylesheet" href="css/MarkerCluster.css" />
  <link rel="stylesheet" href="css/MarkerCluster.Default.css" />

  <script src="js/jquery-min.js"></script>
  <script src="js/leaflet.js"></script>
  <script src="js/icons.js"></script>
  <script src="js/leaflet.markercluster.js"></script>
  <style type="text/css">
    #map {
      position: absolute;
      height: 100%;
      width: 100%;
    }
    body {
      margin: 0;
    }
  </style>
  <script type="text/javascript">
  var marker = {};
  var markers;
  var map;
  function makeMarkers() {
    marker.osmJson.forEach(function (node) {
    var marker2;
    if (node.type == 'node') {
      L.marker([node.lat, node.lon], {"title": "", "icon": icon_normal }).addTo(markers);
      }
    });
  };

  function mapmap() {
    // create a map in the "map" div, set the view to a given place and zoom
    map = L.map('map').setView(<?php echo "[".$conf['lat'].", ".$conf['lon']."], ".$conf['zoom']; ?>);

   // add an OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors, <a href="impressum.html">Impressum</a>'
    }).addTo(map);

    // Marker Clusters
    markers = new L.MarkerClusterGroup({showCoverageOnHover: false, maxClusterRadius: 40});
    $.ajax({
      url : 'data/<?php echo $project;?>.json',
      type : 'GET',
      success : function (data) {
        marker.osmJson = data.elements;
        makeMarkers();
      }
    });
    map.addLayer(markers);
  }
  </script>
  </head>
  <body onload="mapmap()">
  <div id="map"></div>
</body>
</html>
