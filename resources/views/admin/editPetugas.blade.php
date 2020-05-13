@extends('admin.base')
@section('content')

    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1 class="title" style="margin-top: 30px;margin-bottom: 20px">EDIT PETUGAS</h1>
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('admin/petugas/edit'.@$petugas->id_user) }}" method="post" style="margin-left: 70px">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama_petugas">Name:</label>
                    <input type="text"  class="form-control" id="nama_petugas" name="nama_petugas" value="{{old('nama_petugas',@$petugas->nama_petugas)}}">
                </div>
                <div class="form-group">
                    <label for="telp">Telp:</label>
                    <input type="text"  class="form-control" id="telp" name="telp" value="{{old('telp',@$petugas->telp)}}">
                </div>                
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{old('username',@$petugas->username)}}">
                </div>
                <div class="form-group">
                    <label for="level">Level:</label>
                          <select class="" name="level" id="level"><br>
                            <option value="">-- Pilih Level -- </option>
                            <option value="admin" {{old('level',(@$petugas->level == 'admin')? 'selected' : '')}}>admin</option>
                            <option value="petugas" {{old('level',(@$petugas->level == 'petugas')? 'selected' : '')}}>petugas</option>
                          </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="pulse" style="width: 50%;margin-left: 30%">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection