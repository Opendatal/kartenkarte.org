<?php

if( php_sapi_name() != "cli")
	die("only cli allowed");

function update( $filename )
{
	echo $filename."\n";
	include $filename;

	$dir = explode("/",$filename);
	$project = $dir[1];

	$start = time();
	
	set_time_limit(0); // unlimited max execution time
	$ch = curl_init();
	$fh = fopen('data/'.$project.'.json', 'w'); 
	curl_setopt($ch, CURLOPT_FILE, $fh);
	curl_setopt($ch, CURLOPT_TIMEOUT, '28800');
	curl_setopt($ch, CURLOPT_URL, 'http://overpass-api.de/api/interpreter?data='.$conf['data_url']);
	//curl_setopt_array($ch, $options);
	curl_exec($ch);
	curl_close($ch);

	$end = time();
	
	echo "saved 'data/$project.json' in ".($end-$start)."s\n\n";

	unset($conf);
}

if($argv[1])
{
	$filename = "project/".$argv[1]."/conf.php";
	update($filename);
	exit();
}

foreach (glob("project/*/conf.php") as $filename)
{
	update($filename);
}

?>
