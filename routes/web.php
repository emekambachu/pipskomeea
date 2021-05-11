<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('home');
});

Route::get('products', function () {
    return view('products');
});

Route::get('terms', function () {
    return view('terms');
});

Route::get('privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('contact/submit', function (Request $request){

    $input = $request->all();

    $data = [
        'name' => $input['name'],
        'email' => $input['email'],
        'mobile' => $input['mobile'],
        'subject' => $input['subject'],
        'email_message' => $input['email_message'],
    ];

    Mail::send('emails.contact-form', $data, static function ($message) use ($data) {
        $message->from('info@pipskomeea.com', 'Pipskome EA Consult');
        $message->to('pipskomeconsultant@gmail.com');
        $message->replyTo('pipskomeconsultant@gmail.com', 'Pipskome EA Consult');
        $message->subject('Message from '.$data['name']);
    });

//    Session::flash('success', 'Deleted');
    return redirect()->back()->with('success', 'Your request has been sent, our customer service representative will contact you via email');
});

Route::get('faq', function () {
    return view('faq');
});
