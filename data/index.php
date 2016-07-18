<?php

#echo $_GET['file'];

header("Content-Encoding: gzip");
header('Content-type: application/json');

$file =  basename($_GET['file']);

$last_modified_time = filemtime( $file );
$etag = md5_file( $file );
header("Last-Modified: ".gmdate("D, d M Y H:i:s", $last_modified_time)." GMT"); 
header("Etag: $etag"); 

if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_modified_time || 
    @trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag) { 
    header("HTTP/1.1 304 Not Modified"); 
    exit; 
}

$compressed = gzcompress( file_get_contents( $file ) );
echo "\x1f\x8b\x08\x00\x00\x00\x00\x00";
echo $compressed;

?>
