<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function __invoke()
    {
        $cities = Cities::all()->pluck('name', 'id');

        return view('welcome', compact('cities'));
    }
}
