<?php

$domain = explode(".",$_SERVER[HTTP_HOST]);
$project = $domain[0];
$js_file = "../project/".$project."/javascript.js";

if( file_exists($js_file) )
{
	echo file_get_contents($js_file);
}
else
{
	if( $project == "kartenkarte" )
	{
		echo file_get_contents("../project/default/javascript.js");
	}
}

?>
