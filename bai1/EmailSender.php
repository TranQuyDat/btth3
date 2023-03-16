<?php
namespace btth3\btth3; 
use btth3\btth3\EmailServerInterface;
class EmailSender{
    private $emailServer;
    public function __construct(EmailServerInterface $emailServer){
        $this->emailServer =$emailServer;
    }

    public function Send($to,$subject,$mes){
        $this->emailServer->SendEmail($to,$subject,$mes);
    }

}