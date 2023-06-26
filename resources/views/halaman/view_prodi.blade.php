@extends('index')
@section('title', 'Prodi')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-9">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>DAFTAR PRODI PERPUSTAKAAN UMKT !!</h1>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalProdiTambah">
                    <i class="fa fa-plus"></i> Tambah Data Prodi
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
        <thead>
            <tr>
                <th align="center">No</th>
                <th align="center">ID Prodi</th>
                <th align="center">Nama Prodi</th>
                <th align="center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($prodi as $index=>$pr)
                <tr>
                    <td align="center" scope="row">{{ $index + $prodi->firstItem() }}</td>
                    <td>{{$pr->id_prodi}}</td>
                    <td>{{$pr->nama_prodi}}</td>
                    <td align="center">
                        
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalProdiEdit{{$pr->id_prodi}}"> 
                            Edit
                        </button>
                         <!-- Awal Modal EDIT data Prodi -->
                        <div class="modal fade" id="modalProdiEdit{{$pr->id_prodi}}" tabindex="-1" role="dialog" aria-labelledby="modalProdiEditLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalProdiEditLabel">Form Edit Data Prodi</h5>
                                    </div>
                                    <div class="modal-body">

                                        <form name="formproditaedit" id="formprodiedit" action="/prodi/edit/{{ $pr->id_prodi}} " method="post" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="form-group row">
                                                <label for="id" class="col-sm-4 col-form-label">Nama Prodi</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" value="{{ $pr->nama_prodi}}">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="modal-footer">
                                                <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" name="proditambah" class="btn btn-primary">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal EDIT data buku -->
                        |
                        <a href="prodi/hapus/{{$pr->id_prodi}}" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
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
    Halaman : {{ $prodi->currentPage() }} <br />
    Jumlah Data : {{ $prodi->total() }} <br />
    Data Per Halaman : {{ $prodi->perPage() }} <br />

    {{ $prodi->links() }}
    <!--akhir pagination-->

        </div>
    </div>
</div>

    <!-- Awal Modal tambah data Prodi -->
    <div class="modal fade" id="modalProdiTambah" tabindex="-1" role="dialog" aria-labelledby="modalProdiTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalProdiTambahLabel">Form Input Data Prodi</h5>
                </div>
                <div class="modal-body">
                    <form name="formproditambah" id="formproditambah" action="/prodi/tambah " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="id" class="col-sm-4 col-form-label">Nama prodi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" placeholder="Masukan Nama Prodi">
                            </div>
                        </div>

                        <p>
                        <div class="modal-footer">
                            <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" name="proditambah" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal tambah data buku -->
    
@endsection