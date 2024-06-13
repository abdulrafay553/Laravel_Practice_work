<?php

namespace App\Http\Controllers;

use Mail;

class MailController extends Controller
{
    //
    public function basic_email()
    {
        $data = array('name' => "abc");

        Mail::send(['text' => 'mail'], $data, function ($message) {
            $message->to('abdulrafaych54@gmail.com', 'Abdul Rafay')->subject('Laravel Basic Testing Mail');
            $message->from('rafych54@gmail.com', 'Abdul Rafay');
        });
        echo "<h1>Basic Email Sent. Check your inbox.</h1>";
    }
}
