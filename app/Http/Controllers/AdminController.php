<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function adminTampil(){
        return view("admin/admin");
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
