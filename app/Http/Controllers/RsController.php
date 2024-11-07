<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RsModel;

class RsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rs = RsModel::all();

        return view("pages/cekstock/rumahsakit", compact('rs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $rs = new RsModel();
        $rs->nama_rs = $request->nama_rs;
        $rs->alamat = $request->alamat;
        $rs->stok_blood = $request->stok_blood;
        $rs->gambar_rs = $request->gambar_rs;
        $rs->save();

        return redirect()->route('rs.tampil');
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
        $rs = RsModel::find($id);
        $rs->nama_rs = $request->nama_rs;
        $rs->alamat = $request->alamat;
        $rs->stok_blood = $request->stok_blood;
        $rs->gambar_rs = $request->gambar_rs;
        if ($rs->save()) {
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
        $rs = RsModel::find($id);
        if ($rs) {
            $rs->delete();
            return ["status" => "Berhasil Menghapus data"];
        } else {
            return ["status" => "Gagal Menghapus data"];
        }
    }

    public function available()
    {
        return view("pages.cekstock.hermina");
    }

    public function search(Request $request)
    {
        $query = $request->input('nama_rs'); // Ambil input dari form

        // Lakukan pencarian di database dengan menggunakan RsModel
        $rs = RsModel::where('nama_rs', 'LIKE', '%' . $query . '%')->get();

        // Kembalikan hasil pencarian ke view yang sesuai
        return view('pages.cekstock.rumahsakit', compact('rs', 'query'));
    }

    public function isi()
    {
        $rs = RsModel::all(); // Mengambil semua data rumah sakit dari model RsModel

        return view("pages.cekstock.hermina", compact('rs')); // Mengirim data $rs ke view
    }
}
