StriideMailerBundle
===================

The intent with this bundle is to wrap and embelish the mail behaviour in Symfony
and Swift.

Example:
--------

$message = new Message();
$message->setTo();
...

$this->get('striide_mailer.mail.service')->send($message);

Which will log the currnetly mail/message, with more behaviour to follow.

Routing
-------

StriideMailerBundle:
    resource: "@StriideMailerBundle/Controller/"
    type:     annotation
    prefix:   /
