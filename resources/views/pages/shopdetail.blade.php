@extends('layout.MasterShopdetail')
@section('content')
	<div class="products">	 
		<div class="container">  
                 
                         <div class="single-page">
                           
				<div class="row" id="detail-21">
                                    
					<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6 single-top-left">	
						<div class="flexslider">
                                            @foreach ($category as $result)  
                                          
					   <img src="../upload/{{$result->shopkeeper_name}}/{{$result->shop_image}}" class="img-responsive" id="img1" alt="img">
                                            @endforeach    
					</div>
                  </div>
					<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6  single-top-right">
						
                                                <table>
                                                     <tr>
                                                        <td>
                                                            Shop Code
                                                        </td>
                                                        <td>
                                                          
                                                           {{$result->shop_code}}
                                                         
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Shop Name
                                                        </td>
                                                        <td>
                                                            
                                                            {{$result->shop_name}}
                                                           
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>
                                                            Shopkeeper Name
                                                        </td>
                                                        <td>
                                                            {{$result->shopkeeper_name}}
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>
                                                            Shop Address
                                                        </td>
                                                        <td>
                                                           {{$result->shop_address}}
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>
                                                            Landmark
                                                        </td>
                                                        <td>
                                                       {{$result->shop_landmark}}
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>
                                                           Mobile Number
                                                        </td>
                                                        <td>
                                                            {{$result->shopkeeper_number}}
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>
                                                            Opening Time
                                                        </td>
                                                        <td>
                                                           {{$result->openingtime_shop}}
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>
                                                            CLosing Time
                                                        </td>
                                                        <td>
                                                           {{$result->closingtime_shop}}
                                                        </td>
                                                    </tr>
                                                  
                                                </table>
						
					</div>
                                   
                                </div>
                                <br><br>
				   <div class="clearfix"> </div>  
                         </div>
                         <div class="row">
                            <div class="col-md-12 sm-12 col-xs-12"> 
                            <div id="a1" align="center">
                                     <h1>Our Products </h1> 
                            </div> 
                               
                            </div>
                            </div>
                        	
			<!-- recommendations -->
			<div class="recommend">
			
				<script>
					$(document).ready(function() { 
						$("#owl-demo5").owlCarousel({
					 
						  //autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true
					 
						});
						
					}); 
				</script>
                                
                                	<div id="owl-demo5" class="owl-carousel">
                                             @foreach ($list as $result1) 
                                    
                                                 <div class="item" >
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag"><h6>{{$result1->discount}}  %<br> Off</h6></div>
							<a href="products1.html"><img src="../upload/{{$result->shopkeeper_name}}/product/{{$result1->product_image}}" id="img" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
                                                            <h4><a href="products1.html">{{$result1->product_name}}</a></h4>
								
								      <p id="q">Offer Start at {{$result1->start_date}}</p>
                                                                      <p id="q">Limited Upto  {{$result1->end_date}}</p>
                                                                
                                                                @if ( $result1->buy == 0)
                                                                <p id="as">Marked Price={{$result1->actual_price}}</p>
                                                                <p id="as">Selling Price={{$result1->selling_price}}</p>
                                                               
                                                                @else
                                                                    @if($result1->product_type=='Liquid')
                                                                         <p id="as"> Buy {{$result1->buy}} lt
                                                                          Get {{$result1->get}} lt Free!!</p>
                                                                    @elseif($result1->product_type=='solid')
                                                                         <p id="as"> Buy {{$result1->buy}} Kg
                                                                          Get {{$result1->get}} Kg Free!!</p>
                                                                    @elseif($result1->product_type=='packets')
                                                                          <p id="as"> Buy {{$result1->buy}} packet 
                                                                          Get {{$result1->get}} packets Free!!</p>
                                                                     @elseif($result1->product_type=='peices')
                                                                          <p id="as"> Buy {{$result1->buy}}
                                                                           Get {{$result1->get}}  Free!!</p>
                                                                      @endif
                                                                @endif
							</div>        
						</div> 
                                        </div>
					
                                             @endforeach
				
					
					
				</div>    
                        </div>	
                        </div> 
        </div>
                        
                        
                        
                        @stop