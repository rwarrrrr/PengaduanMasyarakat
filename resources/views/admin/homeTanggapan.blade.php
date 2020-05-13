@extends('admin.base')
@section('content')
<style type="text/css">

.column0 {
  width: 5%;
}    

.column1 {
  width: 10%;
}

.column2 {
  width: 20%;
}

.column3 {
  width: 20%;
}

.column4 {
  width: 20%;
}

.column5 {
  width: 15%;
}

.column6 {
  width: 10%;
}

.title{
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
            <h1 class="title">Data Tanggapan</h1>

            <a href="{{url('admin/tanggapan/cetak')}}" class="fill" style="margin-left: 70px">cetak pdf</a>

            <div class="table100 ver3 m-b-110" style="margin-top: 20px;margin-left: 50px;">
                <div class="table100-head">
                    <table class="container">
                        <thead>
                            <tr>
                                <th class="cell100 column0"><h1>No</h1></th>
                                <th class="cell100 column1"><h1>tanggal</h1></th>
                                <th class="cell100 column2"><h1>nama pengadu</h1></th>
                                <th class="cell100 column3"><h1>Pengaduan</h1></th>
                                <th class="cell100 column4"><h1>tanggapan</h1></th>
                                <th class="cell100 column5"><h1>petugas</h1></th>
                                <th class="cell100 column6"><h1>Aksi</h1></th>
                            </tr>                    
                        </thead>
                    </table>
                </div>

                <div class="table100-body js-pscroll" style="max-height: 480px;">
                    <table class="container">
                        <tbody>
                            @foreach($tanggapan as $row)
                                <tr>
                                    <td class="cell100 column0">{{isset($i)? ++$i : $i = 1 }}</td>
                                    <td class="cell100 column1">{{$row->tgl_tanggapan}}</td>    
                                    <td class="cell100 column2">{{$row->pengaduan->masyarakat->nama}}</td>
                                    <td class="cell100 column3">{{$row->pengaduan->isi_laporan}}</td>
                                    <td class="cell100 column4">{{$row->tanggapan}}</td>    
                                    <td class="cell100 column5">{{$row->petugas->nama_petugas}}</td>                                    
                                    <td class="cell100 column6">
                                        <a href="{{url('admin/tanggapan/edit/'.$row->id_pengaduan)}}" class="raise">edit</a>
                                        <form action="{{url('admin/tanggapan/hapus'.$row->id_tanggapan)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="close" style="margin-top: 15px">delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>    
                    </table>
                </div>
            </div>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection