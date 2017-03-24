<?php  
   chdir('../');
   include_once('includes/Configuration.php');
   $db = Configuration::getInstance();
	$scheduledJobs = Cron::getScheduledCron();
	foreach($scheduledJobs as $cron) {
      eval('$status = '. $cron->getField('function'));
      $cron->setField('status', $status);
      $cron->setField('lastRunTime', time());
      $cron->save($db);
	}
   
   $db->_sql_close();
	
	function cleanupSession() {
      try {
         $sql = 'DELETE FROM session '.
                'WHERE (userId IS NULL AND UNIX_TIMESTAMP() - lastTime > (60 * 20)) '. /*No user and greater than 20 minutes */
                'OR UNIX_TIMESTAMP() - lastTime > (60 * 60 * 24 * 30);'; /* Or where the user hasn't been seen for 30 days */
         
         $db = Configuration::getInstance();
         
         $result = $db->sql_query($sql);
         $db->sql_freeresult($result);
         $db->_sql_close();
         return 1;
      }
      catch(Exception $e) {
         return -1;
      }
	}
   
?>