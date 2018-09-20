@extends('layout.master1signup')
@section('content')

		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="/"><span>S</span>hopoviA</a></h1>
					<h6>Your stores. Your place.</h6> 
				</div>	
				<div class="header-search">
					<font id="head" size="20px">Create Your Account</font>
				</div>
				
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger1" href="/login">Login Here !!</a>
					
					</div>  
				</div>
				<div class="move-text">
					<div class="marquee"><a> Latest Offers And Discount Are Available Here...... <span>Find The Best Shop Near You!!</span> <span> For The Best Choice , Make Your First Choice - ShopoviA</span></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>
	<!-- //header --> 	
	<!-- sign up-page -->
	<div class="login-page">
		<div class="container"> 
		
			<div class="login-body">
                                          <form action="/registershopkeeper" method="post" enctype="multipart/form-data">
								<input type="text" class="user" name="name" placeholder="Enter Your Name" required=""><br>
								<input type="email" class="text" name="email" placeholder="Enter Your email" required="">  <br><br>
								<input type="password" name="password" class="lock" placeholder="Enter Your Password" required="">
								<input type="text" class="user" name="shopname" placeholder="Enter Your Shop Name" required="">
								
                                 <input type="number" class="text" name="number" placeholder="Enter Your Contact Number" required=""><br>
								<input type="radio" name="gender" value="male" checked> Male
                                <input type="radio" name="gender" value="female"> Female
                                <input type="radio" name="gender" value="other"> Other 
                                <br>
                                 <button type="button" class="button" title="passport size photo" onclick="document.getElementById('upload').click();"><p id="co">Upload Your Image</p></button>
								<div id="none">
								<input type="file" placeholder="photo" name="image" class="form" id="upload" required="" /><br><br>
								</div>
								<br><br>
								
 							<button type="button" class="button" title="passport size photo" onclick="document.getElementById('upload1').click();"><p  id="co">Upload Shop Image</p></button>
								<div id="none">
								<input type="file" placeholder="photo" name="shopimage" class="form" id="upload1" required="" /><br><br>
								</div>
								<br><br>
         							<button type="button" class="button" title="passport size photo" onclick="document.getElementById('upload2').click();"><p  id="co">Upload Your Identity</p></button>
								<div id="none">
								<input type="file" placeholder="photo" name="identityimage" class="form" id="upload2" title="pen card/adhar card/12th marksheet/caste certificate" required="" /><br><br>
								</div>
								
								<br><br>
								
<!--									  <button id="form1" class="btn2 btn-primary dropdown-toggle" id="from" type="button" data-toggle="dropdown">Product Type
									  <span class="caret"></span></button>-->
									  <select id="set" name="category">
                                                                               @foreach ($category as $category1)
                                                                               <option value="{{$category1->category}}"><a>{{$category1->category}}</a></option>
										@endforeach
                                      </select>
								<br>
								<br>
							

							<input  type="time" class="text" name="openingtime" title="Opening Time Of Your Shop" required=""><br><br>
							<input type="time" class="text" name="closingtime" title="Closinng Time Of Your Shop" required=""><br><br>
							<input type="date" class="text" name="date" title="Date Of Registeration" required=""><br><br>
							 <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
							<input type="text" class="user" name="shop_address" title="complete address(city/area)" placeholder="Enter your Shop Address" required="">
								<input type="text" class="user" name="landmark" title="Enter the place near your shop" placeholder="Enter Landmark" required="">
								
							
								
								<input type="submit" value="Sign Up ">
							
				</form>
			</div>  
			<h6>Already have an account? <a href="/login">Login Now »</a> </h6>  
		</div>
	</div>
	<!-- //sign up-page --> 
	
	@stop