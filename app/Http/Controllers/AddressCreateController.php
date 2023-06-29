<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressCreateController extends Controller
{
    public function __invoke()
    {
        return view('address.create');
    }
}
