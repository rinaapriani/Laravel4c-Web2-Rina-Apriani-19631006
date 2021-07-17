@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white font-weight-bold">Edit Data Mahasiswa </div>

                <div class="card-body">
                    <form action="{{ route('update.mahasiswa', $mahasiswa->id) }}" method="post">
                    @csrf
                        <div class="from-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="name">Nama Mahasiswa</label>
                                    <select class="custom-select" name="user_id" id="user_id" >
                                        <option selected_disable value="">--- Pilih User ---</option>
                                        @foreach ($user as $u)
                                        <option value="{{ $u->id }}" {{ $mahasiswa->user_id == $u->id ? 'selected' : '' }} > {{ $u->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="npm">NPM</label>
                                    <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->npm }}">
                                </div>
                                <div class="col">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}">
                                </div>
                            </div>
                        </div>

                       <div class="form-group">
                           <div class="form-row">
                                <div class="col">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tgl_lahir }}">
                                </div>
                                <div class="col">
                                    <label for="telepon">Telepon</label>
                                    <input type="number" name="telepon" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->telepon }}">
                                </div>
                                <div class="col">
                                    <label for="gender">Jenis Kelamin</label>
                                        <select class="custom-select" id="gender" name="gender" value="{{ is_null ('$mahasiswa') ? '' : $mahasiswa->gender }}">
                                            <option selected disabled value="">---Pilih Jenis Kelamin---</option>
                                            <option value="L" {{ $mahasiswa->gender == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                                            <option value="P" {{ $mahasiswa->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                </div>
                           </div>
                       </div>
                       
                       <div class="form-group">
                           <div class="form-row">
                                <div class="col">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" cols="2" rows="3" class="form-control" style="resize: none;">
                                         {{ is_null ($mahasiswa) ? '' : $mahasiswa->alamat }} 
                                    </textarea>
                                </div>
                           </div>
                       </div>
                        
                        

                        <div class="form-group  float-right">
                            <div class="form-row">
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
