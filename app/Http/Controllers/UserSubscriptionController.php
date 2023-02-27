<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserSubscriptionController extends Controller
{
    public function show(Request $request): View
    {
        return view('user.subscriptions.create');
    }
}
