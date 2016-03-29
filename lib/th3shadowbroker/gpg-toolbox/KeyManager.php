<?php

class KeyManager
{ 
    public static function createKeyFile($keyName, $key, $keyDir = 'keys') //Create new Key-File
    {
        
        if (!file_exists($keyDir . '/' . $keyName . '.des'))
        {
            
            file_put_contents($keyDir . '/' . $keyName . '.des', $key); echo 'Done!';
            
        }else{
            
            throw new Exception('File already exists or access denied!', 1); echo 'Didnt work !';
            
        }
        
    }
    
    public static function deleteKeyFile($keyName, $keyDir = 'keys') //Delete Key-File
    {
        
        if (file_exists($keyDir . '/' . $keyName . '.des'))
        {
            
            unlink($keyDir . '/' . $keyName . '.des');
            
        }else{
            
            throw new Exception('File does not exist or access denied!', 0);
            
        }
        
    }

    public static function loadKeyFile($keyName, $keyDir = 'keys') //Load Key-File
    {
        
        if (file_exists($keyDir . '/' . $keyName . '.des'))
        {
            
            return file_get_contents(file_exists($keyDir . '/' . $keyName . '.des'));
            
        }else{
            
            throw new Exception('File does not exist or access denied!', 0);
            
        }
        
    }
    
}

?>



