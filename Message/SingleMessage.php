<?php
namespace Striide\MailerBundle\Lib;

class SingleMessage extends Message
{
  /**
   * Create a new Message.
   * @param string $subject
   * @param string $body
   * @param string $contentType
   * @param string $charset
   * @return SingleMessage
   */
  public static function newInstance($subject = null, $body = null, $contentType = null, $charset = null) 
  {
    $message = new self($subject, $body, $contentType, $charset);
    $message->getHeaders()->addTextHeader('X-striide', '1');
    return $message;
  }
}
