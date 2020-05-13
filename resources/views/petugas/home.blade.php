@extends('petugas.base')
@section('content')
<style type="text/css">

.column0 {
  width: 5%;
}    

.column1 {
  width: 15%;
}

.column2 {
  width: 45%;
}

.column3 {
  width: 20%;
}

.column4 {
  width: 15%;
}

.subtitle{
    margin-top: 75px;
    margin-left: 10px;
    margin-bottom: 20px;
    color: white;
}



</style>
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->

            <p class="subtitle">Hallo PETUGAS, {{Session::get('username')}}. Apakabar?</p>


            <div class="table100 ver3 m-b-110">
                <div class="table100-head">
                    <table class="container">
                        <thead>
                            <tr>
                                <th class="cell100 column0"><h1>No</h1></th>
                                <th class="cell100 column1"><h1>Tanggal</h1></th>
                                <th class="cell100 column2"><h1>Isi Laporan</h1></th>
                                <th class="cell100 column3"><h1>Foto</h1></th>
                                <th class="cell100 column4"><h1>action</h1></th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table100-body js-pscroll" style="max-height: 480px;">
                    <table class="container">
                        <tbody>
                            @foreach($tanggapan as $data)
                                <tr  style="text-align: center;font-size: 20px">
                                    <td class="cell100 column0">{{isset($i)? ++$i : $i = 1 }}</td>
                                    <td class="cell100 column1">{{$data->tgl_pengaduan}}</td>
                                    <td class="cell100 column2">{{$data->isi_laporan}}</td>
                                    <td class="cell100 column3">
                                        <a href="../../public/images/{{$data->foto}}" target="_blank">
                                            <img src="../../public/images/{{$data->foto}}" style="width: 70px;height: 100px;">
                                        </a>
                                    </td>
                                    <td class="cell100 column4">
                                        @if($data->status == "0")
                                        <a href="{{url('petugas/tanggapan/proses/'.$data->id_pengaduan)}}" class="pulse">proses</a>                      
                                        @elseif($data->status == "proses")
                                        <a href="{{url('petugas/tanggapan/tambah/'.$data->id_pengaduan)}}" class="pulse">tanggapi</a>

                                        @endif
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