<?php
include_once('includes/Config.php');  

$wrapper = new Wrapper();
$wrapper->setTitle('SentryUV');
$wrapper->writeHeader();
?>

<?php 

   $postHtml = curl_get(Config::getBaseDir(). 'anchor/posts/');
   print($postHtml);

<?php

   //Include the home page slider
   require_once('includes/iCalloutProductBanner.php');
         
$wrapper->writeFooter();
?>