@extends('index')
@section('title', 'Petugas')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-9">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>DAFTAR PETUGAS PERPUSTAKAAN UMKT !!</h1>
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPetugasTambah">
                        <i class="fa fa-plus"></i> Tambah Data Petugas
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
        <thead>
            <tr>
                <th align="center">No</th>
                <th align="center">ID Petugas</th>
                <th align="center">Nama Petugas</th>
                <th align="center">HP</th>
                <th align="center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($petugas as $index=>$pt)
                <tr>
                    <td align="center" scope="row">{{ $index + $petugas->firstItem() }}</td>
                    <td>{{$pt->id_petugas}}</td>
                    <td>{{$pt->nama_petugas}}</td>
                    <td>{{$pt->hp}}</td>
                    <td align="center">
                        
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPetugasEdit{{$pt->id_petugas}}"> 
                            Edit
                        </button>
                         <!-- Awal Modal EDIT data petugas -->
                        <div class="modal fade" id="modalPetugasEdit{{$pt->id_petugas}}" tabindex="-1" role="dialog" aria-labelledby="modalPetugasEditLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalPetugasEditLabel">Form Edit Data Petugas</h5>
                                    </div>
                                    <div class="modal-body">

                                        <form name="formpetugastaedit" id="formpetugasedit" action="/petugas/edit/{{ $pt->id_petugas}} " method="post" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="form-group row">
                                                <label for="id_petugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="{{ $pt->nama_petugas}}">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="hp" class="col-sm-4 col-form-label">Hp</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="hp" name="hp" value="{{ $pt->hp}}">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="modal-footer">
                                                <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" name="petugastambah" class="btn btn-success">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal EDIT data buku -->
                        |
                        <a href="petugas/hapus/{{$pt->id_petugas}}" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
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
    Halaman : {{ $petugas->currentPage() }} <br />
    Jumlah Data : {{ $petugas->total() }} <br />
    Data Per Halaman : {{ $petugas->perPage() }} <br />

    {{ $petugas->links() }}
    <!--akhir pagination-->

        </div>
    </div>
</div>

    <!-- Awal Modal tambah data Petugas -->
    <div class="modal fade" id="modalPetugasTambah" tabindex="-1" role="dialog" aria-labelledby="modalPetugasTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPetugasTambahLabel">Form Input Data Petugas</h5>
                </div>
                <div class="modal-body">
                    <form name="formpetugastambah" id="formpetugastambah" action="/petugas/tambah " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="id_petugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Masukan Nama Petugas">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="hp" class="col-sm-4 col-form-label">HP</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukan HP">
                            </div>
                        </div>

                        <p>
                        <div class="modal-footer">
                            <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" name="petugastambah" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal tambah data buku -->
    
@endsection