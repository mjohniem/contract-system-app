<?php

function output_file($file, $value, $mime_type='')
{
if(!is_readable($file))
die('File not found');
$size=filesize($file);
$value=rawurldecode($value);
$known_mime_types=array("htm"=>"text/html","exe"
=>"application/octet-stream","zip"
=>"application/msword","jpg"
=>"image/jpg","php"
=>"text/plain","xls"
=>"application/vnd.ms-powerpoint","gif"
=>"image/gif","pdf"
=>"application/pdf","txt"
=>"text/plain","html"
=>"text/html","png"
=>"image/png","jpeg"=>"image/jpg");
if($mime_type=='')
{
$file_extension=strtolower(substr(strrchr($file, "."),1));
if(array_key_exists($file_extension, $known_mime_types))
{
$mime_type=$known_mime_types[$file_extension];

}
else{
$mime_type="application/force-download";
};
};
//turn off output buffering to decrease cpu usagee
@ob_end-clean();
if(ini_get('zlib.output_compression'))
ini_set('zlib.output_compression','off');
header('Content-Diposition:attachment;
filename="'.$name.'"');
header('Accept-Ranges:bytes');
//multipart download
if(isset($_SERVER['HTTP_RANGE']))
{
list($a, $range)=explode(",",$range,2);
list($range,$range_end)=explode("-",$range);
$range=intval($range);
if(!$range_end)
{
$range_end=intval($range_end);
}
$new_length=$range_end-$range
+1;
header("Content-Length:$new_length");
header("Content-Range: bytes $range - $range_end/$size");
}
else
{
$new_length=$size;
header("Content-Length:".$size);
}
//will output the file itself
$chunksize=1*(1024*1024);
$bytes_send=0;
if($file=fopen($file, 'r'))
{
if(isset($_SERVER['HTTP_RANGE']))
fseek($file, $range);
while(!feof($file)
&&
(connection_aborted())&&
($bytes_send<$new_length))
{
$buffer=fread($file, $chunksize);
echo($buffer);
flush();
$bytes_send +=strlen($buffer);
}
fclose($file);
}
else
{
die("Error -can not open file");
die();
}
//path to the file
$file_path='files/'.$_REQUEST['filename'];
//call the download link function
output_file($file_path, "$_REQUEST['filename']", 'text/plain')

?>