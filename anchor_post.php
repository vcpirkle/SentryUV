<?php
include_once('includes/Config.php');  

$wrapper = new Wrapper();
$wrapper->setTitle('SentryUV');
$wrapper->writeHeader();
?>

<?php 

   $slug = $_GET['slug'];
   
   print('If re-write mod is working the blog slug is: '. $slug. '</br></br>');

   // $postHtml = curl_get(Config::getBaseDir(). 'anchor/posts/');
   // print($postHtml);

   //Include the home page slider
   require_once('includes/iCalloutProductBanner.php');
         
$wrapper->writeFooter();
?>