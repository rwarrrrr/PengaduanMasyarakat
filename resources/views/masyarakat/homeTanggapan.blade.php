@extends('masyarakat.base')
@section('content')
<style type="text/css">
.column0{
    width: 5%;
}


.column2 {
  width: 20%;
}

.column3 {
  width: 15%;
}

.column4 {
  width: 25%;
}

.column5{
    width: 25%;
}

.column6{
    width: 10%;
}

</style>
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->


            <div class="table100 ver3 m-b-110" style="margin-top: 50px">
                <div class="table100-head">
                    <table class="container">
                        <thead>
                            <tr class="row100 head">
                                <th class="cell100 column0"><h1>No</h1></th>
                                <th class="cell100 column3"><h1>tanggal</h1></th>
                                <th class="cell100 column2"><h1>nama pengadu</h1></th>
                                <th class="cell100 column4"><h1>Pengaduan</h1></th>
                                <th class="cell100 column5"><h1>tanggapan</h1></th>
                                <th class="cell100 column6"><h1>petugas</h1></th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table100-body js-pscroll" style="max-height: 550px;">
                    <table class="container">
                        <tbody>
                            @foreach($tanggapan as $row)
                                <tr>
                                    <td class="cell100 column0">{{isset($i)? ++$i : $i = 1 }}</td>
                                    <td class="cell100 column3">{{$row->tanggapan->tgl_tanggapan}}</td> 
                                    <td class="cell100 column2">{{$row->masyarakat->nama}}</td>
                                    <td class="cell100 column4">{{$row->isi_laporan}}</td>    
                                    <td class="cell100 column5">{{$row->tanggapan->tanggapan}}</td>    
                                    <td class="cell100 column6">{{$row->tanggapan->petugas->nama_petugas}}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection