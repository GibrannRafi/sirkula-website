<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReqbloodModel;

class ReqbloodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $req = ReqbloodModel::all();

        return view("pages/Permohonan/permohonan", compact('req'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $reqblood = new ReqbloodModel();
        $reqblood->nama_pasien = $request->nama_pasien;
        $reqblood->nama_rs = $request->nama_rs;
        $reqblood->kota = $request->kota;
        $reqblood->alamat = $request->alamat;
        $reqblood->blood_type = $request->blood_type;
        $reqblood->donor_type = $request->donor_type;
        $reqblood->fullname = $request->fullname;
        $reqblood->no_telp = $request->no_telp;
        $reqblood->email = $request->email;
       $reqblood->save();
       return redirect()->back()->with('alert', 'Request submitted successfully!');

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reqblood = ReqbloodModel::find($id);
        $reqblood->nama_pasien = $request->nama_pasien;
        $reqblood->nama_rs = $request->nama_rs;
        $reqblood->kota = $request->kota;
        $reqblood->alamat = $request->alamat;
        $reqblood->blood_type = $request->blood_type;
        $reqblood->donor_type = $request->donor_type;
        $reqblood->fullname = $request->fullname;
        $reqblood->no_telp = $request->no_telp;
        $reqblood->email = $request->email;
        if ($reqblood->save()) {
            return ["status" => "Berhasil Update Data"];
        } else {
            return ["status" => "Gagal Update Data"];
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reqblood = ReqbloodModel::find($id);
        if ($reqblood) {
            $reqblood->delete();
            return ["status" => "Berhasil Menghapus data"];
        } else {
            return ["status" => "Gagal Menghapus data"];
        }
    }
}
