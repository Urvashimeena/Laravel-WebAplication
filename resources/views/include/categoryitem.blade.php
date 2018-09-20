 <div id="page-wrapper">
       <br><br>
     <div class="col-md-12 col-xs-12 col-sm-12 graphs">
      <div class="xs">
  	    <h3 id='one1'>ADD SHOP CATEGORY</h3>
      </div>
         <br><br>
        
         <form id="submit">
             
              <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
              <input type='text' placeholder="Category" id="category" name="c" required >
           
                <input type="submit" value="ADD"><br>
        
         </form>
          
      
 
    </div>
       <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
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
                 {!! $category->render() !!}
           </div>
       </div>
  
   </div>

 
 
