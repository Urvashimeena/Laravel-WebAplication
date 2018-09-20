
        <div id="page-wrapper">
        <div class="graphs">
     
        	
        	
            
            
        	<div class="col-md-6 widget">
        		<div class="r3_counter_box">
                            <h1>CLIENT INFORMATION</h1>
                </div>
        	 </div>
            <div class="col-md-6 widget">
                <div class="header-search">
                    
				          
					<input type="search" name="Search"  Onkeyup="showUser(this.value)" placeholder="Search for a Product..." required="">
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
		    <table class="table" id="txtHint">
		      <thead>
		        <tr>
         
		          <th>CLIENT_ID</th>
		          <th>USERNAME</th>
		          <th>PASSWORD</th>
		          <th>CONTACT NUMBER</th>
                           <th>Status</th>
                           <th>Action</th>
		        </tr>
                      </thead>
                      <tbody id="a">
		        
                      
		     @foreach ($clients as $client)
                   
                        <tr id="table-row-{{$client->client_id}}">
                          <td contenteditable="true" onBlur="saveToDatabase(this,'client_id','{{$client->client_id}}')" onClick="editRow(this);">{{ $client->client_id }}</td>
                           <td contenteditable="true" onBlur="saveToDatabase(this,'username','{{$client->client_id}}')" onClick="editRow(this);">{{ $client->username}}</td>
                           <td contenteditable="true" onBlur="saveToDatabase(this,'password','{{$client->client_id}}')" onClick="editRow(this);">{{ $client->password }}</td>
                           <td contenteditable="true" onBlur="saveToDatabase(this,'contact_number','{{$client->client_id}}')" onClick="editRow(this);">{{ $client->contact_number }}</td>
                           <td contenteditable="true" onBlur="saveToDatabase(this,'status','{{$client->client_id}}')" onClick="editRow(this);">{{ $client->status }}</td>
                           <td><a class="ajax-action-links success" onclick="deleteRecord('{{$client->client_id}}');">Delete</a></td>
                        </tr>
                      
                     @endforeach  
                   
                       
		      
		      </tbody>
		    </table>
		   </div>
	   </div>
           {!! $clients->render() !!}
	   <div class="col-md-4 span_4">
		
		   <div class="clearfix"> </div>
		 
		
		</div>
		<div class="clearfix"> </div>
	    </div>
		
		</div>
                     




