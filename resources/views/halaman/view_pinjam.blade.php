@extends('index')
@section('title', 'Peminjaman')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-9">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>DAFTAR PEMINJAMAN PERPUSTAKAAN UMKT !!</h1>
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPinjamTambah">
                        <i class="fa fa-plus"></i> Tambah Data Pinjam
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
        <thead>
            <tr>
                <th align="center">No</th>
                <th align="center">ID</th>
                <th align="center">Tanggal Pinjam</th>
                <th align="center">Batas Pinjam</th>
                <th align="center">Petugas</th>
                <th align="center">Anggota</th>
                <th align="center">Judul Buku</th>
                <th align="center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pinjam as $index=>$p)
                <tr>
                    <td align="center" scope="row">{{ $index + $pinjam->firstItem() }}</td>
                    <td align="center">{{$p->id_pinjam}}</td>
                    <td>{{$p->tanggalpinjam}}</td>
                    <td>{{ \Carbon\Carbon::parse($p->tanggalpinjam)->addDays(6)->format('Y-m-d') }}</td>
                    <td>{{$p->petugas->nama_petugas}}</td>
                    <td>{{$p->anggota->nama_anggota}}</td>
                    <td>{{$p->buku->judul}}</td>
                    <td align="center">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPinjamEdit{{$p->id_pinjam}}"> 
                            Edit
                        </button>

                        <!-- Awal Modal EDIT data Peminjaman -->
                        <div class="modal fade" id="modalPinjamEdit{{$p->id_pinjam}}" tabindex="-1" role="dialog" aria-labelledby="modalPinjamEditLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalPinjamEditLabel">Form Edit Data Peminjaman</h5>
                                    </div>
                                    <div class="modal-body">

                                        <form name="formpinjamedit" id="formpinjamedit" action="/pinjam/edit/{{ $p->id_pinjam}} " method="post" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="form-group row">
                                                <label for="id_pinjam" class="col-sm-4 col-form-label">ID Pinjam</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="id_pinjam" name="id_pinjam" value="{{ $p->id_pinjam}}" readonly>
                                                </div>
                                            </div>

                                            <p>
                                                <div class="form-group row">
                                                    <label for="tanggalpinjam" class="col-sm-4 col-form-label">Tanggal Pinjam</label>
                                                    <div class="col-sm-8">
                                                        <input type="date" class="form-control" id="tanggalpinjam" name="tanggalpinjam" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}" max="{{ date('Y-m-d', strtotime('+1 month')) }}">
                                                    </div>
                                                </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="petugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                                                <div class="col-sm-8">
                                                    <select type="text" class="form-control" id="id_petugas" name="id_petugas">
                                                        @foreach ($petugas as $pt)
                                                            @if ($pt->id_petugas == $p->id_petugas)
                                                                <option value="{{ $pt->id_petugas }}" selected>{{ $pt->nama_petugas }}</option>
                                                            @else
                                                                <option value="{{ $pt->id_petugas }}">{{ $pt->nama_petugas }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="anggota" class="col-sm-4 col-form-label">Nama Anggota</label>
                                                <div class="col-sm-8">
                                                    <select type="text" class="form-control" id="id_anggota" name="id_anggota">
                                                        @foreach ($anggota as $a)
                                                            @if ($a->id_anggota == $p->id_anggota)
                                                                <option value="{{ $a->id_anggota }}" selected>{{ $a->nama_anggota }}</option>
                                                            @else
                                                                <option value="{{ $a->id_anggota }}">{{ $a->nama_anggota }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="judul" class="col-sm-4 col-form-label">Judul Buku</label>
                                                <div class="col-sm-8">
                                                    <select type="text" class="form-control" id="id_buku" name="id_buku">
                                                        @foreach ($buku as $bk)
                                                            @if ($bk->id_buku == $p->id_buku)
                                                                <option value="{{ $bk->id_buku }}" selected>{{ $bk->judul }}</option>
                                                            @else
                                                                <option value="{{ $bk->id_buku }}">{{ $bk->judul }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <p>
                                            <div class="modal-footer">
                                                <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" name="pinjamtambah" class="btn btn-success">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal EDIT data Peminjaman -->
                        |
                        <a href="pinjam/hapus/{{$p->id_pinjam}}" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
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
    Halaman : {{ $pinjam->currentPage() }} <br />
    Jumlah Data : {{ $pinjam->total() }} <br />
    Data Per Halaman : {{ $pinjam->perPage() }} <br />

    {{ $pinjam->links() }}
    <!--akhir pagination-->
            </div>
        </div>
    </div>

    <!-- Awal Modal tambah data Peminjaman -->
    <div class="modal fade" id="modalPinjamTambah" tabindex="-1" role="dialog" aria-labelledby="modalPinjamTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPinjamTambahLabel">Form Input Data Peminjaman</h5>
                </div>
                <div class="modal-body">

                    <form name="formpinjamtambah" id="formpinjamtambah" action="/pinjam/tambah " method="post" enctype="multipart/form-data">
                        @csrf

                        <p>
                            <div class="form-group row">
                                <label for="tanggalpinjam" class="col-sm-4 col-form-label">Tanggal Pinjam</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="tanggalpinjam" name="tanggalpinjam" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}" max="{{ date('Y-m-d', strtotime('+1 month')) }}">
                                </div>
                            </div>

                        <p>
                        <div class="form-group row">
                            <label for="id_petugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                            <div class="col-sm-8">
                                <select type="text" class="form-control" id="id_petugas" name="id_petugas" placeholder="Pilih Nama Petugas">
                                    <option></option>
                                    @foreach($petugas as $pt)
                                        <option value="{{ $pt->id_petugas }}">{{ $pt->nama_petugas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="id_anggota" class="col-sm-4 col-form-label">Nama Anggota</label>
                            <div class="col-sm-8">
                                <select type="text" class="form-control" id="id_anggota" name="id_anggota" placeholder="Pilih Nama Anggota">
                                    <option></option>
                                    @foreach($anggota as $a)
                                        <option value="{{ $a->id_anggota }}">{{ $a->nama_anggota }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="id_buku" class="col-sm-4 col-form-label">Judul Buku</label>
                            <div class="col-sm-8">
                                <select type="text" class="form-control" id="id_buku" name="id_buku" placeholder="Pilih Judul Buku">
                                    <option></option>
                                    @foreach($buku as $bk)
                                        <option value="{{ $bk->id_buku }}">{{ $bk->judul }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <p>
                        <div class="modal-footer">
                            <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" name="pinjamtambah" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal tambah data Peminjaman -->
    
@endsection