<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::get();

        return view("admin/user", compact('user'));
    }

     function tampilRegistrasi(){
        return view("auth/register");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function createUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        // dd  ($user);
        return redirect()->route('login.tampil');
    }

    function tampilLogin(){
        return view("auth/login");
    }

    function loginUser(Request $request){
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            // $request->session()->regenerate(); // coba komentar sementara
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('gagal', "Email atau Password salah");
        }
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login.tampil');
     }

    //  function tampilEdit(Request $request, $id){

    //     return view('user.edit', );
    //  }
    function edit(Request $request, $id){
        $user = User::find($id);

        return view('/admin/edit', compact('user'));
     }

     function delete(Request $request, $id){
        $user = User::find( $id );
        if ($user) {
            $user->delete();
            return redirect()->route('rumahsakit')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('rumahsakit')->with('error', 'Data tidak ditemukan');
        }
    }

    function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        // dd  ($user);
        return redirect()->route('user.tampil');
    }

 }
