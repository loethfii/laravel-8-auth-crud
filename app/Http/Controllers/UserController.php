<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\mahasiswa;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $mahasiswas = mahasiswa::all();
        return view('user.home', compact('user'))
        ->with('mahasiswas', $mahasiswas );
    }

    public function show($id)
    {
        // $mahasiswa = mahasiswa::find($id);
        // return view('admin.show')->with('mahasiswas', $mahasiswa);

        // return view('admin.show', [
        //     'mahasiswas' => mahasiswa::findOrFail($id)
        // ]);

        $data = \DB::table('mahasiswas')
            ->where ('id', $id )
            ->first();

        return view ('user.show', ['data'=>$data]);
    }

    public function print($id)
    {
        // return view ('admin.print');

        $data = \DB::table('mahasiswas')
        ->where ('id', $id )
        ->first();
        return view ('user.print', ['data'=>$data]);

        // $mahasiswa = mahasiswa::find($id);
        // return view('admin.print')->with('mahasiswas', $mahasiswa);
    }
    
}