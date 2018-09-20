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
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script><!-- fixed nav js -->
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
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'> 
<!-- web-fonts -->  
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
	<style>
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
.modal-header {
    min-height: 16.42857143px;
    padding: 15px;
    border-bottom: 10px solid #807777;
}
.modal-title {
    margin: 0;
    line-height: 1.42857143;
    font-family: serif;
    color: #ffffff;
    font-size: 33px;
    font-weight: bold;
}
.modal-body p {
    font-size: 1.2em;
    color: #FFF6EB;
    line-height: 1.8em;
    font-family: inherit;
}
.btn-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc;
}
	.login-page input[type="email"], .login-page input[type="password"] {
    font-size: 1em;
    padding: 0.9em 1em;
    width: 100%;
    color: #999;
    outline: none;
    border: 1px solid #E2DCDC;
    /* background: #FFFFFF; */
    /* margin: 0 0 1em 0; */
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
    transition: .5s all;
    -webkit-appearance: none;
}

.login-page input[type="number"], .login-page input[type="password"] {
    font-size: 1em;
    padding: 0.9em 1em;
    width: 100%;
    color: #999;
    outline: none;
    border: 1px solid #E2DCDC;
    /* background: #FFFFFF; */
    /* margin: 0 0 1em 0; */
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
    transition: .5s all;
    -webkit-appearance: none;
}
.login-page input[type="time"], .login-page input[type="password"] {
    font-size: 1em;
    padding: 0.9em 1em;
    width: 100%;
    color: #999;
    outline: none;
    border: 1px solid #E2DCDC;
    /* background: #FFFFFF; */
    /* margin: 0 0 1em 0; */
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
    transition: .5s all;
    -webkit-appearance: none;
}
.login-page input[type="date"], .login-page input[type="password"] {
    font-size: 1em;
    padding: 0.9em 1em;
    width: 100%;
    color: #999;
    outline: none;
    border: 1px solid #E2DCDC;
    /* background: #FFFFFF; */
    /* margin: 0 0 1em 0; */
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
    transition: .5s all;
    -webkit-appearance: none;
}
	.dropdown-menu > li > a:hover 
	{
		color: blue;
		font-weight:bold;
		background-color:white;
		position: relative;
		
		
	}
	@media (max-width: 1500px)
	{
			#set
			{
			    width: 430px;
			    height: 50px;
			    background-color: rgb(32, 77, 116);
			    color: white;
			}
			.button {
    width: 430px;
    height: 50px;
    background-color: #204d74;
    margin-left: 0px;
    color: white;
}	
	}
	 
	@media (max-width: 480px)
{

    .modal-body p {
    font-size: 0.85em;
    color: #FFF6EB;
    line-height: 1.8em;
    font-family: inherit;
}

.modal-content
{
    width: 300px;
}
	.address-left ul li {
    font-size: 0.4em;
}
.modal-content1 {
    
    height: 770px;
    width: 300px;
}
.modal-title {
   
    font-size: 13px;

}
	.button {
    width: 290px;
    height: 50px;
    background-color: rgb(49, 152, 175);
    color: white;
}
#set {
    width: 290px;
    height: 50px;
    background-color: rgb(49, 152, 175);
    color: white;
}
#head
{
	font-size: 18px;
	text-align: center;
	    float: initial;
}
.header-logo {
    float: inherit;
    text-align: center;
}
.header-search, .header-two.scroll-to-fixed-fixed .header-search {
    margin: 1.2em 0em 1.2em 4em;
}
}


	.teselect

	{
	font-size: 1em;
    padding: 0.9em 1em;
    width: 100%;
    color: #999;
    outline: none;
    border: 1px solid #E2DCDC;
    background: #FFFFFF;
    margin: 0 0 1em 0;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
    transition: .5s all;
    -webkit-appearance: none;
	
	}
	#co
	{
		color:white;
	}
	
	 /*.button
           {
               width: 430px;
               height: 50px;
               background-color: rgb(49, 152, 175);
     
               color: white;
           }*/
           #none
           {
               display: none;
           }
	/*	    #form1
            {
				background-color:rgb(49, 152, 175);
                width:430px;
                height: 50px;
                padding-left: 30px;
                margin-left: 0px;
                padding-bottom: 0px;
		        border: 2px solid #807c7c;
				border-top-color: grey;
				border-left-color: rgb(226, 220, 220);
				border-left-style: solid;
				border-left-width: 1px;
				border-image-source: initial;
				border-image-slice: initial;
				border-image-width: initial;
				border-image-outset: initial;
				border-image-repeat: initial;
               
            }*/
			.cd-dropdown-trigger1 
					{
						display: block;
						position: relative;
						padding: 0 36px 0 20px;
						color: #fff;
						font-family: 'Offside', cursive;
						font-size: 1.3em;
						line-height: 50px;
						outline:none;
						text-decoration:none;
					 }
					.cd-dropdown-trigger1:hover {
					 color: red;
					}

    @media (max-width: 480px)
{
    .cd-dropdown-trigger1 {

    font-size: .5em;
}
}
			ul.dropdown-menu {
				-moz-animation: fadeInUp .2s ease-in;
				-webkit-animation: fadeInUp .2s ease-in;
				animation: fadeInUp .2s ease-in;
				min-width: 120px;
				font-size: 1em;
				
                                top: 125%;
                                z-index: 99;
                                width:430px;
                               
                            }
                            li
                            {
                                /*padding-left: 160px;*/
                                    cursor: pointer;
                            }

			
		   
		   
	</style>
	
</head>
<body>
         <div class="header">
             @include('include.header1')
        </div>
       
          @yield('content')

  
               @include('include.footer1')  
</body>
</html>
