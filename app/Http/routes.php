<?php




//Route::get('/', function () {
//   return view('pages.index');
//  
//});
Route::get('header', function () {
   return view('include.header1');
  
});

Route::post('/forgetpass','MailController@forget');

Route::get('sendhtmlemail','MailController@html_email');

// Route::get('advertisement', function () {
//    return view('pages.advertisement');
  
// });
Route::get('/forget', function () {
   return view('pages.forget');
  
});

Route::get('/loginnew','Shopkeepersession@login');
Route::get('/contactus','Shopkeepersession@contact');
Route::get('/advertisement','Addproduct@advertisement');

Route::get('shhipping', function () {
   return view('pages.shipping');
  
});
Route::get('/contact', function () {
   return view('pages.contact');
 });
Route::post('/contactprocess','MailController@contact');

Route::get('/shopkeeperinfo', function()
{
     return view('pages.shopkeeperinfo');
});
//Route::get('signup', function () {
//   return view('pages.signup');
//  
//});
Route::get('/signup','signupcategory@signup');
Route::post('/registershopkeeper','signupcategory@register');

// Route::get('login', function () {
//    return view('pages.login');
  
// });
Route::get('/login','redirect@category');

Route::get('shipping', function () {
   return view('pages.shipping');
  
});

Route::get('/register','ClientRegisteration@register');
Route::post('/clientlogin','ClientRegisteration@login');

Route::get('/xx','SessionClientRegisteration@storeSessionData');


Route::get('/xp','SessionClientRegisteration@storeSessionDat');
Route::get('/delete','SessionClientRegisteration@deleteSessionData');

Route::get('/Admin_panel','AcountController@panel');

Route::post('/subadminlogin','AcountController@sublogin');

Route::get('/ShopkeeperList','ShopkeerController@shopkeeperlist');
Route::post('/viewdetail','ShopkeerController@shopkeeperdetail');
/*Route::get('/category',function()
{
    return view('pages.AddCategory');
});
 
 */
Route::get('/Editprofile',function()
{
  return view('pages.Editprofile');
});
Route::post('/deleteshopkeeper','ShopkeerController@delete');

Route::get('/shopkeeperadvertisement','ShopkeerController@showadvertisement');
Route::get('category', 'ShopCategory@categorylist');
Route::get('/displaydata', 'ShopCategory@display');

//Route::get('/Client_info',function()
/*{
        return view('pages.Clientlist');
});*/

Route::get('Clientinfo', 'ClientInformation@index');

//Route::get('addcategory', 'ClientInformation@index');
// Route::get('/subadmin','AdminLogin@subadmin');

Route::get('/Admin_login',function()
{
        return view('pages.adminlogin');
});
Route::get('/SubAdmin1',function()
{
        return view('pages.subadminlogin');
});
Route::get('/logout','AcountController@logout');
Route::post('/updateprofile','AcountController@updateprofile');
Route::post('/login2', 'AcountController@login');

Route::post('/shopyproduct','Showsearchproduct@searchresult');

Route::post('updateclient', 'UpdateClient@update');

Route::post('deleteclient', 'UpdateClient@delete');


Route::group(['middleware' => ['web']], function () {
   Route::post('updatesearch', 'UpdateClient@search_s');
   Route::post('shopkeepersearch','ShopkeerController@shopkeepersearch');
   Route::post('/search','offer@search_s');
      
});

Route::post('savestatus','ShopkeerController@update');


Route::get('/insertcategory', 'ShopCategory@insert');

Route::post('deletecategory', 'ShopCategory@delete');
Route::post('editcategory', 'ShopCategory@update');

//Route::post('Clientinfo', 'ClientInformation@pagination');

/* Route::post('updateseaaddcategory
        'as'    => 'updatesearch',
        'uses'  => 'UpdateClient@search_s'     
    ));*/
Route::get('/product',function()
{
    return view('pages.shopkeeperproduct');
});

Route::get('/product1',function()
{
    return view('pages.shopkeeperproduct1');
});
Route::post('/loginprocess','signupcategory@login');
Route::get('/store','Shopkeepersession@storeSessionData');

Route::get('/delete','Shopkeepersession@deleteSessionData');
//Route::get('/advertisement1',function()
//{
//    return view('pages.Shopkeeperadvertisement');
//}
//);

Route::post('/insertpurchase','Addproduct@insertpurchase');
Route::post('/discountproduct','Addproduct@discountproduct');
Route::post('/buyget','Addproduct@buyget');

Route::get('/redirect','redirect@product');

Route::post('deleteproduct','Addproduct@deleteproduct');


Route::post('/deleteall','Addproduct@deleteall');

Route::get('/deleteclient','SessionClientRegisteration@deleteSessionData');

Route::post('/product','redirect@productdetail');

Route::get('/','offer@megaOffer');


Route::get('/shopdetail', [
    'as' => 'shopdetail', 'uses' => 'offer@detail'
]);
Route::get('/shop','redirect@shop');


//Route::get('shopdetail/{$result->shop_code}/{$result->product_id}','offer@detail');

Route::get('/productdetail/{product}', [
    'as' => 'productdetail', 'uses' => 'offer@product'
]);




Route::get('/product1','redirect@productdetail1');

Route::post('/subprocess','AdminLogin@register');

Route::get('/subadminlist','AdminLogin@subadminlist');

Route::post('/updaterole','AdminLogin@updaterole');

Route::post('/deletesubadmin','AdminLogin@delete');