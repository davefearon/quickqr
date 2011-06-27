<?php
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
$PNG_WEB_DIR = 'temp/';
include "qrlib.php";
$referer = ( $_SERVER['HTTP_REFERER'] != null ) ? $_SERVER['HTTP_REFERER'] : 'quickqr.me';
$filename = $PNG_TEMP_DIR.urlencode($referer).'.png';
$errorCorrectionLevel = 'L';
$matrixPointSize = 4;
QRcode::png($referer, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
header( "Content-type: image/png" );
readfile($PNG_WEB_DIR.basename($filename));
?>