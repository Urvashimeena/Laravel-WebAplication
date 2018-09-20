<html>
<head>
<title>ShopoviA-Your Store Your Place</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css1/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css1/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css1/lines.css" rel='stylesheet' type='text/css' />
<link href="css1/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="js1/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css1/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js1/metisMenu.min.js"></script>
<script src="js1/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js1/d3.v3.js"></script>
<script src="js1/rickshaw.js"></script>
  <script>
             
            
            
            
                
                </script>
 
   <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
   <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 <meta name="csrf-token" content="{{ csrf_token() }}" />

<script>
//
//function showEdit(editableObj) {
//			$(editableObj).css("background","#555");
//}
function saveToDatabase(editableObj,column,id) {

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
   $(editableObj).css("background","#999 url(images/loaderIcon.gif) no-repeat right");
   $.ajax({
    type: "POST",     
    url: './savestatus',
    
    
   // data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
    data:'column='+column+'&editval='+$(editableObj).text()+'&id='+id,
    success: function(data){
      $(editableObj).css("background","#fff5f5");
      toastr.success('Category Updated Successfully');
    }
  });

}



 

</script>
<style>
    .header-search .btn-default {
    border: none;
    position: absolute;
    top: 0px;
    right: 0px;
    width: 70px;
    height: 50px;
    outline: none;
    box-shadow: none;
    background: #0078C1;
    padding: 0;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    /* border-radius: 10px; */
    margin-right: 25px;
    border-radius-bottom-right: 0px;
    -webkit-appearance: none;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
     margin-top: 25px;
}
    
   
    .header-search input[type="search"] {
    width: 450px;
    padding: 1em 5em 1em 1em;
    font-size: 1em;
    color: #fcf8e3;
    outline: none;
    border: 1px solid #0078C1;
    background: #000000;
    -webkit-appearance: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    border-radius: 10px;
    height: 50px;
    margin-top: 25px;
}
    
    
    .ajax-action-links {color: #09F; margin: 10px 0px;cursor:pointer;}
   .r3_counter_box {
    min-height: 70px;
    background: #ffffff;
    padding: 15px;
   padding-left: 30px;
    padding-top: 30px;
    font-family: cursive;
    font-weight: bolder;
    width: 1060px;
    color:#124461;
}
table tr 
{
    border: #0078C1 thick groove;
    margin-left: 50px;
}
table th
{
    border: #0078C1 thick groove;
    margin-left: 50px;
}
tbody td
{
    border: #0078C1 thick groove;
    margin-left: 50px;
}
#offer
{
        font-size: 35px;
    text-align: center;
    font-weight: bold;
    color: #0078c1;
    font-family: -webkit-body;
}
@media(max-width: 600px)
{
    h1 {
    font-size: 20px;
    }
}
#ww
{
  color: white;
  padding-top: 10px;
}
</style>
</head>

<body>
     <div id="wrapper">

             @include('include.adminheader')
             
             @include('include.shopkeeperadvertisement')
        
    
      </div>
        <script src="js1/bootstrap.min.js"></script>
</body>
   
</html>
