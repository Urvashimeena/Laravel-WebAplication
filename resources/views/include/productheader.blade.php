<?php
       
        
        $name = Session::get('Shopkeeper_name');
  
             
 ?>


<div class="header-two">
			<div class="container">
			<div class="col-md-3 col-sm-3 col-xs-3">
				<div class="header-logo">
					<h1><a href="/"><span>S</span>hopoviA</a></h1>
					<h6>Your stores. Your place.</h6> 
				</div>
			</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="header-search">
                                  <h1 class="one w3-hide-small">Add Your Advertisement</h1>
                                  
                                    
				</div>
				</div>	
				<div class="col-md-3 col-sm-3 col-xs-3">
						<p id="hh" class="w3-hide-small">
		                                              <?php 
		                                       echo "Welcome  ".$name;
		                                       
		                                        ?>  
                        </p>

                                       <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-6">
                                       			<a href="/delete">

				                                                <button id="button"><span class="glyphicon glyphicon-log-out"></span> logout</button>
				                             </a>

                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-6">
                                       			 <a href="/advertisement">
                                      				 <button id="button">Advertisement</button>
                                                    </a>

                                       </div>
                                       		 
                                                  
                                                   

                                       </div>
                                                      
                                              
				</div>
					                    
                                           
                                           
				
					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		


