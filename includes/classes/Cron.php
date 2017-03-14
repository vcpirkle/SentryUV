<?php

class Cron extends SoftDelete {

	protected static $fields;
	
    public function __construct($id = null) {
        parent::__construct($id);
    }
	
	public static function getScheduledCron() {
		$scheduledCronJobs = array();
		
		$fields = 'id, name, lastRunTime, frequency, function, status, createDate, updateDate, deleted';
		$sql = 'SELECT '. $fields. ' FROM '. self::getTablename(). ' WHERE deleted = 0 AND (lastRunTime IS NULL OR (('. time(). ' - lastRunTime)) > frequency)';
		$db = config::getInstance();
		if($result = $db->sql_query($sql)) {
			while($row = $db->sql_fetchrow($result)) {
				$cron = new Cron();
				$cron->setData($row);
				$scheduledCronJobs[] = $cron;
			}
		}
		return $scheduledCronJobs;
	}

    function getTable() {
        return self::getTablename();
    }

    public static function getTablename() {
        return 'cron';
    }

    public function getFields() {
        return self::getDataFields();
    }

    public static function getDataFields() {
        if (self::$fields == null) {
            self::$fields = parent::getDataFields();

			self::$fields["name"] = "string";
			self::$fields["lastRunTime"] = "integer";
			self::$fields["frequency"] = "integer";
			self::$fields["function"] = "string";
			self::$fields["status"] = "integer";
        }

        return self::$fields;
    }
}

?>