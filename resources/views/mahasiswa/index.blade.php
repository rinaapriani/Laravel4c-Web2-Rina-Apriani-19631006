@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-md btn-primary float-right">Tambah data</a>
                </div>

                <div class="body-header">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>NAMA LENGKAP</th>
                                <th>TEMPAT, TANGGAL LAHIR</th>
                                <th>ALAMAT</th>
                                <th>TELEPON</th>
                                <th>JENIS KELAMIN</th>
                                <th>FOTO</th>
                                <th>AKSI</th>
                            </tr>

                            @foreach ($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $mhs->id}}</td>
                            <td>{{ $mhs->name}}</td>
                            <td>{{ $mhs->tempat_lahir.','.$mhs->tanggal_lahir}}</td>
                            <td>{{ $mhs->alamat}}</td>
                            <td>{{ $mhs->telepon}}</td>
                            <td>{{ $mhs->gender}}</td>
                            <td></td>
                                <td>
                                    <a href="{{ route('edit.mahasiswa', $mhs->id) }}" class="btn btn-sm btn-warning">EDIT</a>
                                    <a href="{{ route('hapus.mahasiswa', $mhs->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
                         @endforeach   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
