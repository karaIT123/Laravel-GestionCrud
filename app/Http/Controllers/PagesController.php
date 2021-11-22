<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function about()
    {
        $title = "A propos";
        $numbers = [1,2,3];
        return view('pages/about', compact('title', 'numbers'));
    }

    public function contact(Mailer $mailer)
    {
        #$mailer->queue();
        $to = "email@example.com";
        Mail::send(['mail.contact','mail.contact-text'],['username' => 'test'], function($message) use ($to){
            //var_dump($message);
           // die();
            //die(public_path());

            #$message->to('contact@example.com')->subject('Hello');

            $message->to($to);
            #$message->to('contact@example.com');
            #$message->attach(public_path() . '/pc.jpg');
        });
    }
}

