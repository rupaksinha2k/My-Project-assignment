<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 


class admission extends Controller
{

    // dash board data 

    public function index()
    {
        return view('welcome');
    }

   /*
    public function check(Request $request)
    {  
        $user = $request->name;
        $phone  = $request->phone;
 
        if (auth()->attempt(array('name' => $user, 'phone' => $phone)))
        {
         return view('/welcome');

        }
        else
         {  
             session()->flash('error', 'Invalid Credentials');
             return redirect()->route('student.login');
         }  
    }
 
 
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('student.login');
    }    */
//data base connection 
    public function adm_detail(){

       $data=DB::table('students')->get();
        //return view('add',['students'=> $data]);
        return view('All',compact('data'));

    }

    public function adm_form()
    {

        return view('new_admission');
    }
// inserting new student data

    public function adm_insert(Request $req)
    {
     DB::table('students')->insert([
        'name'=>$req->name ,
        'phone'=>$req->phone,
        'email'=>$req->email,

     ]);

     return back()->with('message','Data added successfully');
    }
// getting indivisual data student wise
    public function stu_detail($id){

    $data = DB::table('students')->where('id',$id)->first();
    return view('adm_detail',compact('data'));
    }
// for data visible in form
    public function stu_edit($id)
        {        
         $data=DB::table('students')->where('id',$id)->first();
         return view('stu_update',compact('data'));
        }

        // for updating student data
        
        public function student_update(Request $request ,$dt){
         
            //return $dt;
        DB::table('students')->where('id',$dt)->update([
             'name'=>$request->name,
             'phone'=>$request->phone,
             'email'=>$request->email, ]);
            return redirect('/All')->with('message','Updated');
            
        }

        public function stu_delete($id){
            DB::table('students')->where('id',$id)->delete();
            return redirect('/All')->with('message','deleted');

        }


}