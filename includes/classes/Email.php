<?php

class Email {
   private $smtpHost;
   private $smtpUser;
   private $smtpPassword;
   private $noReply;

   public function __construct() {
      $smtpConfig = Config::getSmptConfig();
      $this->smtpHost = $smtpConfig['host'];
      $this->smtpUser = $smtpConfig['user'];
      $this->smtpPassword = $smtpConfig['password'];
      $this->noReply = $smtpConfig['noreply'];
   }

   public function send($from = null, $toUser, $subject, $mailTemplate, $mailData = array()) {
      if( !file_exists('mail/'. $mailTemplate) ) {
         throw new Exception('The mail template '. 'mail/'. $mailTemplate. ' could not be found.');
      }
      
      $message = file_get_contents('mail/'. $mailTemplate);
      foreach($mailData as $key => $value) {
         $message = str_replace('%'. $key. '%', $value, $message);
      }
      
      if( is_null($from) ) { $from = $this->noReply; }
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->SMTPDebug = 0; // 1 tells it to display SMTP errors and messages, 0 turns off all errors and messages, 2 prints messages only.
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'ssl';
      $mail->Host = $this->smtpHost;
      $mail->Port = 465;

      $mail->Username = $this->smtpUser;
      $mail->Password = 'kR3we1nF0';

      $mail->From = $from;
      $mail->FromName = $from;  //TODO test no-reply email
      $mail->AddAddress($toUser->getField('email'), $toUser->getField('firstName'). ' '. $toUser->getField('lastName'));
      $mail->Subject = $subject;
      $mail->MsgHTML($message);
      
      if ($mail->Send() == true) {
         return true;
      }
      else {
         return $mail->ErrorInfo;
      }
   }
}