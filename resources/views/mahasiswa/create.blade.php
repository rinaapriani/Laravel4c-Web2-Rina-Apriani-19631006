@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white font-weight-bold">Tambah Data Mahasiswa</div>

                <div class="card-body">
                <form action="{{ route('simpan.mahasiswa') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="name">Nama Mahasiswa</label>
                                <select name="user_id" id="user_id" class="form-control">
                                    <option value="" disabled selected>--- Pilih User ---</option>
                                    @foreach ($user as $u)
                                    <option value="{{ $u->id }}" > {{ $u->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="npm">NPM</label>
                                <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM" maxlength="8">
                            </div>
                            <div class="col">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                            </div>
                        </div>
                    </div>
                      
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tambahkan Tanggal">
                            </div>
                            <div class="col">
                                <label for="gender">Jenis Kelamin</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="" disabled selected>--- Pilih Jenis Kelamin ---</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="telepon" >Telepon</label>
                                <input type="text" name="telepon" class="form-control" placeholder="Masukkan No Telepon">                        
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="2" rows="3" class="form-control" style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                            

                            <div class="form group float-right">
                                <div class="form row">
                                    <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-danger">BATAL</a>
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
