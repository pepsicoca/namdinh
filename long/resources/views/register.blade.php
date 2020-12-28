<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="../public/style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="{{route('register')}}">
    @csrf
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
	  </div>
	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
	  </div>

	<div class="input-group">
  	  <label>Name</label>
  	  <input type="name" name="name" value="">
	  </div>

	  <div class="input-group">
  	  <label>Phone</label>
  	  <input type="phone" name="phone" value="">
	  </div>

	  <div class="input-group">
  	  <label>Address</label>
  	  <input type="address" name="address" value="">
	  </div>

	  <div class="input-group">
  	  <label>Token</label>
  	  <input type="token" name="token" value="">
	  </div>

	  <div class="input-group">
  	  <label>Social_ID</label>
  	  <input type="social_id" name="social_id" value="">
	  </div>

	  <div class="input-group">
  	  <label>Type</label>
  	  <input type="type" name="type" value="">
	  </div>

	  <div class="input-group">
  	  <label>Status</label>
  	  <input type="status" name="status" value="">
  	</div>


  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="{{route('login')}}">Sign in</a>
  	</p>
  </form>
</body>
</html>
