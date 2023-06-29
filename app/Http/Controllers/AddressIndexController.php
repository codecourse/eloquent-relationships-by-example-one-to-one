<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AddressIndexController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('address.index', [
            'user' => $request->user()
        ]);
    }
}
