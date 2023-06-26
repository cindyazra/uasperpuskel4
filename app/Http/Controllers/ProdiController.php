<?php

namespace App\Http\Controllers;

use App\Models\ProdiModel;
use Illuminate\Http\Request;


class ProdiController extends Controller
{
    //method untuk tampil data Prodi
    public function proditampil()
    {
        $dataprodi = ProdiModel::orderby('id_prodi', 'ASC')
        ->paginate(10);

        return view('halaman/view_prodi',['prodi'=>$dataprodi]);
    }

    //method untuk tambah data Prodi
    public function proditambah(Request $request)
    {
        $this->validate($request, [
            'nama_prodi' => 'required',
        ]);

        ProdiModel::create([
            'nama_prodi' => $request->nama_prodi,
        ]);

        return redirect('/prodi');
    }

     //method untuk hapus data Prodi
     public function prodihapus($id_prodi)
     {
         $dataprodi=ProdiModel::find($id_prodi);
         $dataprodi->delete();
 
         return redirect()->back();
     }

     //method untuk edit data Prodi
    public function prodiedit($id_prodi, Request $request)
    {
        $this->validate($request, [
            'nama_prodi' => 'required',
        ]);

        $id_prodi = ProdiModel::find($id_prodi);
        $id_prodi->nama_prodi     = $request->nama_prodi;

        $id_prodi->save();

        return redirect()->back();
    }
}