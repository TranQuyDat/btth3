<?php
namespace btth3\btth3; 
interface EmailServerInterface{
    public function SendEmail($to,$subject,$mes);
}