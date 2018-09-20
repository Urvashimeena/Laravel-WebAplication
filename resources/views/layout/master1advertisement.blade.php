<!DOCTYPE html>


<title>ShopoviA-Your Store Your Place</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
    <script src="js/bootstrap.js"></script>

<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
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
			
			$().UItoTop({ easingType: 'ease@media (max-width: 600px)OutQuart' });
			
		});
	</script>
	<style>
	.modal-content {
	   						
							height: 700px;
						
						}
	@media (max-width: 600px)
	{
		.modal-content {
	   						
							height: 730px;
							width: 345px;
						}
						#form {
							    width: 200px;
							    height: 50px;
							}
							.button {
    							width: 200px;
    						}
    						    .w3-hide-small {
							         display: none!important;
							     }
							     .move-text {
							    float: none;
							    width: 100%;
							    padding: 0em;
							    margin-top: -20px;
							}
							.cd-dropdown-trigger {
							    font-size: .5em;
							    padding: 0 30px 0 0;
							}
							.header-logo {
							    float: none;
							    margin-left: 50px;
							}
							.header-logo h1, .header-two.scroll-to-fixed-fixed .header-logo h1 {
								    font-size: 3em;
								}
						}
#hh{
    font-size: 15px;
    color: #0d1e3d;
    font-family: fantasy;
} 
#aa
{
    font-family: cursive;
    font-size: 35px;
    padding-left: 45px;
}
.modal-content8 {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    height: 240px;
    width: 450px;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    background-color: white;
    border-bottom: #ff4769 groove thick;
    margin-top: 180px;
    margin-left: 50px;
}

#mega
{
   width: 200px;
    height: 50px;
    margin-top: 15px;
    background-color: black;
    color: white;
    border: none;
    font-size: 20px;
    border-radius: 6px;
    margin-left: 15px;
}
#shift
{
    padding-left: 65px;
    font-size: 15px;
}
#normal
{
    font-size: 20px;
    width: 200px;
    height: 50px;
    margin-top: 15px;
    background-color: #0f2244;
    color: white;
    border: none;
    border-radius: 6px;
}
	.text
	
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
	
	
           #none
           {
               display: none;
           }
		   
	
			 #form2
            {
                width:500px;
                height: 40px;
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
			.modal-body {
				position: relative;
				padding: 10px;
			}
			
			 #form1
            {
                width:500px;
                height: 110px;
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
          
          
           #none
           {
               display: none;
           }
           #submit
           {    
              width: 200px;
              height: 30px;
              background-color: #204d74;
              margin-left: 250px; 
              border-radius: 5px;
              border: none;
              color: white;
           }
		   .btn2 {
				display: inline-block;
				padding: 6px 12px;
				margin-bottom: 0;
				font-size: 14px;
				font-weight: normal;
				line-height: 1.42857143;
				text-align: center;
				white-space: nowrap;
				vertical-align: middle;
				margin-left: 60px;
				width: 500px;
				height:50px;
				-ms-touch-action: manipulation;
				touch-action: manipulation;
				cursor: pointer;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				background-image: none;
				border: 1px solid transparent;
				border-radius: 4px;
           
		   }
		   
		   .btn1 {
					display: inline-block;
					padding: 6px 12px;
					margin-bottom: 0;
					font-size: 14px;
					font-weight: normal;
					line-height: 1.42857143;
					text-align: center;
					white-space: nowrap;
					vertical-align: middle;
					-ms-touch-action: manipulation;
					touch-action: manipulation;
					cursor: pointer;
					-webkit-user-select: none;
					-moz-user-select: none;
					-ms-user-select: none;
					user-select: none;
					background-image: none;
					border: 1px solid transparent;
					border-radius: 4px;
					width: 250px;
				}
				
					.cd-dropdown-trigger1 
					{
						display: block;
						position: relative;
						color: #fff;
						font-family:cursive;
						
						line-height: 50px;
						outline:none;
						text-decoration:none;
                                                font-size: 20px;
                                            
					 }
					.cd-dropdown-trigger1:hover {
					 color: red;
					}
					.modal-content1 {
						position: relative;
						background-color: #fff;
						-webkit-background-clip: padding-box;
						background-clip: padding-box;
						height: 700px;
						width: 645px;
						border: 1px solid #999;
						border: 1px solid rgba(0, 0, 0, .2);
						border-radius: 6px;
						outline: 0;
						-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
						box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
					}
				input[type="submit"]:hover
				{
							background: #204d74;
						    letter-spacing: 5px;
							font-weight:bold;
					        transition: .5s all;
							transition-property: all;
							transition-duration: 0.5s;
							transition-timing-function: initial;
							transition-delay: initial;
							color:white;
				}
				.modal-content5 {
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

.modal-content4 {
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
.modal-content5 .modal-title 
{
    font-size: 21px;
}
.modal-content4 .modal-title 
{
    font-size: 21px;
}
.modal-content5
{
    width: 300px;
        height: 135%;
}
.modal-content4
{
    width: 300px;
        height: 255%;
}

.modal-content1 {
    height: 700px;
    width: 345px;
}
.modal-content1 #form2 {
    width: 200px;
    height: 50px;
}
.modal-content8
{
	height: 240px;
    width: 250px;
}
#aa {
    font-family: cursive;
    font-size: 15px;
    }
    #shift {
    padding-left: 55px;
    font-size: 7px;
}
#normal {
   margin-left: 20px;
}

}
			
	</style>
	

<body>
        <div class="header">
             @include('include.header1')
              @include('include.header2')
               @include('include.header3')
        </div>
       
          @yield('content')

  
        @include('include.footer1')
       
    </body>

