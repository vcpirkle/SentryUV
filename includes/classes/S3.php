<?php
use Aws\Common\Aws;
class S3 {
	
   public static function putObject($subBucket, $objectName, $objectData) {
   
      $aws = Aws::factory('includes/AWSConfig.php');
      $s3Client = $aws->get('s3');
      
      $bucket = Config::getEnv() == 'dev' ? 'dev.tennesseeautorack.com' : 'www.tennesseeautorack.com';
      if(!$s3Client->doesBucketExist($bucket)) {
         $s3Client->createBucket(array('Bucket' => $bucket));
         $s3Client->waitUntil('BucketExists', array('Bucket' => $bucket));
      }
      
      $bucket .= "/$subBucket";
      if(!$s3Client->doesBucketExist($bucket)) {
         $s3Client->createBucket(array('Bucket' => $bucket));
         $s3Client->waitUntil('BucketExists', array('Bucket' => $bucket));
      }
      
      $result = $s3Client->putObject(array(
          'Bucket' => $bucket,
          'Key'    => $objectName,
          'Body'   => $objectData
      ));
      
      $s3Client->waitUntil('ObjectExists', array(
          'Bucket' => $bucket,
          'Key'    => $objectName
      ));
      
      return $objectName;
   }
   
   public static function getObject($subBucket, $objectName) {
      $aws = Aws::factory('includes/AWSConfig.php');
      $s3Client = $aws->get('s3');
      
      $bucket = Config::getEnv() == 'dev' ? 'dev.tennesseeautorack.com' : 'www.tennesseeautorack.com';
      if(!$s3Client->doesBucketExist($bucket)) {
         $s3Client->createBucket(array('Bucket' => $bucket));
         $s3Client->waitUntil('BucketExists', array('Bucket' => $bucket));
      }
      
      $bucket .= "/$subBucket";
      if(!$s3Client->doesBucketExist($bucket)) {
         $s3Client->createBucket(array('Bucket' => $bucket));
         $s3Client->waitUntil('BucketExists', array('Bucket' => $bucket));
      }
      
      $result = $s3Client->getObject(array(
          'Bucket' => $bucket,
          'Key'    => $objectName
      ));
      
      return $result;
   }
   
   public static function deleteObject($subBucket, $objectName) {
      $aws = Aws::factory('includes/AWSConfig.php');
      $s3Client = $aws->get('s3');
      
      $bucket = Config::getEnv() == 'dev' ? 'dev.tennesseeautorack.com' : 'www.tennesseeautorack.com';
      if(!$s3Client->doesBucketExist($bucket)) {
         $s3Client->createBucket(array('Bucket' => $bucket));
         $s3Client->waitUntil('BucketExists', array('Bucket' => $bucket));
      }
      
      $bucket .= "/$subBucket";
      if(!$s3Client->doesBucketExist($bucket)) {
         $s3Client->createBucket(array('Bucket' => $bucket));
         $s3Client->waitUntil('BucketExists', array('Bucket' => $bucket));
      }
      
      $result = $s3Client->deleteObject(array(
          'Bucket' => $bucket,
          'Key'    => $objectName
      ));
      
      return $result;
   }
}
?>