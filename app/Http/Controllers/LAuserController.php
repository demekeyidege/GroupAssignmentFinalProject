<?php

namespace App\Http\Controllers;
use App\Models\LAuser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LAuserController extends Controller
{
    //
    public function register()
    {
    return view('LAuser.register');
    }
      function store(Request $request)
      
      {
        $LAuser =new LAuser();
        $LAuser->username = $request->username;
        $LAuser->password = $request->password;
        $LAuser->fname = $request->fname;
        $LAuser->lname = $request->lname;
        $LAuser->userType = $request->userType;
       $is_saved = $LAuser->save();
      if($is_saved){
      echo "User account is Created SUCCESSFULLY.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
         
      }
      public function get_all()
      {
       $LAuser = LAuser::all();
       return view('LAuser.get_all', compact('LAuser'));
      }
      public function get_by_id($id)
 {
  $LAuser = LAuser::where('id', $id)->first();
  return view('LAuser.search', compact('LAuser'));
  }
      
}
