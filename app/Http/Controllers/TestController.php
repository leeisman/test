<?php

namespace App\Http\Controllers;

use Illuminate\Mail\Message;
use Mail;
use App\Mail\TestMailable;

class TestController extends Controller
{
    public function mailQueue()
    {
        Mail::queue(new TestMailable, 'my-queue');
    }
}
