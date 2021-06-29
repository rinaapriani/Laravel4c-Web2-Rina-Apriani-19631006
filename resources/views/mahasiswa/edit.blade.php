@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa
                
                </div>

                <div class="card-body">
                    <form action="{{ route('update.mahasiswa', $mahasiswa->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nama Lengkap</label>
                            <div class="col-sm-12">
                                <input type="text" name="user_id" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->user_id }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
                            <div class="col-sm-12">
                                <input type="text" name="tempat_lahir" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                            <div class="col-sm-12">
                                <input type="date" name="tgl_lahir" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tgl_lahir }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telepon" class="col-sm-2 control-label">Telepon</label>
                            <div class="col-sm-12">
                                <input type="text" name="telepon" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->telepon }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-12">
                                <input type="text" name="alamat" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->alamat }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="col-sm-2 control-label">Jenis Kelamin</label>
                            <div class="col-sm-12">
                                <select class="custom-select" id="gender" name="gender" value="{{ is_null ('$mahasiswa') ? '' : $mahasiswa->gender }}">
                                    <option selected disabled value="">Pilih Jenis Kelamin...</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="col-sm-2 control-lable">Foto</label>
                            <div class="col-sm-12">
                                <input type="file" name="foto" class="form-control" value="{{ is_null ('$mahasiswa') ? '' : $mahasiswa->foto }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form row float-right">
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
    </div>
</div>
@endsection
