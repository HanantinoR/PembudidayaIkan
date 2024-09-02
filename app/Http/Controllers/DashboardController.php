<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;


class DashboardController extends Controller
{
    public function index()
    {
        $nama = Auth::user();
        $data = [
            'titlePage' => 'DASHBOARD'
        ];

        // dd(Auth::user());
        return view('dashboard', compact('nama','data'));
    }

    function getDataDashboard()
    {
        $nama = Auth::user()->nama;
        if (Auth::user()->role == "Admin") {
            $list_foto = DB::table('presensi')->select('id','nama_user_input','nik_user_input','foto_in','location_in','created_at','created_by')->orderBy('created_at','DESC')->get();
        }else{
            $list_foto = DB::table('presensi')->select('id','nama_user_input','nik_user_input','foto_in','location_in','created_at','created_by')->where('created_by','=',$nama)->orderBy('created_at','DESC')->get();
        }
        return DataTables::of($list_foto)
        ->addColumn('aksi', function($datatb){
            if (Auth::user()->role == "Admin") {
                return
                    '<button type="button" class="btn btn-danger" onclick="deleteDataDashboard('.$datatb->id.')">Hapus Data!</button>';
            }else{
                return
                '';
            }
        })
        ->addColumn('foto', function($datatb){
            return
            '<img src="'.url(Storage::url("/uploads/absensi/".$datatb->foto_in)).'" alt="" class="imaged w64 " style="max-width:100px">';
        })
        ->rawColumns(['foto','aksi'])
        ->addIndexColumn()
        ->make(true);
    }

    function deleteDashboard(){
        $id = $_POST['id'];
        DB::table('presensi')->where('id','=',$id)->delete();
        return 0;
    }
}
