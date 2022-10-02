<?php

namespace App\Http\Controllers;

use App\Model\Registration;
use Illuminate\Http\Request;

use App\Exports\MemberExport;
use App\Exports\BatchExport;
use App\Exports\MemberCodeExport;
use Maatwebsite\Excel\Facades\Excel;



class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function UnapproveMembers(){
         $unapprove_members = Registration::where('approval_status', '0')->get();
        return view('BackEnd.unapprove_members', compact('unapprove_members'));
    }

    public function ApproveMembers(){
         $approve_members = Registration::where('approval_status', '1')->where('invitation_code','0')->get();
        return view('BackEnd.approve_members', compact('approve_members'));
    }

    public function ApproveMembersWithCode(){
        $approve_members = Registration::where('invitation_code', '!=', '0')->orderBy('last_code','asc')->get();
        return view('BackEnd.approvemembers_withinvitationcode', compact('approve_members'));
    }


    public function EditMember(Request $request, $id){
        $editable_member = Registration::findOrFail($id);
        return view('BackEnd.edit_member', compact('editable_member'));
    }

    public function UpdateMember(Request $request){
        $id = $request->id;
        $old_data = Registration::findOrFail($id);
        $updateable_member = $request->all();
        $updateable_member['driver'] = $request->driver;
       
        $success = $old_data->fill($updateable_member)->save();
        if ($success) {
            return back()->with('message','Member Update Successfully');
        }
    
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function export_unapprove_member() 
    {
        return (new MemberExport)->setStatus(0)->download('Unapprove_members.xlsx');
    }

    public function export_approve_member() 
    {
        return (new MemberExport)->setStatus(1)->download('Approve_members.xlsx');
    }

    public function export_member_code() 
    {
        return (new MemberCodeExport)->setCode(1)->download('members_with_code.xlsx');
    }
    
    public function export_batch_member($batch) 
    {
        return (new BatchExport)->setCode($batch)->download("members_batch({$batch}).xlsx");
    }
    
    
    // export_batch_member
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated_data = $request->validate([
            'full_name' => 'required',
            'mobile_number' => 'required|numeric|digits:11|unique:registrations',
            'department' => 'required',
            'passing_year' => 'required|numeric',
            'account_transaction_number' => 'required',
            'tshirt_size' => 'required|string',
            'payment_type' => 'required'          
        ]);

        $requested_data = $request->all();
        $data =  new Registration();
       
        $success = $data->fill($requested_data)->save();
        if($success) {
            return back()->with('message','Registration Completed Successfully');   
        }

    }

    public function  ViewMembers($id){
        $single_member = Registration::findOrFail($id);
       return view('BackEnd.single_member', compact('single_member'));
    }

    public function ApproveMember($id){
        $success = Registration::where('id', $id)->update(['approval_status' => '1']);
        
        if ($success) {
            return back()->with('message','Approve Successfully');
        }
    
    }
    
    public function UnapproveMember($id){
        $success = Registration::where('id', $id)->update(['approval_status' => '0']);
        
        if ($success) {
            return back()->with('message', 'Unapprove Successfully');
        }
    }
    
    
    public function GenInviteCode($id){
        $data = Registration::where('invitation_code','!=','0')->count();
        $batch_no = Registration::where('id', $id)->first()->passing_year;
        $invite_code = 1001;
        if($data == 0){
            $invite_code = $invite_code + $data;
        } else {
            $invite_code = $invite_code + $data;
        }
        return view('BackEnd.gen_invitecode',compact('id','invite_code','batch_no'));
    }

    public function MakeInviteCode(Request $request, $id){
        $data = $request->invitation_code;
        $last_code = $request->last_code;
        $success = Registration::where('id', $id)->update(['invitation_code' => $data,'last_code' => $last_code,'code_reference' =>1]);
        if ($success) {
            return redirect()->route('approve.members')->with('message','Invitation Code Generated Successfully');
        }
    
    }
    
    // 174180263511826401730584626
    
    public function send_invitation(Request $request){
        // echo $request->member_id;
        $url = 'https://www.24bulksmsbd.com/api/smsSendApi';
        $message = $request->message;
        $mobile_no = $request->mobile_no;
        $data = array(
        	'customer_id' => 196,
        	'api_key' => 174180263511826401730584626,
        	'message' =>$message,
        	'mobile_no' => $mobile_no
        );
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);     
        $output = curl_exec($curl);
        curl_close($curl);
        
        if ($output == '{"status":"ok","message":"Successfull"}') {
            $member_id = $request->member_id;
            Registration::where('id', $member_id)->update(['sms_status' => 1]);
            
            return redirect()->back()->with('message','Invitation Sent Successfully');
        }
        
        else {
            echo 'An Error Occurred';
        }
    }
    
    public function invite_other_member(){
        return view('BackEnd.invite_other_member');
    }
    
    public function DeleteMember($id){
        $delete_data = Registration::find($id);
        $success = $delete_data->delete();
        
        if($success){
            $notification = array(
                'message' => 'Member Delete Successfully',
                'alert' => 'Success'
        );
        }
        return redirect()->back()->with('message','Member Deleted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}