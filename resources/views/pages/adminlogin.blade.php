@extends('layout.MasterAdminLogin')
@section('content') 
<div class="login-logo">
     <h1>ADMIN LOGIN</h1>
  </div>

  <div class="app-cam">
      <form action="login2" method="post">
          <input type="text" class="text" value="E-mail address" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
          
          <input type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
	<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
		<div class="login-social-link">
      
         
        </div>
		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
			<li class="new_right"><p class="sign">New here ?<a href="register.html"> Sign Up</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
 @stop