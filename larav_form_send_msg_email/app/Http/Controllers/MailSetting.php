<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailClass;



class MailSetting extends Controller
{
    public function send_form(Request $request)
    {
      $name = $request->name;
      $email = $request->email;
      $msg = $request->msg;

      Mail::to('alinakravets2017@gmail.com')->send(new MailClass($name, $email, $msg));
      return view('return_message');
    }
}
