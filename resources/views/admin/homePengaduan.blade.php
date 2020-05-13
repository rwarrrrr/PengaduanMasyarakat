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
  width: 15%;
}

.column3 {
  width: 20%;
}

.column4 {
  width: 25%;
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

            <h1 class="title">Pengaduan belum di tanggapi</h1>

            <a href="{{url('admin/pengaduan/cetak')}}" class="fill" style="margin-left: 70px">cetak pdf</a>

            <div class="table100 ver3 m-b-110" style="margin-top: 20px;margin-left: 50px;">
                <div class="table100-head">
                    <table class="container">
                        <thead>
                            <tr>
                                <th class="cell100 column0"><h1>No</h1></th>
                                <th class="cell100 column1">Tanggal</th>
                                <th class="cell100 column2">NIK</th>
                                <th class="cell100 column3">Nama</th>
                                <th class="cell100 column4">Isi Laporan</th>
                                <th class="cell100 column5">Foto</th>
                                <th class="cell100 column6">action</th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table100-body js-pscroll" style="max-height: 480px;">
                    <table class="container">
                        <tbody>
                            @foreach($pengaduan as $data)
                                <tr>
                                    <td class="cell100 column0">{{isset($i)? ++$i : $i = 1 }}</td>
                                    <td class="cell100 column1">{{$data->tgl_pengaduan}}</td>
                                    <td class="cell100 column2">{{$data->masyarakat->nik}}</td>
                                    <td class="cell100 column3">{{$data->masyarakat->nama}}</td>
                                    <td class="cell100 column4">{{$data->isi_laporan}}</td>
                                    <td class="cell100 column5">
                                        <a href="../../public/images/{{$data->foto}}">
                                            <img src="../../public/images/{{$data->foto}}" style="width: 70px;height: 100px;">
                                        </a>
                                    </td>
                                    <td class="cell100 column6">
                                        @if($data->status == "0")
                                        <a href="{{url('admin/tanggapan/proses/'.$data->id_pengaduan)}}" class="pulse">proses</a>                      
                                        @elseif($data->status == "proses")
                                        <a href="{{url('admin/tanggapan/tambah/'.$data->id_pengaduan)}}" class="pulse">tanggapi</a>

                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>    
                    </table>
                </div>
            </div>

            <br><br><br>


            <h1 class="title">Pengaduan telah di tanggapi</h1>

            <a href="{{url('admin/pengaduan/selesai/cetak')}}" class="fill" style="margin-left: 70px">cetak pdf</a>

            <div class="table100 ver3 m-b-110" style="margin-top: 20px;margin-left: 50px;">
                <div class="table100-head">
                    <table class="container">
                        <thead>
                            <tr>
                                <th class="cell100 column0"><h1>No</h1></th>
                                <th class="cell100 column1"><h1>Tanggal</h1></th>
                                <th class="cell100 column2"><h1>NIK</h1></th>
                                <th class="cell100 column3"><h1>Nama</h1></th>
                                <th class="cell100 column4"><h1>Isi Laporan</h1></th>
                                <th class="cell100 column5"><h1>Foto</h1></th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table100-body js-pscroll" style="max-height: 480px;">
                    <table class="container">
                        <tbody>
                            @foreach($pengaduanSelesai as $row)
                                <tr>
                                    <td class="cell100 column0">{{isset($r)? ++$r : $r = 1 }}</td>
                                    <td class="cell100 column1">{{$row->tgl_pengaduan}}</td>
                                    <td class="cell100 column2">{{$row->masyarakat->nik}}</td>
                                    <td class="cell100 column3">{{$row->masyarakat->nama}}</td>
                                    <td class="cell100 column4">{{$row->isi_laporan}}</td>
                                    <td class="cell100 column5">
                                        <a href="../../public/images/{{$row->foto}}">
                                            <img src="../../public/images/{{$row->foto}}" style="width: 70px;height: 100px;">
                                        </a>                            
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