<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class VerifikasiPenggunaController extends Controller
{
    public function index()
    {
        $data = [
            "user" => User::where("id_role", 2)->get()
        ];
        return view('admin.verifikasi.pengguna', $data);
    }

    public function show($id)
    {
        $data = [
            "detail" => User::where("id", $id)->first()
        ];

        return view("admin.pengguna.detail", $data);
    }

    public function store(Request $request)
    {
        User::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "password" => bcrypt("password"),
            "created_by" => Auth::user()->id,
            "alamat" => $request->alamat,
            "desa" => $request->desa,
            "kecamatan" => $request->kecamatan,
            "kota_kab" => $request->kota_kab,
            "id_provinsi" => $request->id_provinsi,
            "no_telp" => $request->no_telp,
            "id_role" => 2
        ]);

        return redirect("/admin/verifikasi");
    }

    public function edit($id)
    {
        $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/34.json");

        $kota_kab = $response->json();

        $data = [
            "edit" => User::where("id", $id)->first()
        ];

        return view("admin.verifikasi.edit", compact('kota_kab'), $data);
    }

    public function update(Request $request, $id)
    {
        $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/34.json");

        $kota_kab = $response->json();

        foreach ($kota_kab as $d) {
            if ($d["id"] == $request->id_kota_kab) {
                $nama_kab = $d["name"];
                $id = $d["id"];
            }
        }

        $res_kelurahan = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/districts/".$id.".json");

        $kelurahan = $res_kelurahan->json();

        foreach ($kelurahan as $k) {
            if ($k["id"] == $request->id_kecamatan) {
                $kecamatan = $k["name"];
            } else {
                $kecamatan = $k["name"];
            }
        }

        User::where("id", $id)->update([
            "nama" => $request->nama,
            "email" => $request->email,
            "alamat" => $request->alamat,
            "kecamatan" => $kecamatan,
            "kota_kab" => $nama_kab,
            "kelurahan" => $request->id_kelurahan,
            "no_telp" => $request->no_telp,
        ]);


        return redirect("/admin/verifikasi");
    }

    public function aktifkan($id)
    {
        User::where("id", $id)->update([
            "status" => 1
        ]);

        return redirect("/admin/verifikasi/pengguna");
    }

}
