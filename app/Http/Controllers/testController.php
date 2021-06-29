<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
//     function Message(){
// echo 'welcome';
//     }

// function Message(){
//     return view('register');
//         }
function Register(){
        return view('register');
         }
            function HandelForm(Request $request){
// echo 'submit from form';
// echo $request->password;
// echo $request->input('name');
// echo $request->all();
// echo $request->has('name_age'); 
// echo 'name';
// $data = $request->only(['name','email']);
// $data = $request->except(['_token','name']);
// dd($data);
//echo $request->method();
// dd($request->isMethod("get"));
// $request->ip();
// echo $request->path();
// echo $request->url();
// echo $request->fullUrl();


    }
    
function studentdata(){
    // return view('studentData');

    
   // return view('studentData',['name' => 'Ahmed','age' =>25 ,'level'=> 3]);
// $studentData = ['name' => 'Ahmed','age' =>25 ,'level'=> 3];
//     return view('studentData')->with('data',$studentData);


// $data = ['name' => 'Ahmed','age' =>25 ,'level'=> 3];
// $city ='cairo';
// $country = 'Egypt';
//     return view('studentData',compact('data','city','country'));


//   return view('studentData',['id' => '2','age' =>25 ,'level'=> 3]);

        }
        // function filterUrl(Request $request){
        //     if($request->method() == 'get'){
        //         echo $request->url();
        //     }else{
        //         echo ' invalid';
        //     }
           
        // }
        // function doRegister(Request $request){

        //     // Logic ..
    
    
        //     $data =   $this->validate(request(),[
        //           'name'     => 'required|min:3',
        //           'email'    => 'required|email',
        //           'password' => 'required|min:6',
    
        //         ]);}


                
    function display(){

        $data =  student::get();
 
       return view("displayStudent",['data' => $data]);
 
     }
 
 
 
//      function Register(){
//        return view('register');
//    }
 
 
 
     function doRegister(Request $request){
 
         // Logic ..
 
 
         $data =   $this->validate(request(),[
               'name'     => 'required|min:3',
               'email'    => 'required|email',
               'password' => 'required|min:6',
 
             ]);
 
      
             
     $data['password'] = bcrypt($data['password']);       
 
      $op =  student::create($data);
    if($op){
 session()->put('message','Registeration Done');
     return back();
 
    }else{
    
     echo 'error try again';
 
    }
 
         
     }
 
 
 
    function delete($id){
 
     // Logic 
    $op = student::where('id',$id)->delete();
 
     if($op){
       return back();
     }else{
 
       echo 'error in delete';
     }
 
    }
 
 
 
 
      function show($id){
        // logic
       
       // student::select('id','name','email')->where('id',$id)->get();
      // $data = student::select('id','name','email')->where('id',$id)->get();
       
      $data = student::find($id)->toArray();
       
        return view("edit",['data'=>$data]);
      }
 
 
 
 
     function update(Request $request){
 
 
       $data =   $this->validate(request(),[
         'name'     => 'required|min:3',
         'email'    => 'required|email',
       ]);
 
     // ['name' => $request->name , 'email' => $request->email]
         $op = student::where('id',$request->id)->update($data);
 
 
 
 
         if($op){
         
            
           return redirect(url('/display'));
 
            
         }else{
           echo 'error in update';
         }
 
 
 
     }
 
 
 
 
 
 
 
 
 }
 
