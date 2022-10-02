<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Registration;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $top_data = Registration::select('passing_year')
         ->where('approval_status', 1)
     ->selectRaw('COUNT(*) AS count')
     ->groupBy('passing_year')
     ->orderByDesc('count')
     ->limit(10)
     ->get();
    
        
        $total_registration = Registration::all()->count();
        $total_unapprove = Registration::where('approval_status', 0)->count();
        $total_approve = Registration::where('approval_status', 1)->count();
        $approve_invite = Registration::where('approval_status', 1)->where('invitation_code' ,'!=','0')->count();
        $num_of_registration = array();
        
        for($i = 1966; $i <= 2022; $i++){
            $reg_num = Registration::where('passing_year', $i)->where('approval_status', 1)->count();
            $num_of_registration[$i] = $reg_num;
        }
        
        return view('home', compact('total_registration','num_of_registration','total_unapprove','total_approve','approve_invite','top_data'));
    }
}
