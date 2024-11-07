<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubbloodModel;

class SubbloodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donor = SubbloodModel::all();

        return view("pages/Permohonan/donor", compact('donor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $subblood = new SubbloodModel();
        $subblood->nama_donor = $request->nama_donor;
        $subblood->tgl_lahir = $request->tgl_lahir;
        $subblood->jenis_kel = $request->jenis_kel;
        $subblood->alamat = $request->alamat;
        $subblood->blood_type = $request->blood_type;
        $subblood->rhesus = $request->rhesus;
        $subblood->weight = $request->weight;
        $subblood->fullname = $request->fullname;
        $subblood->umur = $request->umur;
        $subblood->no_telp = $request->no_telp;
        $subblood->email = $request->email;
        $subblood->save();
        return redirect()->back()->with('alert', 'Donor submitted successfully!');

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
        $subblood = SubbloodModel::find($id);
        $subblood->nama_donor = $request->nama_donor;
        $subblood->tgl_lahir = $request->tgl_lahir;
        $subblood->jenis_kel = $request->jenis_kel;
        $subblood->alamat = $request->alamat;
        $subblood->blood_type = $request->blood_type;
        $subblood->rhesus = $request->rhesus;
        $subblood->weight = $request->weight;
        $subblood->umur = $request->umur;
        $subblood->no_telp = $request->no_telp;
        $subblood->email = $request->email;
        if ($subblood->save()) {
            return ["status" => "Berhasil Memasukkan Data"];
        } else {
            return ["status" => "Tidak Berhasil Masuk Data"];
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subblood = SubbloodModel::find($id);
        if ($subblood) {
            $subblood->delete();
            return ["status" => "Berhasil Menghapus data"];
        } else {
            return ["status" => "Gagal Menghapus data"];
        }
    }
}
