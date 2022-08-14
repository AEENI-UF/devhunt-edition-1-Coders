<?php

namespace App\Http\Controllers;

class TwilioController extends Controller
{
    public static function sendMessage($message)
    {
        $ssid = "AC7cb2ba291d3fcdccc4a52934b3cc2f7c";
        $token = "fe9a4b4772aed0e5571c53b1f1c5de52";
        $twiloClient = new \Twilio\Rest\Client($ssid, $token);
        $twiloClient->messages->create(
            '+261348974586',
            ['from' => '+12242617812', 'body' => $message]
        );
    }
}
