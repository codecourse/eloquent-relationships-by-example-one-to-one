<?php

use App\Models\Address;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $user = User::find(1);

    return view('address', [
        'user' => $user
    ]);
});

Route::get('/create', function () {
    $user = User::find(1);

    $user->address()->create([
        'line_1' => '100 Code Lane'
    ]);

    // Address::forceCreate([
    //     'user_id' => 1,
    //     'line_1' => '38 Code Lane'
    // ]);
});

Route::get('/update', function () {
    $user = User::find(1);

    $user->address()->update([
        'line_1' => '1 Eloquent Lane'
    ]);
});

Route::get('/delete', function () {
    $user = User::find(1);

    $user->address()->delete();
});
