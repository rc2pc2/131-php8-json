<?php 


function generatePassword($passwordLength){
    // %  creiamoci un dizionario <==== questo dizionario
    $lowercaseChars = "abcdefghijklmnopqrstuvwxyz";
    $uppercaseChars = "QWERTYUIOPASDFGHJKLZXCVBNM";
    $digits = "1234567890";
    $symbols = "~!@#$%^*()_+{}|:,.?";
    $dictionary = $lowercaseChars . $uppercaseChars . $digits . $symbols;
    
    $newPassword = "";
    
    for ($i=0; $i < $passwordLength; $i++) { 
        $newPassword .= $dictionary[getRandomNumber(0, mb_strlen($dictionary) - 1)];
    }
    
    return $newPassword;
} 

function isFieldValid($valueToCheck){  
    if (isset($valueToCheck) && !empty($valueToCheck)
    && $valueToCheck >= 10 && $valueToCheck <= 45){
        return true;
    } 
    return false;
}

function getRandomNumber($min, $max){
    return random_int($min, $max);
}

?>