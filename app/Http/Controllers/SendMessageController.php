<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMessageRequest;
use App\Mail\SendFeedbackMail;
use App\Models\FeedbackMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMessageController extends Controller
{
    public function __invoke(SendMessageRequest $request)
    {
        $message = FeedbackMessage::create($request->validated());
        $emailAdmin = config('app.email_admin');
        Mail::to($emailAdmin)->send(new SendFeedbackMail($message));

        return redirect()->back()->with('success', 'Ми !');
    }
}
