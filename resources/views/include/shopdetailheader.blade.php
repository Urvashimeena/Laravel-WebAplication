<?php
        $name = Session::get('client_name');
              
 ?>
<div class="header-two"><!-- header-two -->
			<div class="container">
			<div class="col-md-3 col-sm-3 col-xs-3">
				<div class="header-logo">
					<h1><a href="index.html"><span>S</span>hopoviA</a></h1>
					<h6>Your stores. Your place.</h6> 
				</div>	
			</div>
			<div class="col-md-6 col-sm-6">
					<div class="header-search">
					<form action="#" method="post">
					
                                            <input type="search" name="Search" placeholder="Search for a Product..." onkeyup="search(this.value)" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 wide-hide">
					<div class="header-cart"> 
					
				   <div class="cart"> 
						
                                       </div>
                                    <div id="name" style="text-align: center;">
                                            <?php 
                                            if(isset($name))
                                            {
                                                echo "WELCOME  ".$name."<br>";
                                            ?> 
                                    </div>
                                            <a href="/deleteclient">
                                                <button id="button"><span class="glyphicon glyphicon-log-out"></span> logout</button></a>
                                            <?php
                                            }
                                            ?>
                                       
					
                               
                                      
                                   
                                            
                                  
		
				<div class="clearfix"> </div>
			</div>	
			</div>
				
				
					
		</div>