@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa
                
                </div>

                <div class="card-body">
                <form action="{{ route('simpan.mahasiswa') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <lable for="name" class="col-sm-2 control-lable">Nama Lengkap</lable>
                            <div class="col-sm-12">
                                <input type="text" name="user_id" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-2 control-lable ">Tempat Lahir</label>
                            <div class="col-sm-12">
                                <input type="text" name="tempat_lahir" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-2 control-lable">Tanggal Lahir</label>
                            <div class="col-sm-12">
                                <input type="date" name="tgl_lahir" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telepon" class="col-sm-2 control-lable">Telepon</label>
                            <div class="col-sm-12">
                                <input type="text" name="telepon" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-2 control-lable">Alamat</label>
                            <div class="col-sm-12">
                                <input type="text" name="alamat" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group-row">
                            <label for="gender" class="col-md-4 text-md-right">Jenis Kelamin</label>
                            <div class="col-md-6">
                            <select class="custom-select" name="gender" id="gender" required>
                                <option selected_disable value="">Pilih Jenis Kelamin...</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="col-sm-2 control-lable">Foto</label>
                            <div class="col-sm-12">
                                <input type="file" name="foto" class="form-control" required>
                            </div>
                        </div>
                        

                       <div class="form group">
                           <div class="form row float right">
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
