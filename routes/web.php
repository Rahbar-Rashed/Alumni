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
Route::get('unapprove/members','RegistrationController@UnapproveMembers')->name('unapprove.members');
Route::get('approve/members','RegistrationController@ApproveMembers')->name('approve.members');

Route::get('approvemembers/invitecode','RegistrationController@ApproveMembersWithCode')->name('approvemembers.invitecode');
Route::get('edit/member/{id}','RegistrationController@EditMember');
Route::post('update/member','RegistrationController@UpdateMember')->name('update.member');
Route::get('delete/member/{id}','RegistrationController@DeleteMember');

Route::post('make/payment','RegistrationController@MakePayment')->name('make.payment');
Route::get('view/member/{id}','RegistrationController@ViewMembers');
Route::get('/approve/member/{id}','RegistrationController@ApproveMember');
Route::get('/unapprove/member/{id}','RegistrationController@UnapproveMember');
Route::get('/generate/invitecode/{id}','RegistrationController@GenInviteCode');
Route::post('generated/invitecode/{id}','RegistrationController@MakeInviteCode')->name('gen.invitecode');
Route::post('send/invite','RegistrationController@send_invitation')->name('send.invite');
Route::get('invite/other/member','RegistrationController@invite_other_member')->name('invite.other_member');

Route::get('/export/unapprove/member','RegistrationController@export_unapprove_member');
Route::get('/export/approve/member','RegistrationController@export_approve_member');
Route::get('/export/member/code','RegistrationController@export_member_code');
Route::get('/export/batch/member','RegistrationController@export_batch_member');
Route::get('/export/batch/member/{batch}','RegistrationController@export_batch_member');

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


