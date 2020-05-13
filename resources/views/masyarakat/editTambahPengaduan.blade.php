@extends('masyarakat.base')
@section('content')

    @if(session('error'))
      <div class="">
        {{ session('error') }}
      </div>
    @endif

    @if(count($errors)>0)
      <div class="">
          <strong>Perhatian</strong>
          <br>
            <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
      </div>
    @endif

    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
      @if(!empty($pengaduan))
        <h1 class="title">Edit PENGADUAN </h1>      
      @else
        <h1 class="title">TAMBAH PENGADUAN </h1>      
      @endif

            <form action="{{url('masyarakat/pengaduan',@$pengaduan->id_pengaduan)}}" method="post" enctype="multipart/form-data">

    @csrf
      @if(!empty($pengaduan))
        @method('PATCH')
      @endif
        <label>Isi Pengaduan</label> <input type="text" name="isi_laporan" id="isi_laporan" value="{{old('isi_laporan',@$pengaduan->isi_laporan)}}"><br>
        <label>Foto</label> <input type="file" name="foto" id="foto" style="width: 20%" value="{{old('foto',@$pengaduan->foto)}}" {{old('foto',@$pengaduan->foto)}}><br>
        @if(!empty($pengaduan))
      <div>
        <img src="{{empty($pengaduan)? '' : asset('images/'.$pengaduan->foto)}}" alt="tidak ada" style="width: 300px;height: 400px;position: absolute;margin-left: 21%;margin-top: -100px;">
      </div>
      @endif
      <button type="submit" class="pulse" style="margin-left: 70px">Submit</button>
            </form>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection