<?php

namespace App\Http\Controllers;

use App\Info;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class InfoController extends Controller
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

    public function master()
    {
        return view('master3');
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

        $validateData = $request->validate([
            'NameInEnglish' => 'required',
            'FathersName' => 'required',
            'DOB' => 'required',
            'HomeDistrict' => 'required',
            'PresentAddress' => 'required',
            'CellNumber' => 'required',
            'Religion' => 'required',
            'Gender' => 'required',
            'Institution' => 'required',
            'BatchOrPassingYear' => 'required',
            'Department' => 'required',
        ]);

        $requested_data = $request->all();
        $upload_path = 'public/Admin_Panel/images/';
        $upload_path_cv = 'public/Admin_Panel/cv/';
        $upload_path_vc = 'public/Admin_Panel/vc/';

        if ($request->file('Image')) {
            $image = time() . '.' . $request->file('Image')->getClientOriginalExtension();
            $image_url = $upload_path . $image;
            $request->file('Image')->move($upload_path, $image);
            $requested_data['Image'] = $image_url;
        }

        if ($request->file('CV')) {
            $pdf_file = time() . '.' . $request->file('CV')->getClientOriginalExtension();
            $pdf_url = $upload_path_cv . $pdf_file;
            $request->file('CV')->move($upload_path_cv, $pdf_file);
            $requested_data['CV'] = $pdf_url;
        }

        if ($request->file('VisitingCard')) {
            $img_file = time() . '.' . $request->file('VisitingCard')->getClientOriginalExtension();
            $img_url = $upload_path_vc . $img_file;
            $request->file('VisitingCard')->move($upload_path_vc, $img_file);
            $requested_data['VisitingCard'] = $img_url;
        }




        $data = new Info();
        $success = $data->fill($requested_data)->save();
        if ($success) {
            $notification = array(
                'message' => 'Successfully Data Inserted',
                'alert' => 'Success'
            );
        }
        return back()->with($notification);

    }

    public function AllMembers(){
        $all_members = Info::all();
        return view('BackEnd.all_members', compact('all_members'));
    }

    public function AllUnverifiedMembers(){
        $all_unvermembers = Info::where('Verified',0)->get();

        return view('BackEnd.all_unvermembers', compact('all_unvermembers'));
    }

    public  function  VerifyMembers($id){
        
         return view('BackEnd.verify_member', compact('id'));
        
        
        
    //   $success = Info::where('id', $id)->update(['Verified' => 1]);
    //     if ($success) {
    //         $notification = array(
    //             'message' => 'Successfully Data Verified',
    //             'alert' => 'Success'
    //         );
    //     }
    //     return back()->with($notification);
        
        
    }
    
    public function ToVerify(Request $request){
        $id =  $request->member_id;
        $Transaction_id = $request->BkashTransactionId;
        $success = Info::where('id', $id)->update(['BkashTransactionId' => $Transaction_id,'Verified' => 1,'transactionDate' => date('Y-m-d h:i:s')]);
        if ($success) {
            $notification = array(
                'message' => 'Successfully Data Verified',
                'alert' => 'Success'
            );
        }
        return back()->with($notification);
    }
    
    public function  ViewMembers($id){
        $single_member = Info::findOrFail($id);
       return view('BackEnd.single_member', compact('single_member'));
    }

    public function AllVerifiedMembers(){
        $all_vermembers = Info::where('Verified',1)->get();

        return view('BackEnd.all_vermembers', compact('all_vermembers'));
    }

    public function AllGenSecPendingMembers(){
        $all_gensecexpenmembers = Info::where('GenSecExcCommitteeApp',0)->get();
        return view('BackEnd.all_gensecexpenmembers', compact('all_gensecexpenmembers'));
    }

    public function AllPresCenPendingMembers(){
        $all_prescentpenmembers = Info::where('PresCenExcCommitteeApp',0)->get();
        return view('BackEnd.all_prescentpenmembers', compact('all_prescentpenmembers'));
    }

    public function SignGenSecPendingMembers($id){
        
         return view('BackEnd.signgen_member', compact('id'));
        
        
        // $success = Info::where('id', $id)->update(['GenSecExcCommitteeApp' => 1]);
        // if ($success) {
        //     $notification = array(
        //         'message' => 'Successfully Data Verified',
        //         'alert' => 'Success'
        //     );
        // }
        // return back()->with($notification);
    }
    
    public function Tosigngemem(Request $request){
        $id =  $request->member_id;
        $fpiaa_membership_no = $request->fpiaa_membership_no;
        $success = Info::where('id', $id)->update(['fpiaa_membership_no' => $fpiaa_membership_no,'GenSecExcCommitteeApp' => 1]);
        if ($success) {
            $notification = array(
                'message' => 'Successfully Data Verified',
                'alert' => 'Success'
            );
        }
        return back()->with($notification);
    }

    public function SignPresCenPenMembers($id){
        $success = Info::where('id', $id)->update(['PresCenExcCommitteeApp' => 1]);
        if ($success) {
            $notification = array(
                'message' => 'Successfully Data Verified',
                'alert' => 'Success'
            );
        }
        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        //
    }
}
