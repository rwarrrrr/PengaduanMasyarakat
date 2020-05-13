@extends('base')
@section('content')
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Pengaduan Masyarakat</title>
  <link rel="stylesheet" href="{{asset('asset/css/login.css')}}">

</head>
<body>
    <div class="body-bg">

    <div class="title-warp">
        
        <h1>Buatlah Akun!</h1><br>
        
        <h3>sampaikan segala aspirasimu</h3>
        <h3>jangan salahkan kami jika ada kesalahan,</h3>
        <h3>karena kami bukan tuhan yang tahu segalanya.</h3>

    </div>

    <div class="login-wrap">
            @if(\Session::has('error'))   
                <div class="alert">
                    <div class="alert-danger">
                        <label for="tab-1">{{Session::get('error')}}</label>
                    </div>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert">
                    <div class="alert-success">
                        <label for="tab-1">{{Session::get('success')}}</label>
                    </div>
                </div>
            @endif

            @if(\Session::has('error'))
                <div class="alert">
                    <div class="alert-danger" for="tab-2">
                        <label for="tab-2">{{Session::get('error')}}</label>
                    </div>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert">
                    <div class="alert-danger">
                        
                            @foreach ($errors->all() as $error)
                                <label for="tab-2"><li for="tab-2">{{ $error }}</li></label>
                                <hr>
                            @endforeach
                        
                    </div>
                </div>
            @endif  
    <div class="login-html">

        <input type="radio" id="tab-1" name="tab" class="label-sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input type="radio" id="tab-2" name="tab" class="label-sign-up"><label for="tab-2" class="tab">Sign Up</label>

      

        <div class="login-form">


            <div class="sign-in">
                <form action="{{ url('/loginPost') }}" method="post">
                {{ csrf_field() }}
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input" name="username">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name="password">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="{{url('forgot/password')}}">Forgot Password?</a>
                    </div>
                </form>
            </div>


            <div class="sign-up">
                <form action="{{ url('masyarakat/registerPost') }}" method="post">
                {{ csrf_field() }}
                    <div class="group">
                        <label for="nik" class="label">NIK</label>
                        <input id="nik" type="text" class="input" name="nik">
                    </div>
                    <div class="group">
                        <label for="nama" class="label">Nama</label>
                        <input id="nama" type="text" class="input" name="nama">
                    </div>
                    <div class="group">
                        <label for="telp" class="label">Telp</label>
                        <input id="telp" type="text" class="input" name="telp">
                    </div>
                    <div class="group">
                        <label for="username" class="label">Username</label>
                        <input id="username" type="text" class="input" name="username">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" name="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="pass" type="password" class="input" name="confirmation">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up">
                    </div>
                </form>    
            </div>


        </div>
    </div>

</div>

  </div>
</body>
</html>
@endsection