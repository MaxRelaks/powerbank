<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('xiaomi20A');
    }

    public function feedback(Request $request)
    {
        $toEmail = 'macraen.dev@gmail.com';
        $message = "User_name: ".$request->user_name." | User_subject: ".$request->user_subject." | User_email: ".$request->user_email." | User_phone: ".$request->user_phone." | User_message: ".$request->user_message;
//        Mail::to($toEmail)->send(new FeedbackMail($message));
        $mailData = [
            'name' => $request->user_name,
            'subject' => $request->user_subject,
            'email' => $request->user_email,
            'phone' => $request->user_phone,
            'message' => $request->user_message
        ];
        Mail::to($toEmail)->send(new FeedbackMail($mailData));

        return redirect()
            ->back()
            ->with('mess', "Повідомлення надіслано! Відповідь надійде протягом 24х годин.");
    }
}
