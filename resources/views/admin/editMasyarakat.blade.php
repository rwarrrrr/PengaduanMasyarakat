@extends('admin.base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1 class="title" style="margin-top: 30px;margin-bottom: 20px">MASYARAKAT REGISTER</h1>
            <hr>
            @if(\Session::has('error'))
                <div class="alert alert-danger">
                    <div>{{Session::get('error')}}</div>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('admin/masyarakat/edit'.@$masyarakat->id_user) }}" method="post" style="margin-left: 70px">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nik">Nik:</label>
                    <input type="text"  class="form-control" id="nik" name="nik" value="{{old('nik',@$masyarakat->nik)}}">
                </div>
                <div class="form-group">
                    <label for="nama">Name:</label>
                    <input type="text"  class="form-control" id="nama" name="nama" value="{{old('nama',@$masyarakat->nama)}}">
                </div>
                <div class="form-group">
                    <label for="telp">Telp:</label>
                    <input type="text"  class="form-control" id="telp" name="telp" value="{{old('telp',@$masyarakat->telp)}}">
                </div>                
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{old('username',@$masyarakat->username)}}">
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