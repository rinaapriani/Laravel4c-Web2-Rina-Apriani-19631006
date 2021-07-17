@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white font-weight-bold">Tambah Data Makul</div>

                <div class="card-body">
                    <form action="{{ route('simpan.makul') }} " method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Kode Makul</label>
                                    <input type="text" class="form-control" name="kd_makul" placeholder="Tambahkan Kode Mata Kuliah">
                                </div>
                                <div class="col">
                                    <label for="">Nama Makul</label>
                                    <input type="text" class="form-control" name="nm_makul" placeholder="Tambahkan Nama Mata Kuliah">
                                </div>
                                <div class="col">
                                    <label for="">SKS</label>
                                    <input type="number" class="form-control" name="sks" placeholder="Tambahkan SKS Mata Kuliah">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('makul') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>
                   
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
