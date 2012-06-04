<?php
namespace Striide\MailerBundle\Service;
use Striide\MailerBundle\Message\Message;

class MailerService
{
  private $logger = null;
  public function __construct($logger) 
  {
    $this->logger = $logger;
  }
  private $mailer = null;
  public function setEmailService($service) 
  {
    $this->mailer = $service;
  }
  public function send(Message $message) 
  {
    $this->logger->info(sprintf("Sending email... (%s:%s)", $message->getSubject() , $message->getToAddress()));
    $this->mailer->send($message);
  }
}
