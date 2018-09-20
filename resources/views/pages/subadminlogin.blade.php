@extends('layout.MasterAdminLogin')
@section('content') 
<div class="login-logo">
     <h1>ADMIN LOGIN</h1>
  </div>

  <div class="app-cam">
      <form action="/subadminlogin" method="post">
          <input type="text" class="text" value="E-mail address" name="user" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
          
          <input type="password" value="Password" name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
	<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
		<div class="login-social-link">
          <a href="/Admin_login" class="facebook">
              AdminLogin
          </a>
         
        </div>

	</form>
  </div>
 @stop