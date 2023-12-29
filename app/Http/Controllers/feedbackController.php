<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedback;

class feedbackController extends Controller
{
    public function index(){
        
       
        return view('HomePage.contactus');
    }

    public function feedbackstore(Request $req) {

         $req->validate([
            'name' => 'required',
            'mail' => 'required',
            'msg' => 'required'
            
        ], [
            'name.required' => 'Name field is required.',
            'mail.required' => 'Bus Number field is required.',
            'msg.required' => 'Route Permite Number field is required.',
           
        ]);
     
        $msg = new feedback;
        $msg->name = $req->name;
        $msg->email = $req->mail;
        $msg->feedback = $req->msg;
       
        $msg->save();
      
        return view('HomePage.contactus');
    }

    public function showmessage(){
      
        $msg = new feedback;
        $msgs=  $msg->get();
      
        return view('AdminDashboard.viewfeedback',compact('msgs'));
    }
    
}
