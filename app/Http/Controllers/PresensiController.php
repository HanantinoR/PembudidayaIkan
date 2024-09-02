<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class PresensiController extends Controller
{
    public function index()
    {
        $data = [
            'titleParent' => 'Presensi Kehadiran',
            'titlePage' => 'Presensi Kehadiran'
        ];

        return view('presensi.index',compact('data'));
    }

    public function saveAbsen(Request $req)
    {
        $validation = $req->validate([
            "nik" => "required",
            "nama" => "required"
        ],[
            "nik" => "Kolom NIK Harus Diisi",
            "nama" => "Kolom Nama harus Diisi"
        ]);


        $waktu = date("YmdHis");
        $nama = $req->nama;
        $nik = $req->nik;
        $lokasi = $req->lokasi;
        $reqImage = $req->image;
        $image = explode(",",$reqImage);
        $arrImage= $image[1];
        $images = base64_decode($arrImage);
        $path = "uploads/absensi/";
        $file = $nama."-".$nik."-".$waktu.".png";
        $fileName =$path.$nama."-".$nik."-".$waktu.".png";
        Storage::disk('public')->put($fileName,$images);

        $presensi = DB::table('presensi')->insert([
            'nama_user_input' => $nama,
            'nik_user_input' => $nik,
            'foto_in' => $file,
            'location_in' => $lokasi,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => Auth::user()->nama
        ]);

        return response()->json([
            'message' => 'data sudah berhasil disimpan'
        ],200);


    }

}
