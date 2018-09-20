<table> 
    <thead>
                       <tr>
                           <td>Category_id</td>
                            <td>Category</td>
                       </tr>
                   </thead>
<tbody id="table">
                       @foreach ($category as $result)
                       <tr id="table-row-{{$result->category_id}}">
                          
                           <td contenteditable="true" onBlur="saveToDatabase(this,'category_id','{{$result->category_id}}')" onClick="editRow(this);">{{$result->category_id}}  </td>
                         
                           
                           <td contenteditable="true" onBlur="saveToDatabase(this,'category','{{$result->category_id}}')" onClick="editRow(this);">   {{$result->category}}       </td>
                  
                           <td><a class="ajax-action-links success" onclick="deleteRecord('{{$result->category_id}}');">Delete</a></td>


                       </tr>
                       @endforeach 
 </tbody>  
 </table>