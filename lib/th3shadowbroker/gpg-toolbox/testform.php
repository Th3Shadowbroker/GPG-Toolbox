<?php

require 'lib/th3shadowbroker/gpg-toolbox/KeyManager.php';
require 'lib/th3shadowbroker/gpg-toolbox/Encrypt.php';
require 'lib/th3shadowbroker/gpg-toolbox/EncryptedMessage.php';

echo 'This is your text ( just encrypted ;) ):<br>';

$tmp = new EncryptedMessage($_GET['EC_TEXT'], true, $_GET['EC_KEY']);

$tmp->appendText('<br><br>This text was appended to the encrypted lines above.');

echo $tmp->getMesage();

?>
