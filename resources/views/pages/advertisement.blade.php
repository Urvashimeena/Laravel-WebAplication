@extends('layout.master1advertisement')

@section('content')
<?php
      
        $shop_code=Session::get('shop_code');
         $name=Session::get('Shopkeeper_name');
         $mega=Session::get('mega');
         $login = Session::get('islogin');
            
 ?>
@if($login==true)
	<div class="agileits-modal modal fade" id="myModal88"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content8">
				<div class="modal-header">
                                    <font id="aa">Place Your Ad Here</font>
                                    <p id="shift">We Make You Better At What You Do Best</p>
				</div>
				<div class="modal-body modal-body-sub"> 
                                    <button id="mega" data-dismiss="modal" onClick="choose('mega')">Mega Offer</button>
                                    <button id="normal" data-dismiss="modal" onClick="choose('normal')">Other Offer</button>
                                        
				
				</div>
				
			</div>
		</div>
	</div>
	
            
           
       <?php
       
        if($mega===0)
        {
           
            
            echo "<script>
                  $(window).on('load',function(){
                 $('#myModal88').modal('show');
                  }); 
                 

                var use;
                function choose(user)
                {
                    use=user;

                    document.getElementById('hidden').value = use;
                    document.getElementById('hidden1').value = use;
                    document.getElementById('hidden2').value = use;


                }
             
              </script>";
        
        }
       
       
        ?>



       
        
         
             
	
        
	<div class="login-page">
		<div class="container"> 
			
			<div class="login-body">
					
					<div class="dropdown">
						  <button class="btn1 btn-primary" type="button" data-toggle="dropdown">
                                                       Add Your Offers
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
							<li><a href="#" data-toggle="modal" data-target="#modalPurchase">Discount On Purchase</a></li>
							<li><a href="#" data-toggle="modal" data-target="#modalproduct">Discount On product</a></li>
							<li><a href="#" data-toggle="modal" data-target="#modalfree">Buy Something Get Something Free</a></li>
						  </ul>
                                            
                                        </div>
                                 
			</div>  
			
		</div>
	</div>
	
	<div id="modalPurchase" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" style="text-align-last: center">Enter Your Advertisement And Product Detail </h4>
				</div>
				<div class="modal-body">
				<form action="/insertpurchase" method="post" enctype="multipart/form-data">
				        <input type="text" id="form"  name="product" title="Enter Product" placeholder="Product Name" required=""><br><br>
                                        <input type="text" id="form"  name="description" title="Enter Product" placeholder="Product Desciption" required=""><br><br>
                                      
                                     
                                        <input type="hidden" name="typeoffer" id="hidden" value="normal">
                                     
                                      
					<input type="number" id="form"  name="actualprice" title="Total Amount On Which You Give Discount" placeholder="Total price" required=""><br><br>
					
					<input type="number" id="form" name="discount" title="Discount On Product" placeholder="Discount" required=""><br><br>
                                          <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
					<input type="date" id="form" name="stardate"  title="Start Date Of Your Advertisement" required=""><br><br>
                                        <input type="hidden" name="shop_code" value="<?php echo $shop_code; ?>">
                                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                                        <input type="date" id="form" name="enddate"  title="End Date Of Your Advertisement" required=""><br><br>
                                              <button type="button" class="button" title="passport size photo" onclick="document.getElementById('upload2').click();"><p  id="co">Upload Your Product Image</p></button>
								<div id="none">
								<input type="file" placeholder="photo" name="image" class="form" id="upload2" title="Product Image" required="" /><br><br>
								</div>
								
								<br><br>
                                   <select name="type" id="form">
                                       <option value="Liquid">Liquid</option>
                                       <option value="Solid">Solid</option>
                                       <option value="Packets">Packets</option>
                                       <option value="Peices">Peices</option>
                                   </select>
					<br><br>
					<input type="submit" id="form">
				 
				</form>
				</div>
				
			</div>
		</div>
	</div>
	
	<div id="modalproduct" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content1">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" style="text-align-last: center">Enter Your Advertisement And Product Detail </h4>
				</div>
				<div class="modal-body">
				
                                    <form action="/discountproduct" method="post" enctype="multipart/form-data">
				        <input type="text"  id="form2"  name="productname" title="Product Name On Which Yor Have Offer" placeholder="Product Name" required=""><br><br>
					<input type="hidden" name="typeoffer" id="hidden1" value="normal">
                                       
                                        
					<input type="text" id="form2" name="description" title="Description  Of Your product"  placeholder="Description" required=""><br><br>
					
                                        <input type="hidden" name="shop_code" value="<?php echo $shop_code; ?>">
                                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                                         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
					<input type="number" id="form2"  name="actualprice" title="Actual Price  Of Product" placeholder="Actual price" required=""><br><br>
					<input type="number" id="form2" name="discount" title="Discount On Product" placeholder="Discount" required=""><br><br>
					
                                         <input type="date" id="form2" name="startdate" title="Start_date Of Your Advertisement" placeholder="start_date" required=""><br><br>
                                         <input type="date" id="form2" name="enddate" title="End_date Of Your Advertisement" placeholder="End_date" required=""><br><br>
				         <button type="button" class="button" title="Product Image" onclick="document.getElementById('upload').click();"><font color="white">Upload image</font></button>
                                         <div id="none">
                                         <input type="file"  id="upload" name="productimage"  required=""><br><br>
                                         </div>
					 <br><br>
				      
                                        <select name="type" id="form">
                                            <option value="Liquid">Liquid</option>
                                            <option value="Solid">Solid</option>
                                            <option value="Packets">Packets</option>
                                            <option value="Peices">Peices</option>
                                        </select>
				   
					<br><input type="submit" id="form2">
				</form>
				</div>
							</div>
		</div>
	</div>
	
	
	<div id="modalfree" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content1">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" style="text-align-last: center">Enter Your Advertisement And Product Detail </h4>
				</div>
				<div class="modal-body">
				
                                    <form action="/buyget" method="post" enctype="multipart/form-data">
				    <input type="text"  id="form2"  name="productname" title="Product Name On Which You Have Offer" placeholder="Product Name" required=""><br><br>
					
					<input type="text" id="form2" name="description" title="Description Of Your product" placeholder="Description" required=""><br><br>
					
                                        <input type="hidden" name="typeoffer" id="hidden2" value="normal">
                                        
					<input type="number" id="form2"  name="buy" title="Get Buy Product" placeholder="Number Of Product To Buy" required=""><br><br>
					<input type="number" id="form2" name="get" title=" Get Free product " placeholder="Number Of Product To Get" required=""><br><br>
					<input type="hidden" name="shop_code" value="<?php echo $shop_code; ?>">
                                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                                         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
					<input type="date" id="form2" name="startdate" title="Start_date Of Your Advertisement" placeholder="start_date" required=""><br><br>
					<input type="date" id="form2" name="enddate" title="End_date Of Your Advertisement" placeholder="End_date" required=""><br><br>


			
                                         <input type="file"  id="upload" name="image"  required=""><br><br><br><br>
                                         



                                         
                                  
                                             <br><br>
					<select name="type" id="form">
                                            <option value="Liquid">Liquid</option>
                                            <option value="Solid">Solid</option>
                                            <option value="Packets">Packets</option>
                                            <option value="Peices">Peices</option>
                                        </select><br>
					<input type="submit">
				</form>
				</div>
				
			</div>
		</div>
	</div>
	
	@else

	<script type="text/javascript">
    window.location="{{URL::to('/login')}}";
</script>
@endif 
	
@stop