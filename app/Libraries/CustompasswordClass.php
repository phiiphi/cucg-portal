<?php

namespace App\Libraries;

class CustompasswordClass
{
    public function getHashPassword( $text, $hashedPassword )
    {
        return password_verify($text,$hashedPassword);
    }

    public function convertPasswordToHash($text)
    {
        return hash('sha256', $text);
    }

}
