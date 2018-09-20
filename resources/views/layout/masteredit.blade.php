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
<style>
    @media (max-width: 600px)
{
        .w3-hide-small {
         display: none!important;
     }
         .row {
    /* margin-right: -15px; */
    margin-left: -220px;
}
.col-xs-3 {
    width: 75%;
}
.header-logo {
    /* float: left; */
    float: right;
    text-align: end;
}
.modal-content3 {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    height: 130;
    width: 300px;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    background-color: white;
    border: 10px groove;
    border-color: rgba(0, 0, 0, 0.68);
    margin-top: 240px;
    margin-left: 0px;
}
#spn {
    padding-left: 205px;
    }

}

@media (max-width: 480px)
{
.header-logo h1, .header-two.scroll-to-fixed-fixed .header-logo h1 {
    font-size: 3em;
    /* text-align: center; */
}
.header-logo h6 {
    font-size: 1em;
}
.header-logo {
    /* float: left; */
    float: right;
    text-align: end;
}
}
        .one
        {
          font-family: cursive; 
          font-weight: bold;
        }
        
.header-search {
    float: left;
    width: 80%;
    text-align: center;
    margin: 1.6em 0em;
    font-family: cursive;
}
#hh {
    font-size: 15px;
    color: #0d1e3d;
    font-family: fantasy;
    padding-left: 30px;

}

#img
{
    width:200px;
    height:200px;
}
</style>
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

 
   <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
   <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script>
 
    function deleteRecord(id) {
	if(confirm("Are you sure you want to delete this row?")) {
                $.ajaxSetup({
               headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
		$.ajax({
                    
			url: './deleteproduct',
			type: "POST",
			data:'id='+id,
			success: function(data)
                        {
			   $("#box_"+ id).remove();
                           toastr.success('Product Deleted Successfully', 'Success', {timeOut: 5000});
                           getPageData();
                            
                        
			}
                    
                         
		});
               
	}
         
}
    </script>
    <style>
   .modal-content9 {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    height: 130;
    width: 600px;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    background-color: white;
    border: 10px groove;
    border-color: rgba(0, 0, 0, 0.68);
    margin-top: 240px;
    margin-left: 50px;
}
.cd-dropdown-wrapper a
{
    color: white;
    font-size: 20px;
}
#sh
{
    font-size: 25px;
    color: #237b75;
    font-family: cursive;
    padding-left: 50px;
}
#msg
{
    font-size: 16px;
    color: black;
    font-weight: 600;
    padding-left: 80px;
    padding-top: 5px;
   
}
#ok
{
    margin-left: 250px;
    width: 60px;
    height: 35px;
    box-shadow: green;
    box-shadow: 1px 1px 20px rgba(2, 128, 225, 0.63);
    border: 1px groove;
    border-color: black;
    color: white;
    font-size: 20px;
    font-weight: bold;
    border-radius: 6px;
    background-color: #0aa500;
}
#button
{

    background-color: black;
    color: white;
    border: none;
    border-radius: 6px;
    width: 100px;
    height: 30px;
    font-size: 15px;
  
   
    
}
th, td {
    padding-top: 15px;
    padding-bottom: 15px;
    padding-right: 20px;
     padding-left: 10px; 
    font-size: 20px;
    color: black;
}
        
    </style>
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
</head>
    <body>
       <div class="header">
               @include('include.header1')
              <div class="header-two">
                    <div class="container">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="header-logo">
                            <h1><a href="/"><span>S</span>hopoviA</a></h1>
                            <h6>Your stores. Your place.</h6> 
                        </div>
                    </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="header-search">
                                          <h1 class="one w3-hide-small">Edit Your Profile</h1>
                                          
                                            
                        </div>
                        </div>  
                </div>
                </div>
            <div class="header-three">
            <div class="container">
                <div class="menu">
                    <div class="cd-dropdown-wrapper">
                        <a href="/Editprofile">Edit Profile</a>
                       
                    </div>   
                </div>
                <div class="move-text">
                    <div class="marquee"><a> Latest Offers And Discount Are Available Here...... <span>Find The Best Shop Near You!!</span> <span> For The Best Choice , Make Your First Choice - ShopoviA</span></a></div>
                    <script type="text/javascript" src="js/jquery.marquee.min.js"></script>
                    <script>
                      $('.marquee').marquee({ pauseOnHover: true });
                    
                    </script>
                </div>
            </div>
        </div>
            </div>
      
           @yield('content')

  
          @include('include.productfooter')  
            
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
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    <script src="js/minicart.js"></script>
    </body>
</html>





