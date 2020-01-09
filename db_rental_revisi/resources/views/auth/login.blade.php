<!DOCTYPE html>
<html>
<head>
	<title>Login Form | Fastcar</title>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/css-sendiri.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
	<img class="wave" src="frontend/images/wave.png">
	<div class="container">
		<div class="img">
			<img src="frontend/images/car-vector.svg">
		</div>
		<div class="login-content">
			<form class="user" action="/postlogin" method="POST">
				{{csrf_field()}}
				<img src="frontend/images/avatar.svg">
				<h2 class="title">login</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input class="input" type="text" name="email">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input class="input" type="password" name="password" >
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('frontend/js/js-sendiri.js')}}"></script>
</body>
</html>