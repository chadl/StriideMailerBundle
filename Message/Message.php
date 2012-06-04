<?php
namespace Striide\MailerBundle\Lib;

class Message extends \Swift_Message
{
  public function getToAddress() 
  {
    $to = $this->getTo();
    $emails = array_keys($to);
    return implode(",", $emails);
  }
}
