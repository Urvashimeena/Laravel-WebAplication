@extends('layout.masterlogin')
@section('content')

	<div class="login-page">
		<div class="container"> 
				  <?php
                       
                                $shop_code="";
                                $password="";
                                $rm=false;

                                if(Cookie::get("shop_code"))
                                {
                                    $shop_code=Cookie::get("shop_code");
                                
                                    $rm=true;
                                }
                                 if(Cookie::get("password"))
                                {
                                    $password=Cookie::get("password");
                                    $rm=true;
                                }
                            ?>
			<div class="login-body">
				<form action="/loginprocess" method="post">
					<input type="text" class="user" name="shop_code" value="<?php echo "$shop_code"; ?>" placeholder="Enter Your Shop Code" required="">
					<input type="password" name="password" value="<?php echo "$password"; ?>" class="lock" placeholder="Enter Your Password" required="">
					 <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                                        <input type="submit" value="Login">

					<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
				     @if($rm)
						<label class="checkbox"><input type="checkbox" value="rm" checked name="checkbox"><i></i>Remember me</label>
				     @else
				        <label class="checkbox"><input type="checkbox" value="rm" name="checkbox"><i></i>Remember me</label>
				        @endif
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="forgot">
							<a href="/forget">Forgot Password?</a>
						</div>
					</div>
						
						
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6> Not a Member? <a href="/signup">Sign Up Now »</a> </h6> 
			<div class="login-page-bottom social-icons">
				<h5>Recover your social account</h5>
			
			</div>
		</div>
	</div>
	<!-- //login-page --> 
 
	<!-- subscribe -->
	
	<!-- //subscribe --> 
	<!-- footer -->


		
	
	<!-- //login-page --> 
@stop