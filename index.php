<?php
   include_once('includes/Config.php');  

   $wrapper = new Wrapper();
   $wrapper->setTitle('SentryUV');
   $wrapper->writeHeader();

   //Include the home page slider
   require_once('includes/iHomeSlider.php');
   
?>

<?php 

   $postHtml = curl_get(Config::getBaseDir(). 'anchor/posts/');
   print($postHtml);

   //Include the home page slider
   require_once('includes/iCalloutProductBanner.php');
         
   $wrapper->writeFooter();
?>