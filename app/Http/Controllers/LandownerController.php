<?php

namespace App\Http\Controllers;
use App\Models\Landowner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandownerController extends Controller
{
    //
    public function register()
    {
    return view('Landowner.register');
    }
      function store(Request $request)
      
      {
        $Landowner =new Landowner();
        $Landowner->fname = $request->fname;
        $Landowner->lname = $request->lname;
        $Landowner->gender = $request->gender;
        $Landowner->city = $request->city;
        $Landowner->kebele = $request->kebele;
        $Landowner->occupation = $request->occupation;
        $Landowner->Rdate = $request->Rdate;
        $Landowner->serviceType = $request->serviceType;
        $Landowner->southbondery = $request->southbondery;
        $Landowner->eastbondery = $request->eastbondery;
        $Landowner->northbondery = $request->northbondery;
        $Landowner->westbondery = $request->westbondery;
        $Landowner->area = $request->area;
        $Landowner->parcelcode = $request->parcelcode;
        $Landowner->landlavel = $request->landlavel;
       $is_saved = $Landowner->save();
      if($is_saved){
      echo " LANDOWNER INFORMATION IS SAVED SUCCESSFULLY.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
         
      }
      public function get_all()
{
 $Landowner = Landowner::all();
 return view('Landowner.get_all', compact('Landowner'));
}
public function edit($id)
 {
 $Landowner = Landowner::find($id);
 return view('Landowner.edit', compact('Landowner'));
 }
 public function update(Request $request)
 {
 //Validate
 $request->validate(['fname' => 'required' ]);
  $Landowner = Landowner::find($request->id);
  $Landowner->fname = $request->fname;
  $Landowner->lname = $request->lname;
  $Landowner->gender = $request->gender;
  $Landowner->city = $request->city;
  $Landowner->kebele = $request->kebele;
  $Landowner->occupation = $request->occupation;
  $Landowner->Rdate = $request->Rdate;
  $Landowner->serviceType = $request->serviceType;
  $Landowner->southbondery = $request->southbondery;
  $Landowner->eastbondery = $request->eastbondery;
  $Landowner->northbondery = $request->northbondery;
  $Landowner->westbondery = $request->westbondery;
  $Landowner->area = $request->area;
  $Landowner->parcelcode = $request->parcelcode;
  $Landowner->landlavel = $request->landlavel;
  $Landowner->save();
  return redirect('Landowner/get_all');
  }
  public function delete($id)
 {
 Landowner::where('id', $id)->delete();
 return redirect('Landowner/get_all');
 }

 public function get_by_id($id)
 {
  $Landowner = Landowner::where('id', $id)->first();
  return view('Landowner.search', compact('Landowner'));
  }
}