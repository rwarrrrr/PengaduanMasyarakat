@extends('admin.base')
@section('content')
<style type="text/css">

.column0 {
  width: 5%;
}    

.column1 {
  width: 20%;
}

.column2 {
  width: 25%;
}

.column3 {
  width: 20%;
}

.column4 {
  width: 15%;
}

.column5 {
  width: 15%;
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

            <h1 class="title">Data Masyarakat</h1>
            
            <a href="{{url('admin/masyarakat/cetak')}}" class="fill" style="margin-left: 70px">cetak pdf</a>

            <div class="table100 ver3 m-b-110" style="margin-top: 20px;margin-left: 50px;">
                <div class="table100-head">
                    <table class="container">
                        <thead>
                            <tr>
                                <th class="cell100 column0"><h1>No</h1></th>
                                <th class="cell100 column1">NIK</th>
                                <th class="cell100 column2">Nama</th>
                                <th class="cell100 column3">Username</th>
                                <th class="cell100 column4">Telp</th>
                                <th class="cell100 column5">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table100-body js-pscroll" style="max-height: 480px;">
                    <table class="container">
                        <tbody>
                            @foreach($masyarakat as $row)
                                <tr>
                                    <td class="cell100 column0">{{isset($i)? ++$i : $i = 1 }}</td>
                                    <td class="cell100 column1">{{$row->nik}}</td>
                                    <td class="cell100 column2">{{$row->nama}}</td>
                                    <td class="cell100 column3">{{$row->username}}</td>
                                    <td class="cell100 column4">{{$row->telp}}</td>
                                    <td class="cell100 column5">
                                        <a href="{{url('admin/masyarakat/edit/'.$row->id_user)}}" class="raise">edit</a>
                                        <form action="{{url('admin/masyarakat/delete'.$row->id_user)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="close" style="margin-top: 10px">delete</button>
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