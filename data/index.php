<?php

#echo $_GET['file'];

header("Content-Encoding: gzip");
header('Content-type: application/json');

$compressed = gzcompress( file_get_contents( basename($_GET['file']) ) );
echo "\x1f\x8b\x08\x00\x00\x00\x00\x00";
echo $compressed;

?>
