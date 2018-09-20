<table>  
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