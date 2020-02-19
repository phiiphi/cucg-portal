<?php
namespace App;

class SendCode
{
    public static function sendCode($phone)
    {
        $code = rand(1111,9999);
        $nexmo = app('Nexmo\Client');
        $nexmo->message()->send([
            'to'   => '+233'.(int)$phone,
            'from' => 'CUCG',
            'text' => 'Verification Code: '.$code,
        ]);

        return $code;

    }
}
