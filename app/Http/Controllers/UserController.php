<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'titleParent'=> 'USER MANAGEMENT',
            'titlePage' => 'User Management'
        ];
        $users = User::all();
        return view('user.index', compact('users','data'));
    }

    public function getDataManagement()
    {
        $list_user = User::get();
        return DataTables::of($list_user)
        ->addColumn('aksi' , function($datatb){
            return
            '<button type="button" class="btn btn-danger" onclick="deletedata('.$datatb->id.')">
                <i class="fas fa-solid fa-trash"></i> Hapus User
            </button>
            <a type="button" class="btn btn-blur btn-icon align-items-center detailUser" data-id='.$datatb->id.' data-bs-toggle="modal" data-bs-target="#modal-form">
                <i class="fas fa-user-edit" aria-hidden="true"></i> Edit User
            </a>';
        })
        ->rawColumns(['aksi'])
        ->addIndexColumn()
        ->make(true);
    }

    public function getDataUser(Request $request)
    {
        $id = $request->id;
        $dataUser = User::find($id);

        return response()->json([
            'data'=> $dataUser
        ],200);
    }

    function deleteUser($id)
    {
        // $id = $_POST['id'];
        User::find($id)->delete();
        return 0;
    }

    public function updateUser(Request $request, $id)
    {
        $dataUpdate = [
            'daerah' => $request->daerah,
        ];

        if($request->password)
        {
            $pass = hash::make($request->password);
            $dataUpdate['password'] = $pass;
        }

        $user = User::find($id)->update($dataUpdate);
        return response()->json([
            'message' => "data berhasil dirubah"
        ],200);
    }

    public function addMember(Request $request)
    {
        $data = [
            'titleParent'=> 'USER MANAGEMENT',
            'titlePage' => 'Add Member'
        ];
        return view('user.add',compact('data'));
    }

    public function saveMember(Request $request)
    {

        $data = [
            'nama' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'daerah' => $request->cabang,//nanti diganti cabang
            'role' => $request->role
        ];
        $member = User::create($data);

        return response()->json([
            'message' => "data berhasil disimpan"
        ],200);
    }
}
