<?php

interface EmailBody
{
    public function emailBody();
}

class Email implements EmailBody
{
    public function emailBody()
    {
       echo "This is main email body".PHP_EOL;
    }
}

abstract class EmailBodyDecorator implements EmailBody
{
    protected $emailBody;

    public function __construct(EmailBody $emailBody)
    {
        $this->emailBody = $emailBody;
    }

    abstract function emailBody();
}

class ChristmasEmailBody extends EmailBodyDecorator
{
    public function emailBody()
    {
        echo "This is christmas email text".PHP_EOL;
        $this->emailBody->emailBody();
    }
}

class NewYearEmailBody extends EmailBodyDecorator
{
    public function emailBody()
    {
        echo "This is new year email text".PHP_EOL;
        $this->emailBody->emailBody();
    }
}

$email = new Email();
$email->emailBody();

$email = new Email();
$email = new ChristmasEmailBody($email);
$email->emailBody();

$email = new Email();
$email =  new NewYearEmailBody($email);
$email->emailBody();