<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("test",function(){
	return view('test');
});
Route::get("/admin",function(){
	return view('Admin.Pages.login.admin_login');
});
// FONT END 
Route::group(['prefix'=>'','namespace'=>'Website'],function(){
Route::get('/','HomeController@home')->name('home');
Route::group(['prefix'=>'room'],function(){
Route::get('/room-gird','RoomController@room_gird')->name('room_gird');
Route::get('room-details/','RoomController@room_details')->name('room_details');
Route::get('details/{id}','RoomController@details')->name('details');
Route::post('roomsearch','RoomController@roomsearch')->name('roomsearch');
});
Route::get('/service','ServicesController@service')->name('service');
Route::group(['prefix'=>'blog'],function(){
Route::get('/','BlogController@blog')->name('blog');
Route::get('/blog-details','BlogController@blog_details')->name('blog_details');
Route::get('/blogdetails/{id}','BlogController@blogdetails')->name('blogdetails');
});
Route::group(['prefix'=>'pages'],function(){
Route::get('/about','PagesController@about')->name('about');
Route::get('/our-staff','PagesController@our_staff')->name('our_staff');
Route::get('/resturent','PagesController@resturent')->name('resturent');
Route::get('/reservation','PagesController@reservation')->name('reservation');
});
Route::get('/gallery','GalleryController@gallery')->name('gallery');
Route::get('/contact','ContactController@contact')->name('contact');
//CART
Route::group(['prefix'=>'cart'],function(){
Route::get('/','CartController@cart')->name('cart');

Route::get('addcartservice/{id}','CartController@addcartservice')->name('addcartservice');
Route::get('add/{id}','CartController@add')->name('add');
Route::get('removecartservice/{room_id}/{id}','CartController@removecartservice')->name('removecartservice');
Route::get('updatecartservice/{room_id}/{id}','CartController@updatecartservice')->name('updatecartservice');
Route::get('clearcartservice','CartController@clearcartservice')->name('clearcartservice');

Route::get('removecartroom/{id}','CartController@removecartroom')->name('removecartroom');
Route::post('save_cart/{id}','CartController@save_cart')->name('save_cart');

});
//CHECH-OUT
Route::post('/save_checkout','CheckoutController@save_checkout')->name('save_checkout');
Route::get('/checkout','CheckoutController@checkout')->name('checkout');
Route::get('/success','CheckoutController@success')->name('success');
Route::get('clearcart','CheckoutController@clearcart')->name('clearcart');

//LOGIN
Route::group(['prefix'=>'login'],function(){
Route::get('/login','LoginController@login')->name('login');
Route::get('/logout','LoginController@logout')->name('logout');
Route::post('/user_checkout','LoginController@user_checkout')->name('user_checkout');
Route::get('/sign-in','LoginController@signin')->name('signin');
Route::post('/save_user','LoginController@save_user')->name('save_user');

Route::get('/forgot_password','ForgotPasswordController@forgot')->name('form_forgot');
Route::post('/forgot_password','ForgotPasswordController@forgot_password')->name('postEmail');
Route::get('/link_forgot','ForgotPasswordController@link_forgot')->name('get_link_forgot');
Route::post('/link_forgot/{email}/{code}','ForgotPasswordController@save_forgot')->name('save_forgot');
});


});
// BACK END
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login'],function(){
//login
		Route::get('/admin_login','UseradminController@admin_login')->name('admin_login');
		Route::get('/show_dashboard','UseradminController@show_dashboard')->name('show_dashboard');
		Route::post('/admin_dashboard','UseradminController@admin_dashboard')->name('admin_dashboard');
		Route::get('/admin_logout','UseradminController@admin_logout')->name('admin_logout');
//add login
		Route::get('addlogin','UseradminController@addlogin')->name('addlogin');
		Route::post('save_login','UseradminController@save_login');
//list login
		Route::get('listlogin','UseradminController@listlogin')->name('listlogin');
//delete login
		Route::get('deletelogin/{id}','UseradminController@deletelocation')->name('deletelogin');
