<!DOCTYPE html>
<html>
  <head>
    <title>Admin Dashboard HTML Template</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{asset('public/backend/bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/bower_components/slick-carousel/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/css/main.css?version=4.5.0')}}" rel="stylesheet">
  </head>
  <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="public/backend/img/logo-big.png"></a>
        </div>
        <h4 class="auth-header">
          Đăng Nhập
        </h4>
        @if(session('danger'))
        <div class="alert alert-danger">
          {{@session('danger')}}
        </div>
        @endif
        <form action="{{route('login.postlogin')}}" method="POST">
          @csrf()
          <div class="form-group">
            <label for="">Tài Khoản</label><input class="form-control" placeholder="Nhập tài khoản ..." type="text" name="username">
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          @if($errors->has('username'))
          <div class="alert alert-danger">
            {{$errors->first('username')}}
          </div>
          @endif
          <div class="form-group">
            <label for="">Mật Khẩu</label><input class="form-control" placeholder="Nhập mật khẩu " type="password" name="password">
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
           @if($errors->has('password'))
          <div class="alert alert-danger">
            {{$errors->first('password')}}
          </div>
          @endif
          <div class="buttons-w">
            <button class="btn btn-primary">Đăng Nhập</button>
            <div class="form-check-inline">
              <label class="form-check-label"><input class="form-check-input" type="checkbox">Nhớ mật khẩu</label>
            </div>
            <div>Bạn đã có tài khoản chưa? đăng ký <a href="{{route('login.getregister')}}">tại đây</a></div>
           <div><a href="{{route('login.getlock')}}">Quên mật khẩu</a></div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
