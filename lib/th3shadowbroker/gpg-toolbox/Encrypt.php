<?php

define('GPG_PATH', __DIR__ . '/vendor/jasonhinkle/php-gpg/libs');

require '/vendor/autoload.php';
require_once GPG_PATH . 'libs/GPG.php';

class Encrypt
{
    
    public function encrypt($public_key, $text) //Encrypt text
    {
        
        $gpg = new GPG();
        
        $pub_key = new GPG_Public_Key($public_key);

        $encrypted = $gpg->encrypt($pub_key,$text);

        return $encrypted;
        
    }
    
}

?>