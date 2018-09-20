<?php
        $name = Session::get('Shopkeeper_name');
              
 ?>
<div class="header-two">
			<div class="container">
				<div class="header-logo">
					<h1><a href="index.html"><span>S</span>hopoviA</a></h1>
					<h6>Your stores. Your place.</h6> 
				</div>	
				<div class="header-search">
		                           
                              
                           <h1 class="w3-hide-small">Add Your Advertisement</h1>     
				</div>
                            	<div class="header-cart"> 
					<div class="my-account">
					    <p id="hh">
                                              <?php 
                                       echo "Welcome  ".$name;
                                        ?>  
                                            </p>
                                        
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                              &nbsp;
                                            <button><a href="/delete">logout</a></button> 
                                            
                                           
					</div>
					
				</div> 
		
					<div class="my-account">
											
					</div>
					
					<div class="clearfix"> </div> 
			
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->