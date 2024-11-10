<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function adminTampil(){
        return view("admin/admin");
    }

    public function regMin(){
        return view("auth/regAdmin");
    }

    public function regAdmin(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if ($user) {
            $user->assignRole('admin');
            $role = 'admin';
            $user->save();  
        }    
        return redirect()->route('logAdmin.tampil');
    }

    public function logAdmin(Request $request){
        $data = $request->only('email', 'password');
        
        if (Auth::attempt($data)) {
            $user = Auth::User();
            if($user->hasRole('admin')){
                return view('admin/admin');
            }            
        }else{
            return redirect()->back()->with('gagal', "Email atau Password salah");
        }
    }

    public function TampilAdmin(){
        return view('auth/loginAdmin');
    }


    public function tampilUser(){
        $user = User::get();

        // Kirim data pengguna ke view
        return view('admin/user', compact('user'));
    }


    public function tampilRs(){
        return view(view: "admin/rums");
    }

}
