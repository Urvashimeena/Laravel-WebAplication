@extends('layout.master1index')
@section('content')
<?php
  
        $msg = Session::get('not');
         $hh=Session::get('modal');  
         $login=Session::get('isLogin'); 
         $true=Session::get('login'); 
        ?>
    
	<div class="agileits-modal modal fade" id="myModal88"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg modal-sm modal-xs">
			<div class="modal-content">
				<div class="modal-header">
					<?php
                                        if($login==true)
                                        { ?>
                                            <h4 class="modal-title" id="myModalLabel"><center>
                                        <?php
                                               echo $true; ?></center></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>   
                                                   <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <h4 class="modal-title" id="myModalLabel"><center> Register Here!!</center></h4>
                                        <?php
                                        
                                        }
                                        ?>
					
                                        <font size="3px" id="al" color="white"> <?php echo $msg; ?></font>
				</div>
				<div class="modal-body modal-body-sub"> 
					<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
					<button type="button" class="btn btn-danger"><a data-dismiss="modal" data-toggle="modal" href="#modalPurchase">client</a></button>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<button type="button" class="btn btn-danger"><a href="signup">Shopkeeper</a></button>
					</div>
					</div>
					
                     
				
				</div>
				
			</div>
		</div>
	</div>





















	<div id="modalPurchase" class="modal fade" data-backdrop="static" role="dialog">
		<div class="modal-dialog modal-lg modal-sm modal-xs">
		
			<div class="modal-content1">
				<div class="modal-header1">
					
					<h4 class="modal-title" style="text-align-last: center">Register Here</h4>
				</div>
				<div class="modal-body">

				<form action="/register" method="get">
				<div class="form-group">
					<input type="text"  name="name" class="form-control input-lg input-sm title="Enter Your Email" placeholder="Username" required="">
					 <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
				</div>
				<div class="form-group">	
					<input type="password"  name="password" class="form-control input-md input-xs input-lg input-sm title="Enter Your Password" placeholder="Password" required="">
					</div>
				
				<div class="form-group">		
					<input type="number" name="number" class="form-control input-lg input-md input-xs input-sm" title="Enter Your Contact Number" placeholder="Contact Number" required="">
					</div>
				<div class="form-group">		
					<input type="submit" class="form-control input-lg input-md btn-info input-xs input-sm" data-dismiss="<?php echo $hh ?>" >
				</div>
				   
					<div class="forgot-grid">
						<font id="p1">Already Have An Account?</font>
						
							<a href="#login" data-dismiss="modal" data-toggle="modal">Login Here</a>
						
						<div class="clearfix"> </div>
					</div>
				 
				</form>
				
				</div>
				
			</div>
		</div>
	</div> 








