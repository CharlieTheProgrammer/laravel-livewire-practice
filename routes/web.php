<?php

use App\Mail\ContactFormMailable;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Request;
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
    return view('new-welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::post('/contact', function (Request $request) {
    $contact = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
    ]);

    Mail::to('charlie@textSupport.com')->send(new ContactFormMailable($contact));
    return back()->with('success_message', 'We received your message successfully and will get back to you shortly!');
});


Route::get('/post/{post}', function (Post $post) {
    return view('show', compact('post'));
})->name('post');
