
        <div id="page-wrapper">
        <div class="graphs">
     
        	
        	
            
            
        	<div class="col-md-12 widget">
        		<div class="r3_counter_box">
                            <h1>SHOPKEEPER ADVERTISEMENT DETAIL</h1>
                </div>
        	 </div>
           
              
            <div class="clearfix"> </div> 
      </div>
    
	
    <div class="content_bottom">
     <div class="col-md-12 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
                     <p id="offer">Mega Offer</p>
		    <table class="table" id="txtHint">
		      <thead>
		        <tr>
         
		          <th>MEGA_ID</th>
		          <th>SHOPE_CODE</th>
		          <th>CATEGORY</th>
		          <th>STATUS</th>
                        </tr>
                      </thead>
                      <tbody id="a">
		        
                      
		     @foreach ($list as $lists)
                   
                        <tr id="table-row-{{$lists->mega_id}}">
                            <td>{{$lists->mega_id}}</td>    
                            <td>{{$lists->shop_code}}</td>
                            <td>{{$lists->advertisement_category}}</td>
                            <td contenteditable="true" onBlur="saveToDatabase(this,'status','{{$lists->mega_id}}')" onClick="editRow(this);">{{$lists->status}}</td>
                          
                        </tr>
                      
                     @endforeach  
                   
                       
		      
		      </tbody>
		    </table>
                      
                      
                      <p id="offer">Other Offer</p>
                      <table class="table" id="txtHint">
		      <thead>
		        <tr>
         
		          <th>SHOPKEEPER_ID</th>
		          <th>SHOPE_CODE</th>
		          <th>CATEGORY</th>
		          <th>STATUS</th>
                        </tr>
                      </thead>
                      <tbody id="a">
		        
                      
		     @foreach ($other as $offerq)
                   
                        <tr id="table-row-{{$offerq->shopkeeper_id}}">
                            <td>{{$offerq->shopkeeper_id}}</td>    
                            <td>{{$offerq->shop_code}}</td>
                            <td>{{$offerq->advertisement_category}}</td>
                            <td contenteditable="true" onBlur="saveToDatabase(this,'status','{{$offerq->shopkeeper_id}}')" onClick="editRow(this);">{{$offerq->status}}</td>
                          
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
                     




