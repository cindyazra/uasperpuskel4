@extends('index')
@section('title', 'Pengembalian')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-9">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>DAFTAR PENGEMBALIAN PERPUSTAKAAN UMKT !!</h1>
            </div>
        </div>
    </div>
</div>

@endsection

@section('konten')

<div class="content mt-3">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKembaliTambah">
                        <i class="fa fa-plus"></i> Tambah Data Kembali
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal Kembali</th>
                            <th>Petugas</th>
                            <th>Anggota</th>
                            <th>Judul Buku</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kembali as $data)
                            <tr>
                                <td>{{ $data->id_kembali }}</td>
                                <td>{{ $data->tanggal_kembali }}</td>
                                <td>{{ $data->petugas->nama_petugas }}</td>
                                <td>{{ $data->anggota->nama_anggota }}</td>
                                <td>{{ $data->buku->judul }}</td>
                                <td align="center">
                                    <a href="kembali/hapus/{{$data->id_kembali}}" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
                                    <button class="btn-danger">
                                        Delete
                                    </button>
                                </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    <!--awal pagination-->
    Halaman : {{ $kembali->currentPage() }} <br />
    Jumlah Data : {{ $kembali->total() }} <br />
    Data Per Halaman : {{ $kembali->perPage() }} <br />

    {{ $kembali->links() }}
    <!--akhir pagination-->
            </div>
        </div>
    </div>

   
@endsection