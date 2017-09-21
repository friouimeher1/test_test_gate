<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="{{url('backend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="{{url('backend/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="{{url('backend/js/jquery-2.1.1.min.js')}}"></script>
<!--icons-css-->
<link href="{{url('backend/css/font-awesome.css')}}" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body>
  <div class="login-page">
    <div class="login-main">
    	 <div class="login-head">
         <h1>Login</h1>
         </div>
         <div class="login-block">
           <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
               {{ csrf_field() }}

               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                   <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                   <div class="col-md-6">
                       <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                       @if ($errors->has('email'))
                           <span class="help-block">
                               <strong>{{ $errors->first('email') }}</strong>
                           </span>
                       @endif
                   </div>
               </div>

               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                   <label for="password" class="col-md-4 control-label">Password</label>

                   <div class="col-md-6">
                       <input id="password" type="password" class="form-control" name="password">

                       @if ($errors->has('password'))
                           <span class="help-block">
                               <strong>{{ $errors->first('password') }}</strong>
                           </span>
                       @endif
                   </div>
               </div>

               <div class="form-group">
                   <div class="col-md-8 col-md-offset-4">
                       <button type="submit" class="btn btn-primary">
                           Login
                       </button>
                   </div>
               </div>
           </form>
           </div>
           </div>
         </div>
		<script src="{{url('backend/js/jquery.nicescroll.js')}}"></script>
		<script src="{{url('backend/js/scripts.js')}}"></script>
		<!--//scrolling js-->
<script src="{{('backend/js/bootstrap.js')}}"> </script>
<!-- mother grid end here-->
</body>
</html>
