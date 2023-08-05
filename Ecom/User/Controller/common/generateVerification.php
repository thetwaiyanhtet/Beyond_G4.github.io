<?php
function generateVerificationNumber($length = 6) {
    $characters = '0123456789';
    $verificationNumber = '';
    $max = strlen($characters) - 1;
    
    for ($i = 0; $i < $length; $i++) {
        $verificationNumber .= $characters[rand(0, $max)];
    }
    
    return $verificationNumber;
}

?>