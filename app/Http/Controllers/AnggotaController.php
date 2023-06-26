<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AnggotaModel;

use App\Models\ProdiModel;

class AnggotaController extends Controller
{
    //method untuk tampil data anggota
    public function anggotatampil()
    {
        $dataanggota = AnggotaModel::orderby('id_anggota', 'ASC')
        ->paginate(10);
        $dataprodi   = ProdiModel::all();


        return view('halaman/view_anggota',['anggota'=>$dataanggota, 'prodi'=>$dataprodi]);
    }

    //method untuk tambah data anggota
    public function anggotatambah(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama_anggota' => 'required',
            'id_prodi' => 'required',
            'hp' => 'required'
        ]);

        AnggotaModel::create([
            'nim' => $request->nim,
            'nama_anggota' => $request->nama_anggota,
            'id_prodi' => $request->id_prodi,
            'hp' => $request->hp
        ]);

        return redirect('/anggota');
    }

     //method untuk hapus data anggota
     public function anggotahapus($id_anggota)
     {
         $dataanggota=AnggotaModel::find($id_anggota);
         $dataanggota->delete();
 
         return redirect()->back();
     }

     //method untuk edit data anggota
    public function anggotaedit($id_anggota, Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama_anggota' => 'required',
            'id_prodi' => 'required',
            'hp' => 'required'
        ]);

        $id_anggota = AnggotaModel::find($id_anggota);
        $id_anggota->nim   = $request->nim;
        $id_anggota->nama_anggota      = $request->nama_anggota;
        $id_anggota->id_prodi  = $request->id_prodi;
        $id_anggota->hp   = $request->hp;

        $id_anggota->save();

        return redirect()->back();
    }
}