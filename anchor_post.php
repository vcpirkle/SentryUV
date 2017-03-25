<?php
   include_once('includes/Config.php');  
   
   if(Config::getEnv() != 'dev') {
      header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
      header('Pragma: no-cache'); // HTTP 1.0.
      header('Expires: 0'); // Proxies.
   }

   $wrapper = new Wrapper();
   $wrapper->setTitle('SentryUV');
   $wrapper->writeHeader();
?>

<?php 

   $slug = $_GET['slug'];
   $postHtml = curl_get(Config::getBaseDir(). 'anchor/posts/'. $slug);
   print($postHtml);

   //Include the home page slider
   require_once('includes/iCalloutProductBanner.php');
         
$wrapper->writeFooter();
?>