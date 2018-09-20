<html>
<head>


<style>
#a2{
margin-left:500px;
font-family:"Elephant";
text-shadow:2px 2px;
color:orange;
}
.modal-lg
{
  max-width: 900px
}

.header-two.scroll-to-fixed-fixed .header-search #selecter
{
    height: 45px;
}


 
.col-md-4:hover .overlay {
  opacity: 0.8;
}
#q
{
    color:white;
}
.text {
  color: white;
 
  font-size: 30px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

#discount
{
    font-size: 60px;
    color: #f13434;
    margin-left: 450px;
    font-family: monospace;
    font-weight: bold;
    text-shadow: 5px 5px #333;
}
.col-xs-12 {
   
    padding-bottom: 20px;
}

@media all and (max-width: 2000px) { /* screen size until 1200px */
   #img
{
    width:100%;
    height: 50%;
    margin-bottom: 10px;
    border: #000 solid thin;
    padding: 10px;
}
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
 /* height: 250px;
  width: 300px;*/
  width:100%;
    height: 100%;
  opacity: 0;
  transition: .5s ease;

  background-color: black;
}
    #discount1
{
     padding-bottom: 20px;
    font-size: 400%;
    color: #f13434;
     font-family: monospace;
    font-weight: bold;
    text-shadow: 5px 5px #333;
}
}
@media all and (max-width: 1000px) { /* screen size until 1000px */
 .overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
 /* height: 250px;
  width: 300px;*/
width: 90%;
    height: 95%;
  opacity: 0;
  transition: .5s ease;

  background-color: black;
}
 #img
{
    width:100%;
    height: 40%;
    margin-bottom: 10px;
    border: #000 solid thin;
    padding: 10px;
}

    #discount1
{
    font-size: 200%;
    color: #f13434;
    padding-bottom: 20px;
     font-family: monospace;
    font-weight: bold;
    text-shadow: 5px 5px #333;
}
    }
@media all and (max-width: 500px) { /* screen size until 500px */
 .overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
 /* height: 250px;
  width: 300px;*/
width:100%;
    height: 90%;
  opacity: 0;
  transition: .5s ease;

  background-color: black;
}
.text {
    color: white;
    font-size: 10px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
}
  #img
{
    width:100%;
    height: 10%;
    margin-bottom: 10px;
    border: #000 solid thin;
    padding: 10px;
}

   #discount1
{
    font-size: 150%;
    color: #f13434;
     font-family: monospace;
    font-weight: bold;
    text-shadow: 5px 5px #333;
}
    }


</style>
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
<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<script src="js/owl.carousel.js"></script>  
<script>
$(document).ready(function() { 
  $("#owl-demo").owlCarousel({ 
    autoPlay: 3000, //Set AutoPlay to 3 seconds 
    items :4,
    itemsDesktop : [640,5],
    itemsDesktopSmall : [480,2],
    navigation : true
 
  }); 
}); 
</script>
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
<script src="js/bootstrap.js"></script> 
<script type="text/javascript">

   
 function modleclose()
 {
     $.modal.close();
 }
 
    </script>
    
    <script>
    function load()
    {
   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
   $.ajax({
    type: "GET",     
    url: './delete',
    

  });


   } 
        </script>
        
<style>

.modal-header1 {
        min-height: 16.42857143px;
        padding: 15px;
        border-bottom: 1px solid #e5e5e5;
        background-color: #082d4a;
        top: 0px;
        margin-top: -29px;
        
    
}
.footer-grids ul li {

    cursor: pointer;
 
}
@media all and (max-width: 2000px) { 

.modal-content6   {
    
         position: relative;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        height: 350px;
        width: 645px;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        outline: 0;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        margin-top: 100px;
}
.forgot-grid {
    margin-top: 2em;
        margin-left: 75%;
}

}
@media all and (max-width: 1000px) { 
  .forgot-grid {
    margin-top: 2em;
    margin-left: 68%;
}


.modal-content6   {
    
         position: relative;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
            height: 350px;
          width: 500px;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        outline: 0;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        margin-top: 100px;
}
}
@media all and (max-width: 500px) { 


.modal {
    margin-left: -1%;
    margin-top: 7%;
}
.forgot-grid {
    margin-top: 2em;
    margin-left: 45%;
}

.modal-content6   {
    
         position: relative;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
            height: 350px;
          width: 300px;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        outline: 0;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        margin-top: 100px;
}
}



/*  #form
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
               
            }*/

#a1 {
    padding-left: 700px;
    margin-left: -11111111120px;
}
.modal-header {
    min-height: 16.42857143px;
    position: relative;
    
   
}
#al
{
    padding-left: 160px;
}
.row {
    /* margin-right: -15px; */
    margin-left: -40px;

    margin-top: 15px;
  }
  .modal {
  
   margin-top: 7%;
  }
  .agileits-modal h4 {
    color: #1c315a;
    /* font-family: 'Offside', cursive; */
    font-size: 1.8em;
    text-shadow: 2px 1px black;
  }
