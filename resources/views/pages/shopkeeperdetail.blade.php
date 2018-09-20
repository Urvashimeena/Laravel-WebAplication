
            <button id="back" onclick="refreshPage()"> <span class="glyphicon glyphicon-arrow-left"></span>back</button>
        
            <p align="right">
            <a href="/shopkeeperadvertisement"><button id="adv">Show Advertisement</button></a>
            </p>

<table class="table" id="txtHint">
		     
                      <tbody id="a">
		        
                      
		     @foreach ($list as $lists)
                   
                     <tr>
                         <td>SHOPKEEPER IDENTITY</td>
                          <td>
                              
                            <a href="upload/{{$lists->shopkeeper_name}}/{{$lists->shopkeeper_identity}}">identity</a>
                               
                          </td>
                    
                     </tr>
                    
                      <tr>
                         <td>SHOPKEEPER NAME</td>
                          <td>{{$lists->shopkeeper_name}}</td>
                     </tr>
                      <tr>
                         <td>PHONE NUMBER</td>
                          <td>{{$lists->shopkeeper_number}}</td>
                     </tr>
                      <tr>
                         <td>EMAIL ADDRESS</td>
                          <td>{{$lists->shopkeeper_email}}</td>
                     </tr>
                      <tr>
                         <td>SHOPKEEPER PASSWORD</td>
                          <td>{{$lists->shopkeeper_password}}</td>
                     </tr>
                      <tr>
                         <td>CATEGORY</td>
                          <td>{{$lists->shop_category}}</td>
                     </tr>
                      <tr>
                         <td>SHOP ADRESS</td>
                          <td>{{$lists->shop_address}}</td>
                     </tr>
                      <tr>
                         <td>SHOP NAME</td>
                          <td>{{$lists->shop_name}}</td>
                     </tr>
                      <tr>
                         <td>GENDER</td>
                          <td>{{$lists->gender}}</td>
                     </tr>
                      <tr>
                         <td>OPENING TIME</td>
                          <td>{{$lists->openingtime_shop}}</td>
                     </tr>
                     <tr>
                         <td>CLOSING TIME</td>
                          <td>{{$lists->closingtime_shop}}</td>
                     </tr>
                     
                      
                     @endforeach  
                   
                       
		      
		      </tbody>
 </table>