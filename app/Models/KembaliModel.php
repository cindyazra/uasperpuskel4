<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KembaliModel extends Model
{
    use HasFactory;
    
    protected $table = "pengembalian";
    protected $primaryKey = "id_kembali";
    protected $fillable = ['id_pinjam', 'tanggal_kembali', 'id_petugas', 'id_anggota', 'id_buku'];

    // Relasi ke peminjaman
    public function peminjaman()
    {
        return $this->belongsTo('App\Models\PinjamModel', 'id_pinjam');
    }

    // Relasi ke petugas
    public function petugas()
    {
        return $this->belongsTo('App\Models\PetugasModel', 'id_petugas');
    }

    // Relasi ke anggota
    public function anggota()
    {
        return $this->belongsTo('App\Models\AnggotaModel', 'id_anggota');
    }

    // Relasi ke buku
    public function buku()
    {
        return $this->belongsTo('App\Models\BukuModel', 'id_buku');
    }
}
