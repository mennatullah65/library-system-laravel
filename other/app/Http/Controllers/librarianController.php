<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\librarian; 
use App\book; 

use Auth;
use Validator;
class librarianController extends Controller
{
    public function logout(Request $req){
        $req->session()->forget('email');
        return view('public_page');

    }
    public function login(Request $req){
        $this->validate($req,[
            's_email'=>'required',
            's_password'=>'required',
        ]);
        $userdata=array(
        'librarianEmail'=>$req->input('s_email'),
        'librarianPassword'=>$req->input('s_password')
        );
        
        $value_e=$req->input('s_email');
        $so=librarian::where('librarianEmail',$value_e)->get();
        if(count($so)>0){
            $req->session()->put('email',$req->input('s_email'));
            $so=librarian::where('librarianEmail',$value_e)->get();
            return view('setting')->with('data',$so);
        }
        
        /*
        if(Auth::guard('librarians')->attempt($userdata)){
            $req->session()->put('email',$req->input('s_email'));
            $so=librarian::where('librarianEmail',$value_e)->get();
            return view('setting')->with('data',$so);
        }
        else{
            echo '<script>alert("no user signed up with this data");</script>';
            return back()->with('error','wrong login details');
        }
        */
        //return redirect('setting');
        //return "menna";
    }
    public function login1(Request $req){
        $this->validate($req,[
            's_email'=>'required',
            's_password'=>'required',
        ]);
        $userdata=librarian::where([
        ['librarianEmail','=',$req->input('s_email')],
        ['librarianPassword','=',$req->input('s_password')],
        ])->get();
        //if(count($userdata)>0){
            $req->session()->put('email',$req->input('s_email'));
            return view('setting')->with('data',$userdata);
        //}else{
        //    echo '<script>alert("No user with this data");</script>';
        //    return view('login');
        //}
    }
    public function get_librarian(Request $req){
        $value=$req->session()->get('email');
        $so=librarian::where('librarianEmail',$value)->get();
        $so1=book::where('librarianEmail',$value)->get();
        $dataview=[
            'data'=>$so,
            'books'=>$so1
        ];
        return view('profile')->with($dataview);
        //return view('/setting', compact('so'));
    }
    public function get_librariandata(Request $req){
        $value=$req->session()->get('email');
        $so=librarian::where('librarianEmail',$value)->get();
        $dataview=[
            'data'=>$so,
        ];
        return view('editprofile')->with($dataview);
        //return view('/setting', compact('so'));
    }
    public function edit_librarian(Request $req){
        $this->validate($req,[
            's_name'=>'required',
            's_phone'=>'required',
            's_email'=>'required',
            's_address'=>'required',
            's_password'=>'required',
            's_name'=>'required',
            's_gender'=>'required'
        ]);
        $email=$req->session()->get('email');
         //echo '<script>alert("'.$req->input('s_photo').'");</script>';
         //dd($req->input('s_photo'));
        $image=$req->file('s_photo');
        /*if($req->file('s_photo')==""||$req->file('s_photo')==null){
            $image="storage\app\public\uploads\download.png";
            $filename=basename($image);
        }else{
            $filename = time().'.'.$image->getClientOriginalExtension();
        }*/
        if($req->file('s_photo')==""||$req->file('s_photo')==null){
            $update=librarian::where('librarianEmail',$email)->update(
                [
                    'librarianName'=>$req->input('s_name'),
                    'librarianGender'=>$req->input('s_gender'),
                    'librarianEmail'=>$req->input('s_phone'),
                    'librarianAddress'=>$req->input('s_address'),
                    'librarianEmail'=>$req->input('s_email'),
                    'librarianPassword'=>$req->input('s_password'),
                ]
            );
        }else{
            $filename = time().'.'.$image->getClientOriginalExtension();
            $destinationpath='storage\uploads';//public_path().'/photos' //public_path('/photos')
            $url=$image->move($destinationpath, $filename);
            //dd($url);
            $update=librarian::where('librarianEmail',$email)->update(
                [
                    'librarianName'=>$req->input('s_name'),
                    'librarianGender'=>$req->input('s_gender'),
                    'librarianEmail'=>$req->input('s_phone'),
                    'librarianAddress'=>$req->input('s_address'),
                    'librarianEmail'=>$req->input('s_email'),
                    'librarianPassword'=>$req->input('s_password'),
                    'librarianPhoto'=>$url
                ]
            );
        }
        
        
        //echo'<script>alert("'.$value.'");</script>';
        $so=librarian::where('librarianEmail',$email)->get();
        $so1=book::where('librarianEmail',$email)->get();
        $dataview=[
            'data'=>$so,
            'books'=>$so1
        ];
        return view('profile')->with($dataview);
        //return view('/setting', compact('so'));
    }
    public function signup(Request $req){
        $this->validate($req,[
            's_name'=>'required',
            's_phone'=>'required',
            's_email'=>'required',
            's_address'=>'required',
            's_password'=>'required',
            's_name'=>'required',
            's_gender'=>'required'
        ]);
        /*$userdata=librarian::where(
            'librarianEmail','=',$req->input('s_email')
           )->get();
           */
        $userdata=librarian::where('librarianEmail',$req->input('s_email'))->get();
        if($userdata!=null){
            //dd($userdata);
            //echo'<script>alert("User with this email already signed in");</script>';
            $email='repeated';
            return redirect('signup/'.$email);
        }else{
        $image=$req->file('s_photo');
        /*if($req->file('s_photo')==""){
            $image="storage\app\public\uploads\download.png";
        }*/
        $filename = time().'.'.$image->getClientOriginalExtension();
        $destinationpath='storage\uploads';
        $url=$image->move($destinationpath, $filename);
        $s=new librarian;
        $s->librarianName=$req->input('s_name');
        $s->librarianPhone=$req->input('s_phone');
        $s->librarianAddress=$req->input('s_address');
        $s->librarianEmail=$req->input('s_email');
        $s->librarianPassword=$req->input('s_password');
        $s->librarianGender=$req->input('s_gender');
        //$s->librarianPhoto=$req->file('s_photo')->store('uploads','public');
        $s->librarianPhoto=$url;
        $s->save();
        $req->session()->put('email',$req->input('s_email'));
        return redirect('setting');
        }
        //return "menna";
    }
    public function get_all_supplier(){
        $data=librarian::all();
        return view('setting')->with('data',$data);
        //return view('/setting', compact('data'));
    } 
    public function get_librarianToSetting(Request $req){
        $value=$req->session()->get('email');
        $so=librarian::where('librarianEmail',$value)->get();
        return view('setting')->with('data',$so);
        //return view('/setting', compact('so'));

    }
    public function welcomeSession(Request $req){
        $value=$req->session()->get('email');
        $so=librarian::where('librarianEmail',$value)->get();
        return view('addbooks')->with('data',$so);
        //return view('/setting', compact('so'));
    }
}
