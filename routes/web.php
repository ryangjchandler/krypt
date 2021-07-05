<?php

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/{message:uuid}', function (Message $message) {
    return view('show', ['message' => $message]);
})->name('show')->middleware('signed');

Route::post('/create', function (Request $request) {
    $request->validate([
        'name' => ['required', 'string'],
        'expires_at' => ['nullable', 'date'],
        'message' => ['required', 'string'],
    ]);

    $message = Message::create([
        'name' => $request->input('name'),
        'message' => $request->input('message'),
    ]);

    return redirect()->temporarySignedRoute('show', $message->expires_at, $message);
})->name('create')->middleware('throttle:messageCreation');
