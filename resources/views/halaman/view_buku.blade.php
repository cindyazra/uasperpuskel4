@extends('index')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-9">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>DAFTAR BUKU PERPUSTAKAAN UMKT !!</h1>
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBukuTambah">
                        <i class="fa fa-plus"></i> Tambah Data Buku
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th align="center">No</th>
                            <th align="center">ID Buku</th>
                            <th align="center">Kode Buku</th>
                            <th align="center">Judul Buku</th>
                            <th align="center">Pengarang</th>
                            <th align="center">Kategori</th>
                            <th align="center">Aksi</th>
                        </tr>
                    </thead>
            <tbody>
                @foreach ($buku as $index=>$bk)
                    <tr>
                        <td align="center" scope="row">{{ $index + $buku->firstItem() }}</td>
                        <td>{{$bk->id_buku}}</td>
                        <td>{{$bk->kode_buku}}</td>
                        <td>{{$bk->judul}}</td>
                        <td>{{$bk->pengarang}}</td>
                        <td>{{$bk->kategori}}</td>
                        <td align="center">
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBukuEdit{{$bk->id_buku}}"> 
                                Edit
                            </button>
                            <!-- Awal Modal EDIT data Buku -->
                            <div class="modal fade" id="modalBukuEdit{{$bk->id_buku}}" tabindex="-1" role="dialog" aria-labelledby="modalBukuEditLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalBukuEditLabel">Form Edit Data Buku</h5>
                                        </div>
                                        <div class="modal-body">

                                            <form name="formbukuedit" id="formbukuedit" action="/buku/edit/{{ $bk->id_buku}} " method="post" enctype="multipart/form-data">
                                                @csrf
                                                {{ method_field('PUT') }}
                                                <div class="form-group row">
                                                    <label for="id_buku" class="col-sm-4 col-form-label">Kode Buku</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="kode_buku" name="kode_buku" value="{{ $bk->kode_buku}}">
                                                    </div>
                                                </div>

                                                <p>
                                                <div class="form-group row">
                                                    <label for="judul" class="col-sm-4 col-form-label">Judul Buku</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="judul" name="judul" value="{{ $bk->judul}}">
                                                    </div>
                                                </div>

                                                <p>
                                                <div class="form-group row">
                                                    <label for="pengarang" class="col-sm-4 col-form-label">Nama Pengarang</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $bk->pengarang}}">
                                                    </div>
                                                </div>

                                                <p>
                                                <div class="form-group row">
                                                    <label for="kategori" class="col-sm-4 col-form-label">Kategori</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $bk->kategori}}">
                                                    </div>
                                                </div>

                                                <p>
                                                <div class="modal-footer">
                                                    <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" name="bukutambah" class="btn btn-primary">Edit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal EDIT data buku -->
                            |
                            <a href="buku/hapus/{{$bk->id_buku}}" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
                                <button class="btn-danger">
                                    Delete
                                </button>
                            </a>
                        @endforeach
                    </tbody>
                </table>
                 <!--awal pagination-->
                 Halaman : {{ $buku->currentPage() }} <br />
                 Jumlah Data : {{ $buku->total() }} <br />
                 Data Per Halaman : {{ $buku->perPage() }} <br />
 
                 {{ $buku->links() }}
                 <!--akhir pagination-->
            </div>
        </div>
    </div>
      <!-- Awal Modal tambah data Buku -->
      <div class="modal fade" id="modalBukuTambah" tabindex="-1" role="dialog" aria-labelledby="modalBukuTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalBukuTambahLabel">Form Input Data Buku</h5>
                </div>
                <div class="modal-body">
                    <form name="formbukutambah" id="formbukutambah" action="/buku/tambah " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="id_buku" class="col-sm-4 col-form-label">Kode Buku</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="kode_buku" name="kode_buku" placeholder="Masukan Kode Buku">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="judul" class="col-sm-4 col-form-label">Judul Buku</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Buku">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="pengarang" class="col-sm-4 col-form-label">Nama Pengarang</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukan Nama Pengarang">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="kategori" class="col-sm-4 col-form-label">Kategori</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukan Kategori">
                            </div>
                        </div>

                        <p>
                        <div class="modal-footer">
                            <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" name="bukutambah" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal tambah data buku -->
@endsection