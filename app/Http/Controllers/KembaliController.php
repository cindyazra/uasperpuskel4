<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KembaliModel;

class KembaliController extends Controller
{
    // Tampil data pengembalian
    public function kembalitampil()
    {
        $datakembali = KembaliModel::orderBy('id_kembali', 'ASC')
            ->paginate(10);

        return view('halaman/view_kembali', ['kembali' => $datakembali]);
    }

    public function kembalihapus($id_kembali)
    {
        $datakembali=KembaliModel::find($id_kembali);
        $datakembali->delete();

        return redirect()->back();
    }
}
