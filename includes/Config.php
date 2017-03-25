<?php
   //Global includes and other global variablesheader('Pragma: no-cache');
   
   if(Config::getEnv() == 'dev') {
      header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
      header('Pragma: no-cache'); // HTTP 1.0.
      header('Expires: 0'); // Proxies.
      ini_set('display_errors', '1');
   }
   
   $_GET = array_change_key_case($_GET, CASE_LOWER);
   $_POST = array_change_key_case($_POST, CASE_LOWER);
   $_REQUEST = array_change_key_case($_REQUEST, CASE_LOWER);
    
   $dbtype = 'mysql';

   //Include the AWS auto loader
   require 'vendor/autoload.php';
   include_once('includes/db/dbal.php');
   include_once('includes/db/'. $dbtype. '.php');
   
   //TODO: Link from the new php mailer location
   // include_once('includes/PHPMailer/PHPMailerAutoload.php');

   class Config {
      //TODO: Update smpt web mail configuration
      // private static $smtpHost = 'smtpout.secureserver.net';
      // private static $smtpUser = 'info@weddingkrewe.com';
      // private static $smtpNoReply = 'noreply@weddingkrewe.com';
      // private static $smtpPassword = 'kR3we1nF0';
      
      public static $googleApiKey = 'AIzaSyDKXXXoyEOHYP5bBclObOYJ0Ee8FqI36iY';
      
         
      public static function getSmptConfig() {
         return array (
            'host' => self::$smtpHost,
            'user' => self::$smtpUser,
            'password' => self::$smtpPassword,
            'noreply' => self::$smtpNoReply
         );
      }
         
      public static function getDatabaseConfig($name) {
         if($name == 'prod') {
             return array (
               'database' => 'SentryUV',
               'username' => 'ultraviolet',
               'password' => 'juHWEA7390H23hfgU',
               'host' => 'victor1.cvpcenpy8fdw.us-east-1.rds.amazonaws.com',
               'port' => 3306,
               'driver' => 'mysql',
               'prefix' => '',
            );
         }
         else if($name == 'dev') {
            return array (
               'database' => 'SentryUV_Dev',
               'username' => 'ultraviolet_dev',
               'password' => 'kHerijfKJ7)(42!hMJH',
               'host' => 'victor1.cvpcenpy8fdw.us-east-1.rds.amazonaws.com',
               'port' => 3306,
               'driver' => 'mysql',
               'prefix' => '',
            );
         }
         else { return null; }
      }
      
      public static function getEnv() {
         switch(strtolower($_SERVER['HTTP_HOST'])) {
               case 'www.sentryuv.com':
               case 'sentryuv.com':
                  return 'prod';
               default:
                  return 'dev';
            }
      }
	  
	  public static function isSSL() {
		return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off');
	  }
	  
	  public static function getBaseDir() {
		  $baseDir = self::isSSL() ? 'https://' : 'http://';

		  if(self::getEnv() == 'prod') {
			  return $baseDir. 'www.sentryuv.com/';
		  }
		  else {
			  return $baseDir. 'www.victorpirkle.com/sentryuv/';
		  }
	  }
      
      public static function getInstance($name = null) {
         if(is_null($name)) {
            switch(strtolower($_SERVER['HTTP_HOST'])) {
               case 'www.victorpirkle.com':
               case 'victorpirkle.com':
                  $name = 'dev';
                  break;
               case 'www.sentryuv.com':
               case 'sentryuv.com':
                  $name = 'prod';
                  break;
               default:
                  die("Unknown database");
                  break;
            }
         }
      
         $config = Config::getDatabaseConfig($name);
         if(!is_null($config)) {
            $db = new dbal_mysql();
            if(is_array($db->sql_connect(
                              $config['host'], 
                              $config['username'],
                              $config['password'],
                              $config['database'], 
                              $config['port'],
                              false, 
                              false
            ))) {
               die("Unable to connect to the database");
            }
            return $db;
         }
         else {
            die("Could not connect to database");
         }
      }
   }

   function generateHash($password) {
      // Create a 256 bit (64 characters) long random salt
      $salt = hash('sha256', uniqid(mt_rand(), true) . newGuid());
      
      // Prefix the password with the salt
      $hash = $salt . $password;

      // Hash the salted password a bunch of times
      for ( $i = 0; $i < 10000; $i ++ ) {
         $hash = hash('sha256', $hash);
      }

      // Prefix the hash with the salt so we can find it back later
      return $salt . $hash;
   }
   
   function checkHash($hash, $password) {
      // The first 64 characters of the hash is the salt
      $salt = substr($hash, 0, 64);

      $chkHash = $salt . $password;

      // Hash the password as we did before
      for ( $i = 0; $i < 10000; $i ++ ) {
         $chkHash = hash('sha256', $chkHash);
      }

      $chkHash = $salt . $chkHash;

      if ( $chkHash == $hash ) {
         return true;
      }
      else {
         return false;
      }
   }
   
   function newGuid(){
      if (function_exists('com_create_guid')){
         return com_create_guid();
      }else{
         mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
         $charid = strtoupper(md5(uniqid(rand(), true)));
         $hyphen = chr(45);// "-"
         $uuid = chr(123)// "{"
            .substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12)
            .chr(125);// "}"
         return str_replace('}', '', str_replace('{', '', $uuid));
      }
   } 
   
   function randomStr($length = 8) {
      $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
      $pass = array(); //remember to declare $pass as an array
      $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
      for ($i = 0; $i < $length; $i++) {
         $n = rand(0, $alphaLength);
         $pass[] = $alphabet[$n];
      }
      return implode($pass); //turn the array into a string
   }   
      /**
    * Send a POST requst using cURL
    * @param string $url to request
    * @param array $post values to send
    * @param array $options for cURL
    * @return string
    */
   function curl_post($url, array $post = NULL, array $options = array())
   {
      if(is_null($post)) { $post = array(); }
       $defaults = array(
           CURLOPT_POST => 1,
           CURLOPT_HEADER => 0,
           CURLOPT_URL => $url,
           CURLOPT_FRESH_CONNECT => 1,
           CURLOPT_RETURNTRANSFER => 1,
           CURLOPT_FORBID_REUSE => 1,
           CURLOPT_TIMEOUT => 4,
           CURLOPT_POSTFIELDS => http_build_query($post)
       );

       $ch = curl_init();
       curl_setopt_array($ch, ($options + $defaults));
       if( ! $result = curl_exec($ch))
       {
           trigger_error(curl_error($ch));
       }
       curl_close($ch);
       return $result;
   }

   /**
    * Send a GET requst using cURL
    * @param string $url to request
    * @param array $get values to send
    * @param array $options for cURL
    * @return string
    */
   function curl_get($url, array $get = array(), array $options = array()) {   
      $defaults = array(
           CURLOPT_URL => $url. (strpos($url, '?') === FALSE ? '?' : ''). http_build_query($get),
           CURLOPT_HEADER => 0,
           CURLOPT_RETURNTRANSFER => TRUE,
           CURLOPT_TIMEOUT => 0,
           CURLOPT_CONNECTTIMEOUT => 0
      );
      
       $ch = curl_init();
       curl_setopt_array($ch, ($options + $defaults));
       if( ! $result = curl_exec($ch))
       {
           trigger_error(curl_error($ch));
       }
       curl_close($ch);
       return $result;
   } 
   
   function hide_email($email) { 
  $character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';

  $key = str_shuffle($character_set); $cipher_text = ''; $id = 'e'.rand(1,999999999);

  for ($i=0;$i<strlen($email);$i+=1) $cipher_text.= $key[strpos($character_set,$email[$i])];

  $script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";';

  $script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';

  $script.= 'document.getElementById("'.$id.'").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"</a>"';

  $script = "eval(\"".str_replace(array("\\",'"'),array("\\\\",'\"'), $script)."\")"; 

  $script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>';

  return '<span id="'.$id.'">[javascript protected email address]</span>'.$script;
}

function hide_string($text){
    if(mb_detect_encoding($text, 'UTF-8', true))
        $text = utf8_decode($text);
 
    $ret = '
<script type="text/javascript">// <![CDATA[
                    var t=[
                ';
    $chars = str_split($text);
 
    $enc[] = rand(0,255);
 
    foreach($chars as $char)
    {
        $enc[] = ord($char)-$enc[sizeof($enc)-1];
    }
 
    $ret .= join(',',$enc);
    $ret .= '
                ]; for (var i=1; i<t.length; i++) { document.write(String.fromCharCode(t[i]+t[i-1])); }
// ]]></script>';
 
    return $ret;
}
?>