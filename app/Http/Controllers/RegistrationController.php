<?php

namespace App\Http\Controllers;

use App\Model\Registration;
use Illuminate\Http\Request;

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

    public function ALlMembers(){
         $all_members = Registration::all();
        return view('BackEnd.all_members', compact('all_members'));
    }

    public function EditMember(Request $request, $id){
        $editable_member = Registration::findOrFail($id);
        return view('BackEnd.edit_member', compact('editable_member'));
    }

    public function UpdateMember(Request $request){
        $id = $request->id;
        $old_data = Registration::findOrFail($id);
        $updateable_member = $request->all();
       
        $success = $old_data->fill($updateable_member)->save();
        if ($success) {
            $notification = array(
                'message' => 'Successfully Member Updated',
                'alert' => 'Success'
            );
        }
    return back()->with($notification);
        
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
            'mobile_number' => 'required',
            'email' => 'required',
            'department' => 'required',
            'passing_year' => 'required',
            'tshirt_size' => 'required',
            'paytransaction_id' => 'required'
        ]);

        $requested_data = $request->all();
        $data =  new Registration();
       
        $success = $data->fill($requested_data)->save();
        if ($success) {
            $notification = array(
                'message' => 'Registration Completed Successfully',
                'alert' => 'Success'
            );
        }
    return back()->with($notification); 

    }

    public function  ViewMembers($id){
        $single_member = Registration::findOrFail($id);
       return view('BackEnd.single_member', compact('single_member'));
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
