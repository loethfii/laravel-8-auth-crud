<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $mahasiswas = mahasiswa::all();
        return view('admin.home', compact('user'))
        ->with('mahasiswas', $mahasiswas );
    } 

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        mahasiswa::create($input);
        return redirect('admin')->with('flash_message', 'Contact Addedd!'); ; 
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

        return view ('admin.show', ['data'=>$data]);
    }

    public function edit($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return view('admin.edit')->with('mahasiswas', $mahasiswa);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = mahasiswa::find($id);
        $input = $request->all();
        $mahasiswa->update($input);
        return redirect('admin')->with('flash_message', 'Contact Updated!');   

        // $contact = Contact::find($id);
        // $input = $request->all();
        // $contact->update($input);
        // return redirect('contact')->with('flash_message', 'Contact Updated!'); 
    }

    public function destroy($id)
    {
        mahasiswa::destroy($id);
        return redirect('admin')->with('flash_message', 'Contact deleted!');  
    }

    public function print($id)
    {
        // return view ('admin.print');

        $data = \DB::table('mahasiswas')
        ->where ('id', $id )
        ->first();
        return view ('admin.print', ['data'=>$data]);

        // $mahasiswa = mahasiswa::find($id);
        // return view('admin.print')->with('mahasiswas', $mahasiswa);
    }
}