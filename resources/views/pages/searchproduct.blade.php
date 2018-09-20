
                                
                                <div class="products-row" id="txt">
                              

				       @foreach ($category as $result)
                                            <div class="col-md-3 product-grids"> 
                                                    <div class="agile-products">

                                                         <div class="new-tag"><h6>{{$result->discount}}<br>Off</h6></div>
                                                         <img src="../upload/{{$result->shopkeeper_name}}/product/{{$result->product_image}}" id = "img" class="img-responsive" alt="img">

                                                            <div class="agile-product-text">              
                                                                    <a href="single.php?aa='.$shop_code.'&& bb='.$name.'">{{$result->product_name}}</a>
                                                                    <h6><del>{{$result->actual_price}}</del>{{$result->selling_price}}</h6> 

                                                            </div>





                                                    </div> 
                                            </div>
                                      @endforeach
					
					<div class="clearfix"> </div>
				</div>
                        
			<!--<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="slider-left">
						<h4>Filter By Price</h4>            
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>0 - $100 </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100 - $200 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200 - $250  </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$250 - $300 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$350 - $400 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$450 - $500  </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>More</label> 
						</div> 
					</div>
					<div class="sidebar-row">
						<h4> Electronics</h4>
						<ul class="faq">
							<li class="item1"><a href="#">Mobile phones<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Smart phones</a></li>										
									<li class="subitem1"><a href="#">Accessories</a></li>										
									<li class="subitem1"><a href="#">Tabs</a></li>										
								</ul>
							</li>
							<li class="item2"><a href="#">Large appliances<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Refrigerators </a></li>										
									<li class="subitem1"><a href="#">Washing Machine </a></li>										
									<li class="subitem1"><a href="#">Kitchen Appliances </a></li>										
									<li class="subitem1"><a href="#">Air Conditioner</a></li>										
								</ul>
							</li>
							<li class="item3"><a href="#">Entertainment<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#"> Tv & Accessories</a></li>										
									<li class="subitem1"><a href="#">Digital Camera </a></li>										
									<li class="subitem1"><a href="#">Computer</a></li>										
								</ul>
							</li>
						</ul>
						<!-- script for tabs -->
						
						<!-- script for tabs -->
					
					<!--<div class="sidebar-row">
						<h4>DISCOUNTS</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Upto - 10% (20)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>70% - 60% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>50% - 40% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						</div>
					</div>
					<div class="sidebar-row">
						<h4>Color</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>White</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pink</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gold</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Blue</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i> Brown</label> 
						</div>
					</div>			 
				</div>
				<!--<div class="related-row">
					<h4>Related Searches</h4>
					<ul>
						<li><a href="products.html">Air conditioner </a></li>
						<li><a href="products.html">Gaming</a></li>
						<li><a href="products.html">Monitors</a></li>
						<li><a href="products.html">Pc </a></li>
						<li><a href="products.html">Food Processors</a></li>
						<li><a href="products.html">Oven</a></li>
						<li><a href="products.html">Purifiers</a></li>
						<li><a href="products.html">Oven</a></li>
						<li><a href="products.html">Cleaners</a></li>
						<li><a href="products.html">Small devices</a></li>
					</ul>
				</div>
				<div class="related-row">
					<h4>YOU MAY ALSO LIKE</h4>
					<div class="galry-like">  
						<a href="single.html"><img src="images/e1.png" class="img-responsive" alt="img"></a>             
						<h4><a href="products.html">Audio speaker</a></h4> 
						<h5>$100</h5>       
					</div>
				</div>
			</div>-->
			
	
	<!--//products-->  
	<!-- footer-top -->
	
	<!-- //footer-top -->  
	
