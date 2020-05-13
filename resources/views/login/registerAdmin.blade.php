@extends('admin.base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1 class="title" style="margin-top: 30px;margin-bottom: 20px">ADMIN REGISTER</h1>
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
            <form action="{{ url('admin/registerPost') }}" method="post" style="margin-left: 70px">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama_petugas">Name:</label>
                    <input type="text"  class="form-control" id="nama_petugas" name="nama_petugas">
                </div>
                <div class="form-group">
                    <label for="telp">Telp:</label>
                    <input type="text"  class="form-control" id="telp" name="telp">
                </div>                
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="cpassword">Password Confirmation:</label>
                    <input type="password" class="form-control" id="confirmation" name="confirmation">
                </div>
                <div class="form-group">
                    <label for="level">Level:</label>
                          <select class="" name="level" id="level"><br>
                            <option value="">-- Pilih Level -- </option>
                            <option value="admin">admin</option>
                            <option value="petugas">petugas</option>
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