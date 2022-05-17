<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LAuserController extends Controller
{
    //
    public function register()
    {
    return view('Users.register');
    }
      function store(Request $request)
      
      {
        $Users =new Users();
        $Users->username = $request->username;
        $Users->password = $request->password;
        $Users->fname = $request->fname;
        $Users->lname = $request->lname;
        $Users->userType = $request->fname;
       $is_saved = $Users->save();
      if($is_saved){
      echo "User account is Created SUCCESSFULLY.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
         
      }
}
