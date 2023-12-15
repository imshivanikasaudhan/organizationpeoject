<?php

namespace App\Http\Controllers;

use App\Models\add_employee;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{   
    public function RegisterView(){
        return view('register');
    }

    public function RegisterStore(Request $request){   
        // dd($request->all());
        //validate
        $user = new User;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);        
        $user->save();
        return redirect('/login')->with('Username Aready Exist');
    }

    //login
    public function loginView(){
        return view('login');
    }

    public function loginStore(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect('/add');
        }
        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ]);
    }

    // protected function validateLogin(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|string|min:8',
    //     ]);
    // }

    public function adddata (){
        return view('addEmployee');
    }

    public function addStore(Request $request){   
        // dd($request->all());
        //validate
       
    }

    public function store(){   
        return view('addEmployee');
    }

    public function storedata(Request $request)
    {   
       
        $userContact = new Add_employee();
        $userContact->fname = $request->fname;
        $userContact->lname = $request->lname;
        $userContact->phone = $request->number ;
        $userContact->email = $request->email ;
        // $userContact->message = $request->Contact_Message;                 
        $userContact->save();
        

        //Upload Image Here
        if ($request->image) {
            $oldImage = $userContact->image;
            $text = $request->image->getClientOriginalExtension();
            $newFileName = time() . '.' . $text;
            $request->image->move(public_path() . '/image/profile/', $newFileName); //This will save file in the folder

            $userContact->image = $newFileName;
            $userContact->save();

            File::delete(public_path() . '/image/profile/' . $oldImage);
        }
        return back()->with('message', 'Data Added Successfully');

        // return redirect('add')->with('message', 'Data Added Successfully');
        // return redirect('add')->with('success', 'Email or Password Incorrect');
        // return redirect('add')->with('success','hjjj');
        // return view('add', compact('addEmployee'));
    }
    public function viewdata(){
        $viewdata = Add_employee::all();
        return view('add', compact('viewdata'));
        // $user = Auth::user();
        // if ($user == null) {
        //     return redirect('/');
        // }
        // // $statusDeal = $user->statusDeal;
        // $viewdata = $user->viewdata();
        // // return view('/deal-status', compact('statusDeal'));
        // return view('add', compact('viewdata'));
    }
    public function show($id)
        {
            $user = Add_employee::findOrFail($id);
            return view('customerprofile', compact('user'));
        }




    public function showUpdate(User $user, Request $request)
    {
        // dd($request->all());
        // Validation fields
        $validator = Validator::make($request->all(), [
            'fname' => 'nullable',
            'lname' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable',
            // 'image' => 'sometimes|image:gif,png,jpeg,jpg'
        ]);
        if ($validator->passes()) {
            //NOTE:- 'user_id' field is coming from user profile form from input field.
            $user = Add_employee::find($request->user_id);
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->phone = $request->phone;
            $user->email = $request->email;
            // $user->image = $request->image;
            $user->save();
            //Upload Image Here
            // if ($request->image) {
            //     $oldImage = $user->image;
            //     $text = $request->image->getClientOriginalExtension();
            //     $newFileName = time() . '.' . $text;
            //     $request->image->move(public_path() . '/backend/assets/images/profile/', $newFileName); //This will save file in the folder
            //     $user->image = $newFileName;
            //     $user->save();
            //     File::delete(public_path() . '/backend/assets/images/profile/' . $oldImage);
            // }
            // return redirect()->route('customerprofile')->with('success', 'Profile Updated Successfully.');
            return back()->with('success', 'Data Updated Successfully');
        } else {
            //return with errors
            // return redirect()->route('user-profile');
            return back()->with('message', 'Data Added Successfully');
            // return redirect()->route('add')->withErrors($validator)->withInput();
        }
        // dd($request->all());
    }







        
} 


    

  