<div id="login" class="modal fade" data-backdrop="static" role="dialog">
		<div class="modal-dialog modal-lg modal-sm modal-xs">
		
			<div class="modal-content1">
				<div class="modal-header1">
					
					<h4 class="modal-title" style="text-align-last: center">Login Here</h4>
                        
				</div>
				<div class="modal-body">
				<form action="/clientlogin" method="post">
			
				<div class="form-group">	
					<input type="text"  name="username"  class="form-control input-lg input-md input-xs input-sm" title="Enter Your Username" placeholder="Username" required="">
					 <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
					</div>
				
				<div class="form-group">	
				    <input type="password"  name="password" class="form-control input-lg input-md input-xs input-sm" title="Enter Your Password" placeholder="Password" required="">

				
					</div>
				<div class="form-group">	
				    <input type="submit" onclick="modleclose()" class="form-control input-lg input-md btn-info input-xs input-sm" data-dismiss="<?php echo $hh ?>">	
					
				</div>
				   
					<div class="forgot-grid">
						<font id="p">Don't Have An Account?</font>
					
							<a href="#modalPurchase" data-dismiss="modal" data-toggle="modal">Register Here</a>
						
						<div class="clearfix"> </div>
					</div>
				 
				</form>
				
				</div>
				
			</div>
		</div>
	</div> 




	
	<!-- <div id="login" class="modal fade" data-backdrop="static" role="dialog">
		<div class="modal-dialog">
		
			<div class="modal-content1">
				<div class="modal-header1">
					
					<h4 class="modal-title" style="text-align-last: center">Login Here</h4>
                        
				</div>
				<div class="modal-body">
				<form action="/clientlogin" method="post">
				     <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
					<input type="text" id="form"  name="username" title="Enter Your Username" placeholder="Username" required=""><br><br>
					
					<input type="password" id="form" name="password" title="Enter Your Password" placeholder="Password" required=""><br><br>
		
					
					
					<input type="submit" onclick="modleclose()" data-dismiss="<?php echo $hh ?>" id="form">
					<div class="forgot-grid">
						<p>Don't Have An Account?</p>
					
							<a href="#modalPurchase" data-dismiss="modal" data-toggle="modal">Register Here</a>
						
						<div class="clearfix"> </div>
					</div>
				 
				</form>
				
				</div>
				
			</div>
		</div>
	</div> -->


	<?php
        if($login!=true)
        {
	echo "<script>
             $('#myModal88').modal('show');
	</script>";
        }
        
        ?>
	<!-- header -->
	
	<!-- //header -->	
	<!-- banner -->
	<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">  
                <div class="item active"><!-- First-Slide -->
                    <img src="images/5.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated flipInX">HOT OFFERS AND DISCOUNT</h3>
                 
                    </div>
                </div>  
                <div class="item"> <!-- Second-Slide -->
                    <img src="images/8.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated fadeInDown">Our Latest Fashion Editorials</h3>
                     
                    </div>
                </div> 
                <div class="item"><!-- Third-Slide -->
                    <img src="images/3.jpg" alt="" class="img-responsive"/>
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated fadeInLeft">Season Sale</h3>
                       
                    </div>
                </div> 
            </div> 
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a> 
            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> 
        </div>
		<script src="js/custom.js"></script>
	</div>
	<!-- //banner -->  
		<!-- //welcome -->
	<!-- add-products -->
	<br><br><br>
	<!-- <div id="a2">
		<font id="discount1">
		Top Trending Offers
		</font> 
		
	</div> -->
	<div class="col-md-12 col-sm-12 col-xs-12" align="center">

	<font id="discount1">

		Top Trending Offers
		</font>
		
	</div>

	

	<div class="add-products"> 
		<div class="container"> 
		
			<div class="add-products-row">
			@foreach ($list1 as $result)
				<div class="col-md-4 col-sm-4 col-xs-4">
                                    <img src="upload/{{$result->shopkeeper_name}}/product/{{$result->product_image}}" class="img-responsive" id="img" alt="img">
<!--                            <a href="/shopdetail/shop_code={{$result->shop_code}}/pid={{$result->product_id}}">-->
                            <a href="{{ route('shopdetail',['shop_code' =>$result->shop_code,'pid'=>$result->product_id]) }}">
                                  <div class="overlay">
                                      <div class="text">
                                      {{$result->product_name}}
                                          <p id="q">FLAT {{$result->discount}} % OFF</p>
                                          <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                                        
                                      </div>
                                  </div>
                                    </a>
               </div>

		          @endforeach 
				

				
				</div>
				
				
				<div class="clerfix"> </div>
			</div>  	
		</div>  	
	</div>
	
        
        <br>
        
        

        <div class="col-md-12 col-sm-12 col-xs-12" align="center">

	<font id="discount1">Top Most Sale</font>
		
	</div>



        <div class="add-products"> 
		<div class="container"> 
		
			<div class="add-products-row">
			  @foreach ($list as $result)
				<div class="col-md-4 col-sm-4 col-xs-4">
                                    <img src="upload/{{$result->shopkeeper_name}}/product/{{$result->product_image}}" class="img-responsive" id="img" alt="img">