//edit login
		Route::get('editlogin/{id}','UseradminController@editlogin')->name('editlogin');
		Route::post('update_login/{id}','UseradminController@update_login');
	});

	Route::group(['prefix'=>'category'],function(){
//add category
		Route::get('addcategory','CategoryController@addcategory')->name('addcategory');
		Route::post('save_category','CategoryController@save_category');
//list category
		Route::get('listcategory','CategoryController@listcategory')->name('listcategory');
//delete category
		Route::get('deletecategory/{id}','CategoryController@deletecategory')->name('delete');
//edit category
		Route::get('editcategory/{id}','CategoryController@editcategory')->name('editcat');
		Route::post('update_category/{id}','CategoryController@update_category');
// tifm kiem category
		Route::post('searchCategory','CategoryController@searchCategory')->name('searchCategory');
	});

	Route::group(['prefix'=>'banner'],function(){
//add banner
		Route::get('addbanner','BannerController@addbanner')->name('addbanner');
		Route::post('save_banner','BannerController@save_banner');
//list banner
		Route::get('listbanner','BannerController@listbanner')->name('listbanner');
//delete banner
		Route::get('deletebanner/{id}','BannerController@deletebanner')->name('deletebanner');
//edit banner
		Route::get('editbanner/{id}','BannerController@editbanner')->name('editbanner');
		Route::post('update_banner/{id}','BannerController@update_banner');
// tifm kiem banner
		Route::post('searchbanner','BannerController@searchbanner')->name('searchbanner');
	});
	Route::group(['prefix'=>'location'],function(){
//add location
		Route::get('addlocation','LocationController@addlocation')->name('addlocation');
		Route::post('save_location','LocationController@save_location');
//list location
		Route::get('listlocation','LocationController@listlocation')->name('listlocation');
//delete location
		Route::get('deletelocation/{id}','LocationController@deletelocation')->name('deletelocation');
//edit location
		Route::get('editlocation/{id}','LocationController@editlocation')->name('editlocation');
		Route::post('update_location/{id}','LocationController@update_location');
// tifm kiem location
		Route::post('searchlocation','LocationController@searchlocation')->name('searchlocation');
	});
	Route::group(['prefix'=>'room'],function(){
//add room
		Route::get('addroom','RoomController@addroom')->name('addroom');
		Route::post('save_room','RoomController@save_room');
//list room
		Route::get('listroom','RoomController@listroom')->name('listroom');
//delete room
		Route::get('deleteroom/{id}','RoomController@deleteroom')->name('deleteroom');
//edit room
		Route::get('editroom/{id}','RoomController@editroom')->name('editroom');
		Route::post('update_room/{id}','RoomController@update_room');
// tifm kiem room
		Route::post('searchroom','RoomController@searchroom')->name('searchroom');
	});
	Route::group(['prefix'=>'service'],function(){
//add service
		Route::get('addservice','ServiceController@addservice')->name('addservice');
		Route::post('save_service','ServiceController@save_service');
//list service
		Route::get('listservice','ServiceController@listservice')->name('listservice');
//delete service
		Route::get('deleteservice/{id}','ServiceController@deleteservice')->name('deleteservice');
//edit service
		Route::get('editservice/{id}','ServiceController@editservice')->name('editservice');
		Route::post('update_service/{id}','ServiceController@update_service');
// tifm kiem service
		Route::get('search','ServiceController@search')->name('search');
	});
	Route::group(['prefix'=>'roomservice'],function(){
//add roomservice
		Route::get('addroomservice','RoomserviceController@addroomservice')->name('addroomservice');
		Route::post('save_roomservice','RoomserviceController@save_roomservice');
//list roomservice
		Route::get('listroomservice','RoomserviceController@listroomservice')->name('listroomservice');
//delete roomservice
		Route::get('deleteroomservice/{id}','RoomserviceController@deleteroomservice')->name('deleteroomservice');
//edit roomservice
		Route::get('editroomservice/{id}','RoomserviceController@editroomservice')->name('editroomservice');
		Route::post('update_roomservice/{id}','RoomserviceController@update_roomservice');
	});
	Route::group(['prefix'=>'blog'],function(){
//add blog
		Route::get('addblog','BlogController@addblog')->name('addblog');
		Route::post('save_blog','BlogController@save_blog');
//list blog
		Route::get('listblog','BlogController@listblog')->name('listblog');
//delete blog
		Route::get('deleteblog/{id}','BlogController@deleteblog')->name('deleteblog');
//edit blog
		Route::get('editblog/{id}','BlogController@editblog')->name('editblog');
		Route::post('update_blog/{id}','BlogController@update_blog');
	});
	Route::resource('payment','PaymentmethodController');
	Route::resource('user','UserController');
	Route::resource('employee','EmployeeController');
	Route::resource('gallery','GalleryController');
	Route::resource('categorygallery','CategorygalleryController');
	Route::resource('restaurantservice','ResturentServiceController');
	Route::resource('managebooking','ManagebookingController');
		Route::get('listbookingroom','ManagebookingController@listbookingroom')->name('listbookingroom');
		Route::get('listbookingservice','ManagebookingController@listbookingservice')->name('listbookingservice');


});