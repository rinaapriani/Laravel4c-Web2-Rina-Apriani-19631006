@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white font-weight-bold">Data Nilai
                
                <a href="{{ route('nilai.create') }}" class="btn btn-md btn-primary float-right">Tambah data</a>
                </div>

                <div class="body-header">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO. </th>
                                <th>NPM</th>
                                <th>NAMA LENGKAP</th>
                                <th>NAMA MAKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>
                               
                            @foreach ($nilai as $n)
                        <tr>
                            <td>{{ $n->id }}</td>
                            <td>{{ $n->mahasiswa->npm}}</td>
                            <td>{{ $n->mahasiswa->user->name }}</td>
                            <td>{{ $n->makul->nm_makul }}</td>
                            <td>{{ $n->makul->sks }}</td>
                            <td>{{ $n->nilai }}</td>
                                <td>
                                    <a href="{{route('edit.nilai', $n->id)}}" class="btn btn-sm btn-warning">EDIT</a>
                                    <a href="{{ route('hapus.nilai', $n->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
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
