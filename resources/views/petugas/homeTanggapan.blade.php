@extends('petugas.base')
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
  width: 25%;
}

.column4 {
  width: 25%;
}

.column5 {
  width: 10%;
}

.column6 {
  width: 10%;
}

td a,td button{
  background: none;
  border: 2px solid;
  font: inherit;
  line-height: 1;
  padding: 0.5em 1em;
  text-decoration: none;
}

.raise {
  --color: #ffa260;
  --hover: #e5ff60;
}

.close {
  --color: #ff7f82;
  --hover: #ff7f82;
}

td a,td button {
  color: var(--color);
  -webkit-transition: 0.25s;
  transition: 0.25s;
}
td a,td button:hover, td a,td button:focus {
  border-color: var(--hover);
  color: #fff;
}

.raise:hover,
.raise:focus {
  box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
  -webkit-transform: translateY(-0.25em);
          transform: translateY(-0.25em);
}

.close:hover,
.close:focus {
  box-shadow: inset -3.5em 0 0 0 var(--hover), inset 3.5em 0 0 0 var(--hover);
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

                <div class="table100-body js-pscroll" style="max-height: 550px;">
                    <table class="container">
                        <tbody>
                            @foreach($tanggapan1 as $row)
                                <tr>
                                    <td class="cell100 column0">{{isset($i)? ++$i : $i = 1 }}</td>
                                    <td class="cell100 column1">{{$row->tgl_tanggapan}}</td>    
                                    <td class="cell100 column2">{{$row->pengaduan->masyarakat->nama}}</td>
                                    <td class="cell100 column3">{{$row->pengaduan->isi_laporan}}</td>
                                    <td class="cell100 column4">{{$row->tanggapan}}</td>    
                                    <td class="cell100 column5">{{$row->petugas->nama_petugas}}</td>
                                    <td class="cell100 column6">
                                        <a href="{{url('petugas/tanggapan/edit/'.$row->id_pengaduan)}}" class="raise">edit</a>
                                        
                                        <form action="{{url('petugas/tanggapan/hapus'.$row->id_tanggapan)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="close" style="margin-top: 20px">delete</button>
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