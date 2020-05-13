@extends('admin.base')
@section('content')
<style type="text/css">
.title{
    margin-top: 20px;
    margin-left: 70px;
    color: white;
}

.subtitle{
    margin-top: 20px;
    margin-left: 70px;
    margin-bottom: 30px;
    color: white;
}

</style>
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1 class="title">ADMINISTRATOR</h1>

            <h2 class="subtitle">HALO!, {{Session::get('username')}} Apakabar?</h2>

            <a href="{{url('admin/jumlah/cetak')}}" class="fill" style="margin-left: 70px;margin-bottom: 50px">cetak pdf</a>


            <div class="wrap" style="margin-top: 20px">
                
                <div class="box box-content1">
                    <div class="box-head">
                        <h1>Admin</h1>
                    </div>
                    <hr>
                    <div class="box-body">
                        <h2>{{$admin}}</h2>
                    </div>
                </div>

                <div class="box box-content2">
                    <div class="box-head">
                        <h1>Petugas</h1>
                    </div>
                    <hr>
                    <div class="box-body">
                        <h2>{{$petugas}}</h2>
                    </div>
                </div>


                <div class="box box-content3">
                    <div class="box-head">
                        <h1>Masyarakat</h1>
                    </div>
                    <hr>
                    <div class="box-body">
                        <h2>{{$masyarakat}}</h2>
                    </div>
                </div>

                <div class="box box-content4">
                    <div class="box-head">
                        <h1>Pengaduan</h1>
                    </div>
                    <hr>
                    <div class="box-body">
                        <h2>{{$pengaduan}}</h2>
                    </div>
                </div>

                <div class="box box-content5">
                    <div class="box-head">
                        <h1>Pengaduan Selesai</h1>
                    </div>
                    <hr>
                    <div class="box-body">
                        <h2>{{$pengaduanSelesai}}</h2>
                    </div>
                </div>

                <div class="box box-content6">
                    <div class="box-head">
                        <h1>Tanggapan</h1>
                    </div>
                    <hr>
                    <div class="box-body">
                        <h2>{{$tanggapan}}</h2>
                    </div>
                </div>                
            </div>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection