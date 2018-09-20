<?php
        $name = Session::get('name');
              
 ?>
<html lang="en">
<head>
<title>Smart Bazaar an E-commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Products :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->  
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />   
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/owl.carousel.js"></script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<!-- scroll to fixed--> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- //scroll to fixed--> 
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
	
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		
		$().UItoTop({ easingType: 'easeOutQuart' });
		
	});
</script>
<!-- //smooth-scrolling-of-move-up -->  
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
	$(function()
	{
		$('.scroll-pane').jScrollPane();
	});
</script>
<!-- //the jScrollPane script -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- the mousewheel plugin --> 
<style>
     #img
    {
        width:200px;
        height: 150px;
    }
    
     .scrollable-menu {
    height: auto;
    max-height: 450px;
    overflow-x: hidden;
}
    
    #l:hover { -moz-box-shadow: 0 0 300px #ccc; -webkit-box-shadow: 0 0 300px #ccc; box-shadow: 0 0 300px #ccc; }
      .header-search {
    font-family: cursive;
    float: left;
    width: 55%;
    text-align: center;
    margin-left: 50px;
    margin-top: 30px;
}
</style>
</head>
<body>
	<!-- header -->
	<div class="header">
	@include('include.header1')
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="index.php"><span>S</span>hopoviA</a></h1>
					<h6>Your stores. Your place.</h6> 
				</div>	
				<div class="header-search">
                                    @if($name=='Product Name')
                                    <h1>Search By Product Name</h1>
                                    @elseif($name == 'Shop Name')
                                    <h1>Search By Shop Name</h1>
                                    @elseif($name== 'Landmark')
                                    <h1>Search By Landmark</h1>
                                    @endif
				</div>
				
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Store Categories</a>
						<nav class="cd-dropdown"> 
							
							<ul class="cd-dropdown-content scrollable-menu"> 
								<li><a>Today's Offers</a></li>
								<li>
									<a href="electronics.php">Electronics</a> 
								
								</li> <!-- .has-children -->
                                                                <li>
                                                                    <a href="mobile.php">Mobile and Accessories</a> 
								
								</li> 
                                                                <li>
                                                                    <a href="clothing.php">Clothing</a> 
								
								</li> 
                                                                <li>
                                                                    <a href="restaurant.php">Restaurant</a> 
								
								</li> 
                                                                <li>
                                                                    <a href="Hotels.php">Hotels</a> 
								
								</li> 
                                                                <li>
									<a href="jewellery.php">Jewellery</a> 
								
								</li> 
                                                                <li>
                                                                    <a href="Hospital.php">Hospital</a> 
								
								</li>
                                                                <li >
									<a href="Bags.php">Bags</a> 
								
								</li> 
                                                                <li >
                                                                    <a href="Footwear.php">Footwear</a> 
								
								</li> 
                                                                <li>
                                                                    <a href="Watch.php">Watch</a> 
								
								</li> 
                                                                <li>
									<a href="Kirana.php">Kirana</a> 
								
								</li> 
                                                                <li>
                                                                    <a href="stationary.php">Stationary</a> 
								
								</li> 
                                                                
								<!-- .has-children -->
								<li>
									<a href="Furniture.php">Furniture</a> 
	
								</li> <!-- .has-children --> 
								<li>
                                                                    <a href="home_decor.php">Home Decore</a> 
				
								</li> <!-- .has-children -->  
								<li>
									<a href="sports.php">Sports</a>
								
								</li> <!-- .has-children -->  
								<li>
                                                                    <a href="Groceries.php">Grocery store</a>
			
								</li> <!-- .has-children -->  
								<li >
									<a href="Games.php">Gifts</a>
							
								</li> 
								<li>
                                                                    <a href="medicalstore.php">Medical Store</a>
								
								</li>
								<li >
                                                                    <a href="Automobile.php">Automobile</a>
								
								</li>
								<li>
									<a href="book.php">Books and Music</a>
                                                                </li>
                                                                <li>
                                                                    <a href="others.php">Others</a> 
								
								</li> 
							
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->	 
				</div>
				<div class="move-text">
					<div class="marquee"><a > New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
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
	<!-- products -->
	<div class="products">	 
		<div class="container">
			
				<div class="products-row">
                                    @if($name=='Product Name')
                                     @if(count($search)>0)
                                      @foreach ($search as $result)
                                           
                                                <div class="col-md-3 product-grids"> 
						<div class="agile-products" id="l">
					             <a href="{{route('shopdetail', ['shop_code' =>$result->shop_code])}}">
                                                       	  <img src="upload/{{$result->shopkeeper_name}}/product/{{$result->product_image}}" id = "img" class="img-responsive" alt="img">
                                                     </a>
							
							<div class="agile-product-text">              
								<h5>{{$result->product_name}}</h5> 
								
								
							</div>
						</div> 
					</div>
                                      @endforeach
                                      @else
                                      <h1>No Result Found</h1>
                                      @endif
                                    @elseif($name=='Shop Name')
                                           @if(count($search)>0)
                                            @foreach ($search as $result)
                                                <div class="col-md-3 product-grids"> 
						<div class="agile-products" id="l">
					             <a href="{{route('shopdetail', ['shop_code' =>$result->shop_code])}}">
                                                       	  <img src="upload/{{$result->shopkeeper_name}}/{{$result->shop_image}}" id = "img" class="img-responsive" alt="img">
                                                     </a>
							
							<div class="agile-product-text">              
								<h5>{{$result->shop_name}}</h5> 
								
								
							</div>
						</div> 
					</div>
                                    @endforeach
                                    @else
                                    <h1>No Result Found</h1>
                                    @endif
                                    @elseif($name=='Landmark')
                                            @if(count($search)>0)
                                             @foreach ($search as $result)
                                                <div class="col-md-3 product-grids"> 
						<div class="agile-products" id="l">
					             <a href="{{route('shopdetail', ['shop_code' =>$result->shop_code])}}">
                                                       	  <img src="upload/{{$result->shopkeeper_name}}/{{$result->shop_image}}" id = "img" class="img-responsive" alt="img">
                                                     </a>
							
							<div class="agile-product-text">              
								<h5>{{$result->shop_name}}</h5> 
								
								
							</div>
						</div> 
					</div>
                                    @endforeach
                                    @else
                                    <h1>No Result Found</h1>
                                    @endif
                                 @endif
                                   
                                    
                                     
					
					
					
				<!-- //add-products -->
			</div>
			
						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->
					</div>
					<!--<div class="sidebar-row">
						<h4>DISCOUNTS</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Upto - 10% (20)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>70% - 60% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>50% - 40% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						</div>
					</div>
					<div class="sidebar-row">
						<h4>Color</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>White</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pink</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gold</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Blue</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i> Brown</label> 
						</div>
					</div>			 
				</div>
				<!--<div class="related-row">
					<h4>Related Searches</h4>
					<ul>
						<li><a href="products.html">Air conditioner </a></li>
						<li><a href="products.html">Gaming</a></li>
						<li><a href="products.html">Monitors</a></li>
						<li><a href="products.html">Pc </a></li>
						<li><a href="products.html">Food Processors</a></li>
						<li><a href="products.html">Oven</a></li>
						<li><a href="products.html">Purifiers</a></li>
						<li><a href="products.html">Oven</a></li>
						<li><a href="products.html">Cleaners</a></li>
						<li><a href="products.html">Small devices</a></li>
					</ul>
				</div>
				<div class="related-row">
					<h4>YOU MAY ALSO LIKE</h4>
					<div class="galry-like">  
						<a href="single.html"><img src="images/e1.png" class="img-responsive" alt="img"></a>             
						<h4><a href="products.html">Audio speaker</a></h4> 
						<h5>$100</h5>       
					</div>
				</div>
			</div>-->
			<div class="clearfix"> </div>
			<!-- recommendations -->
			<div class="recommend">
			
			
			<!-- //recommendations -->
		</div>
	</div>
	
	