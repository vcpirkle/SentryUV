<?php
   include_once('includes/Config.php');  
   
   if(Config::getEnd() != 'dev') {
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
   
   print('If re-write mod is working the blog slug is: '. $slug. '</br></br>');

   // $postHtml = curl_get(Config::getBaseDir(). 'anchor/posts/');
   // print($postHtml);

   //Include the home page slider
   require_once('includes/iCalloutProductBanner.php');
         
$wrapper->writeFooter();
?>