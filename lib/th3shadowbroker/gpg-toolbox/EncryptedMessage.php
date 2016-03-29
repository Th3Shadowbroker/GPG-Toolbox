<?php

require 'Encrypt.php';

class EncryptedMessage
{
    
    private $msg;
    
    function __construct($message, $encryptMessage, $public_key) //Class constructor
    {
        
        $this->msg = $message;
        
        if ($encryptMessage == true){
            
            $encryptor = new Encrypt;
            
            $this->msg = $encryptor->encrypt($public_key, $message);
            
        }
        
    }

    public function appendText($text) //Add not encrypted text
    {
        $this->msg = $this->msg . $text;
        
    }
   
    public function getMesage() //Returns the message
    {
        
        return $this->msg;
        
    }
    
}

?>
