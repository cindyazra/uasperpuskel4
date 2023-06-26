<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PinjamModel;
use App\Models\PetugasModel;
use App\Models\AnggotaModel;
use App\Models\BukuModel;
use App\Models\KembaliModel;


class PinjamController extends Controller
{
    //tampil data peminjaman
    public function pinjamtampil()
    {
        $datapinjam = PinjamModel::orderby('id_pinjam', 'ASC')
        ->paginate(10);

        $datapetugas    = PetugasModel::all();
        $dataanggota      = AnggotaModel::all();
        $databuku       = BukuModel::all();

        return view('halaman/view_pinjam',['pinjam'=>$datapinjam,'petugas'=>$datapetugas,'anggota'=>$dataanggota,'buku'=>$databuku]);
    }

    //tambah data peminjaman
    public function pinjamtambah(Request $request)
    {
        $this->validate($request, [
            'tanggalpinjam' => 'required',
            'id_petugas' => 'required',
            'id_anggota' => 'required',
            'id_buku' => 'required'
        ]);

        PinjamModel::create([
            'tanggalpinjam' => $request->tanggalpinjam,
            'id_petugas' => $request->id_petugas,
            'id_anggota' => $request->id_anggota,
            'id_buku' => $request->id_buku
        ]);
        return redirect('/pinjam');
    }

    //hapus data peminjaman
    public function pinjamhapus($id_pinjam)
    {
        $datapinjam = PinjamModel::find($id_pinjam);
    
        KembaliModel::create([
            'id_pinjam' => $datapinjam->id_pinjam,
            'tanggal_kembali' => date('Y-m-d'),
            'id_petugas' => $datapinjam->id_petugas,
            'id_anggota' => $datapinjam->id_anggota,
            'id_buku' => $datapinjam->id_buku
        ]);
    
        $datapinjam->delete();
    
        return redirect()->back();
    }
    

    //edit data peminjaman
    public function pinjamedit($id_pinjam, Request $request)
    {
        $this->validate($request, [
            'tanggalpinjam' => 'required',
            'id_petugas' => 'required',
            'id_anggota' => 'required',
            'id_buku' => 'required'
        ]);

        $id_pinjam = PinjamModel::find($id_pinjam);
        $id_pinjam->id_petugas    = $request->id_petugas;
        $id_pinjam->id_anggota      = $request->id_anggota;
        $id_pinjam->id_buku      = $request->id_buku;

        $id_pinjam->save();

        return redirect()->back();
    }
}