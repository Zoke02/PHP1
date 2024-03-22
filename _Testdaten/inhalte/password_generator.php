<?php

function zufallspasswort($length = 8) {
    $passwords = array();
    $symbols = array("°","!","§","$","%","&","/","(",")","=","?","*","_",":",",",".","-","+","~","\\","{","[","]","}","^","@","€",">","|","#",".");
    $array_of_characters = array_merge(range('A','Z'), range('a','z'), range('0','9'), $symbols);
    print_r($array_of_characters);
    echo "<br>";
    $nr_of_passwords = 10;
    $password = "";
    // Create the password by $nr_of_passwords.
    for ($i=1; $i <= $nr_of_passwords ; $i++) { 
        // Create 1 Password.
        // $length defines how long the password should be.
        while ((strlen($password) + 1) <= $length) {
            // - 1 to match the actual length of the array.
            $random_character = $array_of_characters[rand(0, (count($array_of_characters) - 1))];
            $password .= $random_character;
        };
        // Write each password in a array.
        $passwords[] = $password;
        // Clear previous password.
        $password = "";
    };
    // Print all Passwords on screan.
    foreach ($passwords as $key => $value) {
        echo "<br>";
        echo $value;
        echo "<br>";
    }
    echo "<br>";

}

zufallspasswort();

