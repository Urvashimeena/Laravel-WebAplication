 <table class="table">
		
                      <tbody  id="txtHint">
		        
                      
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