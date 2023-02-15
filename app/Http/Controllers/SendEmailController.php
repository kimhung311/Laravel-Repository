<?php

namespace App\Http\Controllers;

use App\Mail\DemoEmail;
use Illuminate\Http\Request;

use Mail;

use App\Mail\NotifyMail;


class SendEmailController extends Controller
{

    public function index()
    {

        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'SenderUserName';
        $objDemo->receiver = 'ReceiverUserName';
        Mail::to("receiver@example.com")->send(new DemoEmail($objDemo));
    }
}
