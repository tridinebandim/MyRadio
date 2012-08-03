<?php
/**
 * This file provides the MyURYError class for MyURY
 * @package MyURY_Core
 */

/**
 * Provides email functions so that MyURY can send email.
 * 
 * @author Andy Durant <aj@ury.org.uk>
 * @version 03082012
 * @package MyURY_Core
 */
class MyURYEmail {
  // Defaults
  private static $headers = 'Content-type: text/plain; charset=utf-8';
  private static $sender = 'From: URY <no-reply@ury.york.ac.uk>';
  
  // Standard
  /**
   * @var string carriage return + newline
   */
  private static $rtnl = "\r\n";

  /**
   * 
   * @return string default headers for sending email - Plain text and sent from no-reply
   */
  private static function getDefaultHeader() {
    return self::$headers . self::$rtnl . self::$sender;
  }
  /**
   * 
   * @param string $name The name to send from
   * @param string $email The email address to send from
   * @return string The header line for From:
   */
  private static function setSender($name, $email) {
    return self::$headers . self::$rtnl . 'From: ' . $name . ' <' . $email . '>';
  }

  public static function sendEmail($to, $subject, $message){
    mail($to, $subject, $message, self::getDefaultHeader());
  }
  public static function sendEmailFrom($to, $fromName, $fromEmail, $subject, $message) {
    mail($to, $subject, $message, self::setSender($fromName,$fromEmail));
  }
}

