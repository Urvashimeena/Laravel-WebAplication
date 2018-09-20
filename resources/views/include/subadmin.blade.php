
        <div id="page-wrapper">
        <div class="graphs">
     
        	
        	
            
            
        	<div class="col-md-6 widget">
        		<div class="r3_counter_box">
                            <h1>SUBADMIN INFORMATION</h1>
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
         
		          <th>SUBADMIN_ID</th>
		          <th>USERNAME</th>
		          <th>PASSWORD</th>
		          <th>ROLE</th>
                           <th>CREATE_DATE</th>
                           <th>LAST_UPDATE</th>
                           <th>status</th>
		        </tr>
                      </thead>
                      <tbody id="a">
		        
                      
		     @foreach ($clients as $client)
                   
                        <tr id="table-row-{{$client->Registeration_id}}">
                          <td>{{ $client->Registeration_id }}</td>
                           <td>{{ $client->Username}}</td>
                           <td>{{ $client->password }}</td>
                           <td contenteditable="true" onBlur="saveToDatabase(this,'role','{{$client->Registeration_id}}')" onClick="editRow(this);">{{ $client->role }}</td>
                           <td>{{ $client->create_date }}</td>
                          <td>{{ $client->last_update }}</td>
                           <td><a class="ajax-action-links success" onclick="deleteRecord('{{$client->Registeration_id}}');">Delete</a></td>
                        </tr>
                      
                     @endforeach  
                   
                       
		      
		      </tbody>
		    </table>
		   </div>
	   </div>
          
	   <div class="col-md-4 span_4">
		
		   <div class="clearfix"> </div>
		 
		
		</div>
		<div class="clearfix"> </div>
	    </div>
		
		</div>
                     




