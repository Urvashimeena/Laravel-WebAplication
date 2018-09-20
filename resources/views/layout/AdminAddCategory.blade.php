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
<link href="css1/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js1/jquery.min.js"></script>
<!----webfonts--->

<!----webfonts--->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js1/bootstrap.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
   <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<style>
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
    
    margin-left: 240px;
    margin-top: -45px;
    height: 10px;
    font-size: 15px;
    width: 40px;
    padding-top: 0px;
    padding-bottom: 35px;
    background-color: black;
    color: white;
    border: none;
}
    #one1
    {
        font-size: 45px;
        font-family: cursive;
        color: black;
        font-weight: bolder;
       /* padding-left: 280px;*/
       text-align: center;
        text-shadow: 4px 4px rgba(51, 122, 183, 0.65);

    }
 input[type="submit"], .btn-success1 {
    font-size: 14px;
    font-weight: 300 !important;
    color: #fff;
    cursor: pointer;
    outline: none;
    padding: 10px 15px;
    width: 37%;
    border: none;
    background: rgb(6, 217, 149);
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -o-border-radius: 2px;
    text-transform: uppercase;
        margin: 0 0 1em 0;
      color: white;
    font-weight: bold;
    margin-left: 330px;
    height: 50px;
        
}


/*.btn-default
{
     height: 50px;
    font-size: 14px;
    font-weight: 300 !important;
    color: #fff;
    cursor: pointer;
    outline: none;
    padding: 10px 15px;
    width: 37%;
    border: none;
    background: rgb(4, 47, 74);
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -o-border-radius: 2px;
    text-transform: uppercase;
        margin: 0 0 1em 0;
      color: white;
    font-weight: bold;
    margin-left: 330px;
        
}*/
  input[type="text"] {
    width: 37%;
    padding: 15px;
    color: #999;
    font-size: 0.85em;
    outline: none;
    font-weight: 300;
    border: none;
       background: #000;
    margin: 0 0 1em 0;
    border-radius: 7px;
    /* padding-left: 20px; */
    height: 50px;
    color: white;
    font-weight: bold;
    margin-left: 330px;
    padding-left: 150px;
    font-size: larger
  }
table, th, td {
    border: 1px solid black;
    width: 900px;
    height: 40px;
    padding-left: 120px;
    margin-left: 100px;
    background-color: #555;
    color: white;
}
.ajax-action-links {
    color: #09F;
    margin: 10px 0px;
    cursor: pointer;
}
@media (max-width: 600px)
{
  table, th, td {
    border: 1px solid black;
    width: 50px;
    height: 40px;
    padding-left: 10px;
    margin-left: 70px;
    background-color: #555;
    color: white;
    }
    input[type="submit"], .btn-success1 {
    font-size: 14px;
    font-weight: 300 !important;
    color: #fff;
    cursor: pointer;
    outline: none;
    padding: 10px 15px;
    width: 37%;
    border: none;
    background: rgb(6, 217, 149);
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -o-border-radius: 2px;
    text-transform: uppercase;
    margin: 0 0 1em 0;
    color: white;
    font-weight: bold;
    margin-left: 100px;
    height: 50px;
}
input[type="text"] {
    width: 37%;
    padding: 15px;
    color: #999;
    font-size: 0.85em;
    outline: none;
    font-weight: 300;
    border: none;
    background: #000;
    margin: 0 0 1em 0;
    border-radius: 7px;
    /* padding-left: 20px; */
    height: 50px;
    color: white;
    font-weight: bold;
    margin-left: 100px;
    /* padding-left: 150px; */
    font-size: larger;
}
}
</style>
<script src="js1/bootstrap-filestyle.js" type="text/javascript"></script>
<script src="js1/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
    
    
    
   $('#submit').on('submit',function(e)
   {
     
        $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
       $.ajax({
       
         type:"GET",
         data:{'category': $('#category').val()},
         url:"./insertcategory",
         
         success: function(data){
			  $( '#category' ).val('');
                              toastr.success("success");
                             $("table").html(data);
                            
                           
			}
      
       });
       e.preventDefault(e);  
    
           
      
       
        //e.preventDefault();
        
   });
   });
    </script>
     <script>
   function deleteRecord(id) {
	if(confirm("Are you sure you want to delete this row?")) {
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
       
		$.ajax({
			url: './deletecategory',
			type: "POST",
			data:'category_id='+id,
			success: function(){
			  $("#table-row-"+id).remove();
                           toastr.success('Category Deleted Successfully.', 'Success', {timeOut: 5000});
                           // getPageData();

                       
			}
		});
               
	}
         
}


function showEdit(editableObj) {
			$(editableObj).css("background","#555");
}
function saveToDatabase(editableObj,column,id) {

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
   $(editableObj).css("background","#999 url(images/loaderIcon.gif) no-repeat right");
   $.ajax({
    type: "POST",     
    url: './editcategory',
    
    
   // data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
    data:'column='+column+'&editval='+$(editableObj).text()+'&id='+id,
    success: function(data){
      $(editableObj).css("background","#555");
      toastr.success('Category Updated Successfully');
    }
  });

}

    </script>
</head>
    <body>
        
        <div id="wrapper">
           @include('include.adminheader')
            @include('include.categoryitem') 
        </div>
            
         
        <link href="css1/custom.css" rel="stylesheet">

        <script src="js1/metisMenu.min.js"></script>
        <script src="js1/custom.js"></script>
    </body>
</html>
