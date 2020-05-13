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

        <input type="radio" id="tab-1" name="tab" class="label-sign-in" checked><label for="tab-1" class="tab">Forgot Password</label>
        <input type="radio" id="tab-2" name="tab" class="label-sign-up"><label for="tab-2" class="tab"></label>

      

        <div class="login-form">


            <div class="sign-in">
                <form action="{{ url('forgot/passwordPost') }}" method="post">
                {{ csrf_field() }}
                    <div class="group">
                        <label for="username" class="label">Username</label>
                        <input id="username" type="text" class="input" name="username">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">New Password</label>
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


            <div class="sign-up">
                
            </div>


        </div>
    </div>

</div>

  </div>
</body>
</html>
@endsection