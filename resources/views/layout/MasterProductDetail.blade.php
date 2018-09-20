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
<!--<script src="../js/jquery-2.2.3.min.js"></script> -->
<script src="../js/owl.carousel.js"></script>

<!-- //js --> 
<script src="../js1/jquery.min.js" type="text/javascript"></script>
<!-- web-fonts -->
<!--<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>-->
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
 <meta name="csrf-token" content="{{ csrf_token() }}" />
<script>
     function search(str1)
     {
                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                 
                       $.ajax({
                        type: "POST",     
                        url: './search',


                       // data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
                        data: {str1:str1},
                        success: function(data)
                        {
                         
                        }
                      }).done(function(response)
                      {
                          $("#txt").html(response);
                      });

     }
    </script>
<style>
@media(max-width: 750px)
{
    .wide-hide
    {
        display: none;
    }
    .header-search input[type="search"] {
    width: 100%;
    padding: 1em 5em 1em 1em;
    font-size: 1em;
    color: #fcf8e3;
    outline: none;
    border: 1px solid #bd1414;
    background: #000000;
    -webkit-appearance: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    border-radius: 10px;
    margin-left: 5%;
}
.header-search .btn-default {
    border: none;
    position: absolute;
    top: 0px;
    right: 0px;
    width: 70px;
    height: 50px;
    outline: none;
    box-shadow: none;
    background: #f44336;
    padding: 0;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    /* border-radius: 10px; */
    -webkit-appearance: none;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
    margin-right: -10%;
}
}












.header-search .btn-default {
    border: none;
    position: absolute;
    top: 0px;
    right: 0px;
    width: 70px;
    height: 50px;
    outline: none;
    box-shadow: none;
    background: #f44336;
    padding: 0;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    /* border-radius: 10px; */
    -webkit-appearance: none;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
    margin-right: -50%;
}

    #img{
        width: 200px;
        height: 150px;
        
        
    }
    
    .scrollable-menu {
    height: auto;
    max-height: 450px;
    overflow-x: hidden;
}
   
  #form
            {
                width:500px;
                height: 50px;
                padding-left: 30px;
                margin-left: 60px;
                padding-bottom: 0px;
		        border: 1px solid #E2DCDC;
				border-top-color: rgb(226, 220, 220);
				border-top-style: solid;
				border-top-width: 1px;
				border-right-color: rgb(226, 220, 220);
				border-right-style: solid;
				border-right-width: 1px;
				border-bottom-color: rgb(226, 220, 220);
				border-bottom-style: solid;
				border-bottom-width: 1px;
				border-left-color: rgb(226, 220, 220);
				border-left-style: solid;
				border-left-width: 1px;
				border-image-source: initial;
				border-image-slice: initial;
				border-image-width: initial;
				border-image-outset: initial;
				border-image-repeat: initial;
               
            }
    
.header-cart {
    float: right;
    /* margin-right: 10px; */
    /* margin-top: 10px; */
    padding-left: px;
    /* padding-right: 10px; */
    margin-top: 20px;
    margin-right: 60px;
}
#name {
    position: fixed;
    font-size: 16px;
    padding-left: -110px;
    margin-right: 15px;
   
    margin-top: -10px;
    color: #f44336;
    font-weight: bold;
}
.header-search input[type="search"] {
    width: 130%;
    padding: 1em 5em 1em 1em;
    font-size: 1em;
    color: #fcf8e3;
    outline: none;
    border: 1px solid #bd1414;
    background: #000000;
    -webkit-appearance: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    border-radius: 10px;
    margin-left: 5%;
}

#button {
    position: fixed;
    background-color: black;
    color: white;
    border: none;
    border-radius: 6px;
    width: 100px;
    height: 30px;
    margin-top: 20px;
    /* margin-right: 30px; */
   /* margin-left: -21px;*/
}
    .modal-content {
    position: relative;
    background-color: #131313;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
     height: 400px; 
    width: 650px;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
}
.modal-content1 {
    position: relative;
    background-color: #131313;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
     height: 750px; 
    width: 650px;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
}
@media (max-width: 480px)
{
   .modal-content {
    position: relative;
    background-color: #131313;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
     height: 400px; 
    width: 350px;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
}
.modal-content1 {
    position: relative;
    background-color: #131313;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
     height: 750px; 
    width: 350px;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
}

    .modal-body p {
    font-size: 0.85em;
    color: #FFF6EB;
    line-height: 1.8em;
    font-family: inherit;
}
.modal-content5
{
    width: 300px;
}
 .address-left ul li {
    font-size: 0.4em;
}
.modal-title
{
    color: white;
    font-size: 15px;
}


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
<script type="text/javascript" src="../js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
	$(function()
	{
		$('.scroll-pane').jScrollPane();
	});
</script>
<!-- //the jScrollPane script -->
<script type="text/javascript" src="../js/jquery.mousewheel.js"></script>

</head>
    <body>
        <div class="header">
                    @include('include.header1')
                    @include('include.shopdetailheader')
                    @include('include.headerdetail')
        </div>
        
          @yield('content')
          
         @include('include.footer3')
        
         
         
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
    <script src="../js/bootstrap.js"></script>
    </body>
</html>
