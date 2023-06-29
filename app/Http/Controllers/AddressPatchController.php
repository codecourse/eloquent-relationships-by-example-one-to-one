<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressPatchController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->user()->address()->update([
            'line_1' => $request->line_1
        ]);

        return redirect('/address');
    }
}
