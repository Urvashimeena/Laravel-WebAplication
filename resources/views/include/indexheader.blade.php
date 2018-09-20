<?php
        $name = Session::get('client_name');
              
 ?>
<div class="header-two"><!-- header-two -->
			<div class="container">
							<div class="row">
							<div class="col-md-3">
									<div class="header-logo">
									<h1><a href="/"><span>S</span>hopoviA</font></a></h1>
									<h6>Your stores. Your place.</h6> 
								</div>	
							</div>
							<div class="col-md-6">
										<div class="header-search">
				                                    
									<form action="shopyproduct" method="post">
				                                            <select name="name" id="selecter">
				                                                <option value="Landmark">
				                                                       Landmark
				                                                    </option>
				                                                    <option value="Shop Name">
				                                                       Shop Name
				                                                    </option>
				                                                    <option value="Product Name">
				                                                       Product Name
				                                                    </option>
				                                                </select>
				                                             <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
										<input type="search" name="Search" placeholder="Search for a Product..." required="">
										<button type="submit" class="btn btn-default" aria-label="Left Align">
												<i class="fa fa-search" aria-hidden="true"> </i>
									    </button>
									</form>
							
							</div>
							</div>
							<div class="col-md-3">
								<div class="header-cart"> 
									
							
				                                    <div id="name">
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
				                                       
									
				                               
				                                      
				                                   
				                                            
				                                  
						
								</div> 

							</div>

							</div>
								
						
								
					
																
								
								
				<div class="clearfix"> </div>
			</div>		
		</div>