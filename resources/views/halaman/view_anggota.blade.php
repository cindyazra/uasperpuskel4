@extends('index')
@section('title', 'Anggota')

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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAnggotaTambah">
                        <i class="fa fa-plus"></i> Tambah Data Anggota
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
        <thead>
            <tr>
                <th align="center">No</th>
                <th align="center">ID Anggota</th>
                <th align="center">NIM</th>
                <th align="center">Nama Anggota</th>
                <th align="center">Prodi</th>
                <th align="center">HP</th>
                <th align="center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($anggota as $index=>$a)
                <tr>
                    <td align="center" scope="row">{{ $index + $anggota->firstItem() }}</td>
                    <td>{{$a->id_anggota}}</td>
                    <td>{{$a->nim}}</td>
                    <td>{{$a->nama_anggota}}</td>
                    <td>{{$a->prodi->nama_prodi}}</td>
                    <td>{{$a->hp}}</td>
                    <td align="center">
                        
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAnggotaEdit{{$a->id_anggota}}"> 
                            Edit
                        </button>
                         <!-- Awal Modal EDIT data Anggota -->
                        <div class="modal fade" id="modalAnggotaEdit{{$a->id_anggota}}" tabindex="-1" role="dialog" aria-labelledby="modalAnggotaEditLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalAnggotaEditLabel">Form Edit Data Anggota</h5>
                                    </div>
                                    <div class="modal-body">

                                        <form name="formanggotaedit" id="formanggotaedit" action="/anggota/edit/{{ $a->id_anggota}} " method="post" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="form-group row">
                                                <label for="id_anggota" class="col-sm-4 col-form-label">nim</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nim" name="nim" value="{{ $a->nim}}">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="nama_anggota" class="col-sm-4 col-form-label">Nama Anggota</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" value="{{ $a->nama_anggota}}">
                                                </div>
                                            </div>

                                            <p>
                                                <div class="form-group row">
                                                    <label for="prodi" class="col-sm-4 col-form-label">Nama Prodi</label>
                                                    <div class="col-sm-8">
                                                        <select type="text" class="form-control" id="id_prodi" name="id_prodi">
                                                            @foreach ($prodi as $pr)
                                                                @if ($pr->id_prodi == $a->id_prodi)
                                                                    <option value="{{ $pr->id_prodi }}" selected>{{ $pr->nama_prodi }}</option>
                                                                @else
                                                                    <option value="{{ $pr->id_prodi }}">{{ $pr->nama_prodi }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
    
    
                                                
                                            <p>
                                            <div class="form-group row">
                                                <label for="hp" class="col-sm-4 col-form-label">Hp</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="hp" name="hp" value="{{ $a->hp}}">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="modal-footer">
                                                <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" name="anggotatambah" class="btn btn-success">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal EDIT data buku -->
                        |
                        <a href="anggota/hapus/{{$a->id_anggota}}" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
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
    Halaman : {{ $anggota->currentPage() }} <br />
    Jumlah Data : {{ $anggota->total() }} <br />
    Data Per Halaman : {{ $anggota->perPage() }} <br />

    {{ $anggota->links() }}
    <!--akhir pagination-->
            </div>
        </div>
    </div>

    <!-- Awal Modal tambah data anggota -->
    <div class="modal fade" id="modalAnggotaTambah" tabindex="-1" role="dialog" aria-labelledby="modalAnggotaTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAnggotaTambahLabel">Form Input Data Aggota</h5>
                </div>
                <div class="modal-body">
                    <form name="formanggotatambah" id="formanggotatambah" action="/anggota/tambah " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="id_anggota" class="col-sm-4 col-form-label">NIM</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="nama_anggota" class="col-sm-4 col-form-label">Nama Anggota</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Masukan Nama Anggota">
                            </div>
                        </div>

                        <p>
                            <div class="form-group row">
                                <label for="id_prodi" class="col-sm-4 col-form-label">Nama Prodi</label>
                                <div class="col-sm-8">
                                    <select type="text" class="form-control" id="id_prodi" name="id_prodi" placeholder="Pilih Nama Prodi">
                                        <option></option>
                                        @foreach($prodi as $pr)
                                            <option value="{{ $pr->id_prodi }}">{{ $pr->nama_prodi }}</option>
                                        @endforeach
                                    </select>
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
                            <button type="submit" name="anggotatambah" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal tambah data buku -->
    
@endsection