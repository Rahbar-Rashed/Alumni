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

//Route::get('/', function () {
//    return view('master');
//});

Route::get('/', 'InfoController@master');

Route::post('store/member','RegistrationController@store')->name('store.member');
Route::get('all/members','RegistrationController@AllMembers')->name('all.members');
Route::get('edit/member/{id}','RegistrationController@EditMember');
Route::post('update/member','RegistrationController@UpdateMember')->name('update.member');
Route::get('view/member/{id}','RegistrationController@ViewMembers');
Route::get('all/unvermembers','InfoController@AllUnverifiedMembers')->name('all.unvermembers');
Route::get('all/vermembers','InfoController@AllVerifiedMembers')->name('all.vermembers');
Route::get('all/genseccenexcompendingmembers','InfoController@AllGenSecPendingMembers')->name('all.genseccenexcompendingmembers');
Route::get('sign/gensecexpenmembers/{id}','InfoController@SignGenSecPendingMembers');
Route::get('sign/prescenpenmembers/{id}','InfoController@SignPresCenPenMembers');
Route::get('all/prescenpendingmembers','InfoController@AllPresCenPendingMembers')->name('all.prescenpendingmembers');
Route::get('verify/members/{id}','InfoController@VerifyMembers');
Route::post('to/verify','InfoController@ToVerify')->name('to.verify');
Route::post('to/signgemem','InfoController@Tosigngemem')->name('to.signgemem');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