.modal-content5 {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    height: 200px;
    width: 490px;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
}

@media all and (max-width: 2000px) { /* screen size until 1200px */
.modal {
  
    margin-left: -10%;
    margin-top: 7%;
  }
.btn-danger {
    color: #fff;
    background-color: black;
    border-color: #d43f3a;
    width: 260px;
    height: 83px;
    margin-left: -18px;
    
}
.btn-danger a
{
  color: white;
  font-weight: bold;
  font-size: 20px;
}
}
@media all and (max-width: 720px) { /* screen size until 1000px */
 .modal {
  margin-left: 10%;
   margin-top: 7%;
  }
 .row {
    /* margin-right: -15px; */
    margin-left: -26px;
    margin-top: -15px;
}
.btn-danger {
    color: #fff;
   background-color: black;
    border-color: #d43f3a;
        width: 117px;
    height: 97px;
}
.btn-danger a
{
  color: white;
  font-weight: bold;
  font-size: 20px;
}
    }

@media all and (max-width: 500px) {

 /* screen size until 500px */
.modal {
  margin-left: 10%;
   margin-top: 7%;
  }
 .row {
    /* margin-right: -15px; */
    margin-left: -26px;
    margin-top: -15px;
}
.btn-danger {
    color: #fff;
    background-color: black;
    border-color: #d43f3a;
    width: 139px;
    height: 106px;
    color: white;
}
.btn-danger a
{
  color: white;
  font-weight: bold;
  font-size: 20px;
}
 }
.modal-xs {
    max-width: 290px;
}
.modal-title

{
  color:white;
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
#name
{
    font-size: 16px;
    padding-left: -110px;
    margin-right: 15px;
   
    margin-top: -10px;
    color: #f44336;
    font-weight: bold;
}
#button
{

    background-color: black;
    color: white;
    border: none;
    border-radius: 6px;
    width: 100px;
    height: 30px;
  
   
    
}

.header-search input[type="search"] {
    width: 500px;
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
    margin-left: 25px;
}
#selecter
{
        position: absolute;
    background-color: #f14134;
    z-index: 100;
    margin-left: -85px;
    /* margin-right: 6600px; */
    width: 121px;
    height: 50;

    padding-left: 20px;
    font-weight: bold;
    color: white;
}

select option {
    background-color: black;
    color: white;
}
@media (max-width: 480px)
{
 .menu {
    width: 30%;
    text-align: center;
    font-size: 7px;
}
.move-text {
    float: none;
  
    padding-top: 15px;
    padding-top: -20px;
    text-align: left;
 
    font-size: 10px;
}
.marquee {
    width: 50%;
    margin: 15px auto;
    font-size: 1em;
    overflow: hidden;
}
.header-logo
{
       font-size: 25px;
    text-align: center;

}


}
@media(max-width: 1000px)
{
     .menu {
    width: 30%;
    text-align: center;
    font-size: 7px;
}
.move-text {
    float: none;
  
    padding-top: 15px;
    padding-top: -20px;
    text-align: left;
 
    font-size: 10px;
}
.marquee {
    width: 50%;
    margin: 15px auto;
    font-size: 1em;
    overflow: hidden;
}

}

@media(max-width:600px){ 
.header-search h1
{
        margin-left: 30%;
    font-size: 20px;
}
.marquee {
    width: 50%;
    margin: 15px auto;
    font-size: 1em;
    overflow: hidden;
}

}
@media (max-width: 480px)
{
    .header-search, .header-two.scroll-to-fixed-fixed .header-search {
         margin: -1.9em 0em 1.2em 2em;
    width: 89%;
}
.marquee {
    width: 50%;
    margin: 5px auto;
    font-size: 1em;
    overflow: hidden;
}
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
.modal-content6 {
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


</style>

</head>

<body onload="load()">


              <div class="header">


                    @include('include.header1')
                    

                    <?php
        $name = Session::get('client_name');
              
 ?>
<div class="header-two"><!-- header-two -->
            <div class="container">
                            <div class="row">
                            <div class="col-md-4">
                                    <div class="header-logo">
                                    <h1><a href="/"><span>S</span>hopoviA</font></a></h1>
                                    <h6>Your stores. Your place.</h6> 
                                </div>  
                            </div>
                            <div class="col-md-8">
                              <div class="header-search">
                                                    
                              <h1 class="align">LOGIN HERE!!!</h1>
                            
                            </div>
                            </div>
                           

                            </div>
                                
                        
                                
                    
                                                                
                                
                                
                <div class="clearfix"> </div>
            </div>      
        </div>








                    @include('include.header4')

              

              </div>

             
                    @yield('content')
                    @include('include.footer')








</body>
</html>