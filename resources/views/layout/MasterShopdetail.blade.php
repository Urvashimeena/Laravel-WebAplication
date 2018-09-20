<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>ShopoviA-Your Store Your Place</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="../css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->  
<link href="../css/animate.min.css" rel="stylesheet" type="text/css" media="all" />   
<link href="../css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="../js/jquery-2.2.3.min.js"></script> 
<script src="../js/owl.carousel.js"></script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<!-- scroll to fixed--> 
<script src="../js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
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
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>	
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
<script type="text/javascript" src="../js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
<script type="text/javascript" src="../js/jquery.mousewheel.js"></script>
<!-- the mousewheel plugin --> 
<style>

#a1 h1
{
    font-family: monospace;
    color: blue;
    font-size: 40px;

}
@media (max-width: 768px)
{
   
.header-search, .header-two.scroll-to-fixed-fixed .header-search {
    margin: 1.2em 0em 1.2em 4.3em;
}
    #a1 h1
{
    font-size: 25px;
    font-family: monospace;
    color: blue;
    
}
    .header-search h1 {
    font-size: 26px;
}
.header-logo {
    float: none;
    padding-left: 100px;
    padding-top: 10px;
}

.menu {
    width: 30%;
    font-size: 7px;
}
.header-logo h1, .header-two.scroll-to-fixed-fixed .header-logo h1 {
    font-size: 2em;

}
 td {
    padding-top: 15px;
    padding-bottom: 15px;
    padding-right: 30px;
    padding-left: 30px;
    font-size: 18px;
    color: black;
}

.move-text {
    float: none;
    /* width: 30%; */
    /* padding: 0.2em; */
    padding-top: 15px;
    padding-top: -20px;
    text-align: left;
    /* margin-top: -21px; */
    margin-left: 130px;
    font-size: 10px;
}

}
 #img
 {
     width: 250px;
     height: 250px;
 }
 #as{
    color: tomato;
 
    font-size: 25px;
 }

 #q1
 {
     color:white;
     font-size: 15px;
 }
 #q
 {
     color: white;
    font-size: 20px;
 }

  
      table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}


.header-search {
    font-family: cursive;
    float: left;
    width: 55%;
    text-align: center;
    /* margin: 1.6em 5em; */
    margin-left: 80px;
    margin-top: 20px;
    
}

#hhh {
   
    color: #e4543a;
    font-family: Elephant;
    font-size:45px;
    
}
.glry-w3agile-grids .view-caption h4 {
    border-bottom: 1px solid #ccc;
    font-size: 1.7em;
    color: #98b0da;
    font-weight: normal;
    margin-bottom: 10px;
    padding-bottom: 10px;
    font-family: 'Offside', cursive;
    font-weight: 600;
    text-transform: capitalize;
}
#a1
{
    font-size: 20px;
   
    color:tomato;
}
img:hover { -moz-box-shadow: 0 0 100px #ccc; -webkit-box-shadow: 0 0 100px #ccc; box-shadow: 0 0 100px #ccc; }
table:hover { -moz-box-shadow: 0 0 100px #ccc; -webkit-box-shadow: 0 0 100px #ccc; box-shadow: 0 0 100px #ccc; }

h3.w3ls-title {
    text-align: left;
    font-size: 3em;
    color: #000;
    /* margin: 1em 0; */
    font-family: cursive;
   margin-left: 410px;
    font-weight: bold;
    /* margin-bottom: 20px; */
    padding-bottom: -30px;
    margin-bottom: -30px;
}
#img1
{
    width:300px;
    height:300px;
}
#img
{
    width:220px;
    height: 220px;
}
.glry-w3agile-grids .view-caption {
    background-color: rgba(0, 0, 0, 0.69);
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    /* padding: 7% 5% 5% 35%; */
    width: 400px;
    text-align: left;
    top: 0;
    z-index: 99;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    -webkit-transform: translate3d(-110%, 0px, 0px);
    -moz-transform: translate3d(-110%, 0px, 0px);
    -o-transform: translate3d(-110%, 0px, 0px);
    -ms-transform: translate3d(-110%, 0px, 0px);
    transform: translate3d(-110%, 0px, 0px);
    padding-right: 0px;
    padding-left: 125px;
    padding-top: 20px;
}
#hhh
{
    font-family: Elephant;
    color: #d03a2f;
}
</style>
</head>
    <body>
                 
         
      <div class="header">
             @include('include.header1')
             
             <div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="index.html"><span>S</span>hopoviA</a></h1>
					<h6>Your stores. Your place.</h6> 
				</div>	
				<div class="header-search">
					<h1>SHOP DETAIL</h1>
				</div>
				<div class="header-cart"> 
					
				   <div class="cart"> 
					
                                       </div>
                                   
                                           
                                       
					
                               
                                      
                                   
                                            
                                  
		
				</div> 
				
			</div>		
		</div>
             
             @include('include.headerdetail')
        </div>
       
          @yield('content')
          
         @include('include.footer3')  
	<!-- cart-js -->
	<script src="../js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 	 
	<!-- menu js aim -->
	<script src="../js/jquery.menu-aim.js"> </script>
	<script src="../js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 

</body>
</html>