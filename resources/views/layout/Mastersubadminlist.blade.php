<html>
<head>
<title>Admin Panel</title>
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
 <script src="js1/bootstrap-filestyle.js" type="text/javascript"></script>
<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
<script>

function showEdit(editableObj) {
			$(editableObj).css("background","#FFF");
}
function saveToDatabase(editableObj,column,id) {

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
   $(editableObj).css("background","#FFF url(images/loaderIcon.gif) no-repeat right");
   $.ajax({
    type: "POST",     
    url: './updaterole',
    
    
   // data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
    data:'column='+column+'&editval='+$(editableObj).text()+'&id='+id,
    success: function(data){
      $(editableObj).css("background","#FDFDFD");
    }
  });

}

function deleteRecord(id) {
	if(confirm("Are you sure you want to delete this row?")) {
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
		$.ajax({
			url: './deletesubadmin',
			type: "POST",
			data:'id='+id,
			success: function(data){
			  $("#table-row-"+id).remove();
                           toastr.success('Client Deleted Successfully.', 'Success', {timeOut: 5000});
                            getPageData();
                       
			}
		});
               
	}
         
}

 function showUser(str1)
              {
                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                 
                       $.ajax({
                        type: "POST",     
                        url: './updatesearch',


                       // data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
                        data: {str1:str1},
                        success: function(data)
                        {
                         
                        }
                      }).done(function(response)
                      {
                          $("#a").html(response);
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
    
    
    .header-search input[type="search"] 
    {
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
    #ww
    {
        color: white;
        padding-top: 10px;
    }
   .btn-default1 {
    color: #333;
    background-color: #fff;
    padding-left: 2px;
    /* border-color: #ccc; */
}
#but
{
    
    margin-left: 250px;
    margin-top: -45px;
    height: 10px;
    font-size: 15px;
    width: 30px;
    padding-top: 0px;
    padding-bottom: 35px;
    background-color: black;
    color: white;
    border: none;
}

</style>
</head>

<body>
     <div id="wrapper">

             @include('include.adminheader')
              @include('include.subadmin')
        
    
      </div>
        <script src="js1/bootstrap.min.js"></script>
</body>
   
</html>
