<?php
include_once('includes/Configuration.php');  

$wrapper = new Wrapper();
$wrapper->setTitle('SentryUV');
$wrapper->writeHeader();
?>

//Include Anchor
<?php

include_once('anchor/index.php');

?>


<?php

   //Include the home page slider
   require_once('includes/iCalloutProductBanner.php');
         
$wrapper->writeFooter();
?>