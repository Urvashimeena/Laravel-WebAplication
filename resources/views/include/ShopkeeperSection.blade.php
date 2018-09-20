
        <div id="page-wrapper">
        <div class="graphs">
     
        	
        	
            
            
        	<div class="col-md-6 widget">
        		<div class="r3_counter_box">
                            <h1>SHOPKEEPER LIST</h1>
                </div>
        	 </div>
            <div class="col-md-6 widget">
                <div class="header-search">
                    
				          
					<input type="search" name="Search"  Onkeyup="showUser1(this.value)" placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
			
		</div>
              
                
                
        	 </div>
              
             
        	<div class="clearfix"> </div>
      </div>
    
	
    <div class="content_bottom">
     <div class="col-md-12 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
                      <div  id="txtHint">
		    <table class="table">
		      <thead>
		        <tr>
         
		          <th>REGISTERATION_ID</th>
		          <th>USERNAME</th>
		          <th>SHOPCODE</th>
		          <th>ACTION</th>
                          <th>Delete</th>
                         
		        </tr>
                      </thead>
                      <tbody id="a">
		        
                      
		     @foreach ($list as $lists)
                   
                        <tr id="table-row-{{$lists->registeration_id}}">
                          <td>{{$lists->registeration_id}}</td>
                          <td>{{$lists->shopkeeper_name}}</td>
                          <td>{{$lists->shop_code}}</td>
                          <td><a class="ajax-action-links success" onclick="view('{{$lists->registeration_id}}');">view more</a></td>
                           <td><a class="ajax-action-links success" onclick="deleteRecord('{{$lists->registeration_id}}');">delete</a></td>
                        </tr>
                      
                     @endforeach  
                   
                       
		      
		      </tbody>
		    </table>
                      </div>
		   </div>
	   </div>
     
	   <div class="col-md-4 span_4">
		
		   <div class="clearfix"> </div>
		 
		
		</div>
		<div class="clearfix"> </div>
	    </div>
		
		</div>
                     




