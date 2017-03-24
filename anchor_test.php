<?php
include_once('includes/Config.php');  

$wrapper = new Wrapper();
$wrapper->setTitle('SentryUV');
$wrapper->writeHeader();
?>

<link rel="import" href="<?php Config::getBaseDir(). 'anchor/posts'; ?>">


<?php

   //Include the home page slider
   require_once('includes/iCalloutProductBanner.php');
         
$wrapper->writeFooter();
?>