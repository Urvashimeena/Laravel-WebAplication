<?php
        $name = Session::get('Shopkeeper_name');
        $number=Session::get('NumOfProduct');
      
 ?>
@extends('layout.MasterAddProduct')
@section('content')
       
             <div class="agileits-modal modal fade" id="myModal88"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content9">
				
				<div class="modal-body modal-body-sub"> 
                                    <p id="msg">Item Limit Is 6.You Have To Delete Some Item To Add More Now</p><br>
                                    <button id="ok" data-dismiss="modal">OK</button>
				
				</div>
				
			</div>
		</div>
	</div>
         <?php
       
        if($number>5)
        {
           
            
            echo "<script>
                  $(window).on('load',function(){
                 $('#myModal88').modal('show');
                  });
                  </script>"; 
       }
       ?>
	<div class="products">	 
		<div class="container">
			<div class="col-md-12 product-w3ls-right">
			
		
			     <div class="products-row">
                                  @foreach ($category as $result)
                                   <div id="box_{{$result->product_id}}"> 
					<div class="col-md-3 col-sm-3 col-xs-3 product-grids"> 
                                            
						<div class="agile-products">
                                                   
                                                 <a class="ajax-action-links success" onclick="deleteRecord('{{$result->product_id}}');">
                                                    <span id="spn" class="glyphicon glyphicon-remove" ></span></a> 
							<div class="new-tag"><h6>{{$result->discount}}%<br>Off</h6></div>
                                                        
							<img src="upload/<?php echo $name?>/product/{{$result->product_image}}" id="img" class="img-responsive" alt="img">
							<div class="agile-product-text">              
<!--                                                            <img src=Urvashi Meena/product/2016-12-17_23-18-21-351.png" alt=""/>-->
								
                                                               <h5><a href="">{{$result->product_name}}</a></h5> 
                                                               @if($result->buy==0)
                                                               <h6><del>{{$result->actual_price}}</del>{{$result->selling_price}}</h6> 
                                                               
                                                               @else
                                                               <h6>Buy {{$result->buy}} Get {{$result->get}}</h6>
                                                               @endif
								
								
									<button type="submit" class="w3ls-cart pw3ls-cart">
                                                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
<!--                                                                            <a href="#" value = "1" data-toggle="modal" data-target="#">
                                                                                {{$result->product_name}}</a>-->
                                                                                        <a href="#" data-toggle="modal" data-target="#{{$result->product_id}}">
                                                                                         {{$result->product_name}}
                                                                                        </a>
                                                                        </button>
								
							</div>
                                                    </div>
						</div> 
					</div>
                                   <div id="{{$result->product_id}}" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                    <!-- Modal content-->
                                                            <div class="modal-content3">
                                                                            <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                    <h4 class="modal-title" style="text-align-last: center">Description Of Your Product<br></h4>
                                                                            </div>
                                                                            <div  class="modal-body">
                                                                                
                                                                               
                                                                                <h1 id="sh">  @if($result->buy!=0)
                                                                                    <b>Description</b>={{$result->description}}<br>
                                                                                    <b>Number of Product to Buy is</b> {{$result->buy}}<br>
                                                                                    <b>Number of Product You Get Free</b> {{$result->get}}<br>
                                                                                    <b>You Get discount of</b> {{$result->discount}}<br>
                                                                              
                                                                                @else
                                                                                <b>Description</b> :-{{$result->description}}<br>
                                                                                <b>Total Price</b>={{$result->actual_price}}<br>
                                                                                <b>Discount Provided</b> ={{$result->discount}}<br>
                                                                                @endif
                                                                                </h1>
                                                                            </div>

                                                                    </div>
                                                            </div>
                    </div>
                                       @endforeach 
					
				</div>
			
			</div>
                   
			<div class="col-md-3 rsidebar">
					 
				</div>
				
				
			</div>
		
	</div>
	@stop