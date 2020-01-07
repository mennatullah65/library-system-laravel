<?php

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
    return view('public_page');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/customer_profile', function () {
    return view('customerProfile');
})->middleware('auth');
Route::get('/mywishlist', function () {
    return view('wish_list');
})->middleware('auth');
Route::get('/librarian_login', function () {
    return view('librarian_login');
});
Route::get('/dashboard', 'userController@get_user')->middleware('auth');
Route::get('/signup/librarian_login', function () {
    return view('librarian_login');
});
Route::get('/signup/{email}', function ($email) {
    //echo'<script>alert("'.$email.'");</script>';
    return view('signup',['emailstate'=>$email]);

});
Route::get('/contact_us', function () {
    return view('contact_us');
});
Route::get('/items', function () {
    return view('items');
});
Route::get('/forget_password', function () {
    return view('forget_password');
});
Route::get('/reset_password', function () {
    return view('reset_password');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/setting', function () {
    return view('setting');
});
Route::get('/addbooks', function () {
    return view('addbooks');
});

Route::get('/librarianbooks', function () {
    return view('librarianbooks');
});
Route::get('/contact_usLibrarian', function () {
    return view('contact_usLibrarian');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/editbook', function () {
    return view('editbook');
});
Route::get('/bookdetail', function () {
    return view('bookdetail');
});

//get requests
Route::get('editprofile','librarianController@get_librariandata');

Route::get('editbook/{id}','addbooks_supplier@showbook');
Route::post('profile/edit','addbooks_supplier@showbookforform');

Route::get('deletebook/{id}/{email}','addbooks_supplier@delete_book');
Route::post('profile/delete','addbooks_supplier@delete_bookforform');

Route::post('profile/more','addbooks_supplier@gotoitemdetail');

Route::get('logout','librarianController@logout');
Route::get('setting','librarianController@get_librarianToSetting')->middleware('is_librarian_login');
Route::get('profile','librarianController@get_librarian')->middleware('is_librarian_login');
Route::get('librarianbooks','addbooks_supplier@get_all_books')->middleware('is_librarian_login');
Route::get('items','addbooks_supplier@get_all_booksToitems');
Route::get('addbooks','librarianController@welcomeSession')->middleware('is_librarian_login');

//Route::get('profile','addbooks_supplier@get_books');
//Route::get('setting','signup_supplier@get_all_supplier');

//post requests
Route::post('signup/save','librarianController@signup');
Route::post('librarian_login/save','librarianController@login1');
Route::post('addbooks/save','addbooks_supplier@addbooks');
Route::post('editprofile/save','librarianController@edit_librarian');
//Route::post('editbook/{id}/save','addbooks_supplier@edit_book');
Route::post('editbook/save','addbooks_supplier@edit_book');
Route::post('items/itemdetail','addbooks_supplier@gotoitemdetailAnony');
Route::post('search','searchController@get_item_search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
