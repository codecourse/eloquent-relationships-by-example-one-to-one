<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressDestroyController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->user()->address()->delete();

        return redirect('/address');
    }
}