<!--                            <a href="/shopdetail/shop_code={{$result->shop_code}}/pid={{$result->product_id}}">-->
                            <a href="{{ route('shopdetail',['shop_code' =>$result->shop_code,'pid'=>$result->product_id]) }}">
                                  <div class="overlay">
                                      <div class="text">
                                      {{$result->product_name}}
                                          <p id="q">FLAT {{$result->discount}} OFF</p>
                                          <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                                        
                                      </div>
                                  </div>
                                    </a>
                                </div>

		          @endforeach 
				<div class="clerfix"> </div>
			</div>  	
		</div>  	
	</div>
	<!-- //add-products -->
	<!-- welcome -->
       

	<!-- coming soon -->
	<div class="soon">
		<div class="container">
                    @foreach ($category as $result)
                    <font size="20px" id="megasale">UPTO {{$result->discount}}% discount On {{$result->product_name}}</font>
			<h3>Mega SALE</h3>
			<h4>Biggest Deal On ShopoviA</h4>  
		    @endforeach 
		</div> 
	</div>
	<!-- //coming soon -->
	<!-- deals -->
	<div class="deals"> 
		<div class="container"> 
			<h3 class="w3ls-title">DEALS OF THE DAY </h3>
			<div class="deals-row">
                            <div class="col-md-3 focus-grid"> 
					<a href="{{route('productdetail', ['product' =>'Others'])}}" class="wthree-btn wthree2"> 
						<div class="focus-image"><i class="fa fa-wheelchair"></i></div>
						<h4 class="clrchg">Others</h4>
					</a>
				</div> 
				<div class="col-md-3 focus-grid"> 
					<a href="{{route('productdetail', ['product' =>'Restaurant'])}}" class="wthree-btn"> 
						<div class="focus-image"><i class="fa fa-mobile"></i></div>
						<h4 class="clrchg">Restaurant</h4> 
					</a>
				</div>
				<div class="col-md-3 focus-grid"> 
					<a href="{{route('productdetail', ['product' =>'Electronics'])}}" class="wthree-btn wthree1"> 
						<div class="focus-image"><i class="fa fa-laptop"></i></div>
						<h4 class="clrchg"> Electronics & Appliances</h4> 
					</a>
				</div> 
				
				<div class="col-md-3 focus-grid"> 
					<a href="{{route('shopdetail', ['product' =>'Home Decore'])}}" class="wthree-btn wthree3"> 
						<div class="focus-image"><i class="fa fa-home"></i></div>
						<h4 class="clrchg">Home Decore</h4>
					</a>
				</div> 
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="{{route('productdetail', ['product'=>'Book Store'])}}" class="wthree-btn wthree3"> 
						<div class="focus-image"><i class="fa fa-book"></i></div>
						<h4 class="clrchg">Books & Store</h4> 
					</a>
				</div>
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="{{route('productdetail', ['product'=>'Clothing'])}}" class="wthree-btn wthree4"> 
						<div class="focus-image"><i class="fa fa-asterisk"></i></div>
						<h4 class="clrchg">Clothing</h4>
					</a>
				</div>
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="{{route('productdetail', ['product'=>'Hospital'])}}" class="wthree-btn wthree2"> 
						<div class="focus-image"><i class="fa fa-gamepad"></i></div>
						<h4 class="clrchg">Hospital</h4>
					</a>
				</div> 
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="{{route('productdetail', ['product'=>'Groceries'])}}" class="wthree-btn wthree"> 
						<div class="focus-image"><i class="fa fa-shopping-basket"></i></div>
						<h4 class="clrchg">Groceries</h4>
					</a>
				</div> 
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="{{route('productdetail',['product'=>'Medical Store'])}}" class="wthree-btn wthree5"> 
						<div class="focus-image"><i class="fa fa-medkit"></i></div>
						<h4 class="clrchg">Medical Store</h4> 
					</a>
				</div> 
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="{{route('productdetail', ['product'=>'Automobile'])}}" class="wthree-btn wthree1"> 
						<div class="focus-image"><i class="fa fa-car"></i></div>
						<h4 class="clrchg">Automobile</h4> 
					</a>
				</div>
				<div class="col-md-3 focus-grid"> 
					<a href="{{route('productdetail', ['product' =>'Restaurant'])}}" class="wthree-btn wthree2"> 
						<div class="focus-image"><i class="fa fa-cutlery"></i></div>
						<h4 class="clrchg">Restaurant</h4> 
					</a>
				</div>
				<div class="col-md-3 focus-grid"> 
					<a href="{{route('productdetail', ['product' =>'sports'])}}" class="wthree-btn wthree5"> 
						<div class="focus-image"><i class="fa fa-futbol-o"></i></div>
						<h4 class="clrchg">Sports</h4> 
					</a>
				</div> 
				<div class="col-md-3 focus-grid"> 
					<a href="{{route('productdetail', ['product' =>'Jwellery'])}}" class="wthree-btn wthree3"> 
						<div class="focus-image"><i class="fa fa-gamepad"></i></div>
						<h4 class="clrchg">Jwellery</h4> 
					</a>
				</div> 
				<div class="col-md-3 focus-grid"> 
					<a href="{{route('productdetail', ['product' =>'Gifts'])}}" class="wthree-btn "> 
						<div class="focus-image"><i class="fa fa-gift"></i></div>
						<h4 class="clrchg">Gifts</h4> 
					</a>
				</div> 
				<div class="clearfix"> </div>
			</div>  	
		</div>  	
	</div> 
@stop