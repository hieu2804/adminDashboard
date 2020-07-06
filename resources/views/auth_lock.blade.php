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
    <style type="text/css">
      .form-control{
        display: inline-block;
        width: auto;
        margin-left: 0px 40%;
      }
      input{
        margin-left: 60px;
      }
    </style>
  </head>
  <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w wider">
        <div class="logo-w">
          <a href="{{route('login.getlogin')}}"><img alt="" src="public/backend/img/logo-big.png"></a>
        </div>
        <h5 class="auth-header">
          Welcome Back
        </h5>
       @if(session('success'))
       <div class="alert alert-success">
         {{session('success')}}
       </div>
       @endif
          <form action="" method="POST">
            @csrf()
              <div class="centered">
                <label for="">Nhập Email: </label>
                <input class="form-control" placeholder="Nhập Email ..." type="email" name="email">
              </div>
              @if($errors->has('email'))
              <div class="alert alert-danger">
                {{$errors->first('email')}}
              </div>
              @endif
              <br><br>
              <div class="centered">
                <label for="">Nhập MK mới: </label>
              <input class="form-control" placeholder="Nhập password ..." type="password" name="password">
              </div>
               @if($errors->has('password'))
              <div class="alert alert-danger">
                {{$errors->first('password')}}
              </div>
              @endif<br><br>
              <div class="centered">
                <label for="">Nhập lại MK: </label>
              <input class="form-control" placeholder="Nhập password ..." type="password" name="password_confirm">
              </div>
               @if($errors->has('password_confirm'))
              <div class="alert alert-danger">
                {{$errors->first('password_confirm')}}
              </div>
              @endif<br><br>
              
              
              <div class="buttons-w">
                <button class="btn btn-primary">Xác Nhận</button>
                <button class="btn btn-default"><a href="{{route('login.getlogin')}}" >Trở về</a></button>
              </div>
             
            </form>
      </div>
    </div>
  </body>
</html>
