@extends('layout.master1login1')
@section('content')

	<div class="login-page">
		<div class="container"> 
				 
			<div class="login-body">
				<form action="/forgetpass" method="post">
					<input type="text" class="user" name="email" placeholder="Enter Your email" required="">
					<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                     <input type="submit" value="Login">

				
						
						
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6> Not a Member? <a href="/signup">Sign Up Now »</a> </h6> 
			
		</div>
	</div>
	<!-- //login-page --> 
 
	<!-- subscribe -->
	
	<!-- //subscribe --> 
	<!-- footer -->


		
	
	<!-- //login-page --> 
@stop