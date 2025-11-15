<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\Log_Reg_Controller;
use App\Http\Controllers\OrderFormController;
use App\Http\Controllers\OrderPackageController;
use App\Http\Controllers\OrderRoomController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserProfileController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AuthMiddlware;
use App\Http\Middleware\LoginMiddlware;
use App\Models\Order_Room;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PackageController::class,'index']);

Route::middleware(AuthMiddlware::class)->group(function () {

//packages

// packageshow
Route::get('/Allpackages',[PackageController::class,'package_index']);
Route::get('/packages/{package:id}',[PackageController::class,'packageDetail']);

//favoritePackage
Route::post('/packages/{package}/handle_favorite',[FavoriteController::class,'handle_favorite']);

//package_Comments
Route::get('/comment/{package}',[CommentController::class,'store']);
Route::delete('/comment/{package}/delete',[CommentController::class,'delete']);
Route::get('/comment/{comment:id}/edit',[CommentController::class,'edit']);
Route::patch('/comment/{comment:id}/edit',[CommentController::class,'update']);

// orderpackage
Route::delete('/orders/{package}/delete',[OrderPackageController::class,'deletePackage']);
Route::post('/packages/{package}/storeOrder',[OrderPackageController::class,'storeOrder']);
Route::get('/package_checkout',[OrderPackageController::class,'checkout']);
Route::post('/confirmOrderSuccess',[OrderPackageController::class,'confirmsuccess']);

Route::get('/successOrder',[OrderPackageController::class,'successOrder']);
Route::get('/confirmOrderPackage',[OrderPackageController::class,'confirmOrder']);

Route::get('/checkpaymentpackage/{user}/checkNotComfirm',[OrderPackageController::class,'checkComfirm']);
// *************************packages***********************************


//hotels
Route::get('/Allhotel',[HotelController::class,'hotel_index']);
Route::get('/Allhotel/{hotel}',[HotelController::class,'hotel_detail']);
Route::get('/rooms/{room}',[RoomController::class,'room_detail']);

//hotel_comment
Route::get('/hotel_comment/{hotel}',[CommentController::class,'hote_comment_store']);

//orderFormforRoom
Route::delete('/roomorders/{package}/delete',[OrderRoomController::class,'deleteroom']);
Route::post('/hotels/rooms/{room}/order',[OrderRoomController::class,'orderRoom']);
Route::get('/order/{room}',[OrderFormController::class,'show']);
Route::get('/room_checkOut',[OrderRoomController::class,'checkOut']);

Route::get('/confirmOrderRoom',[OrderRoomController::class,'confirmOrderRoom']);
Route::post('/confirmOrderRoomSuccess',[OrderRoomController::class,'confirmRoomsuccess']);

Route::get('/checkpaymentRoom/{user}/checkNotComfirm',[OrderRoomController::class,'checkComfirmRoom']);



// blogspost
Route::get('/blog', [BlogController::class,'blog']);

Route::post('/blogs/postBlog',[BlogController::class,'store']);

// *************************blogs***********************************


//bus
Route::get('/bus', [HotelController::class,'bus']);

// allcheckout
Route::get('/allcheckout',[AllController::class,'allcheckout']);

// additional
Route::get('/faq', [AllController::class,'faq']);
Route::get('/privacy', [AllController::class,'privacy']);
Route::get('/about', [AllController::class,'about']);
Route::get('/contact',[AllController::class,'contact']);
Route::get('/feedback',[AllController::class,'feedback']);
Route::post('askingcontanct',[AllController::class,'askcontact']);

// *************************others***********************************

});

// *************************hotels***********************************


//register
Route::middleware(LoginMiddlware::class)->group(function () {
Route::get('/register',[Log_Reg_Controller::class,'register']);
Route::post('/registerStore', [Log_Reg_Controller::class, 'registerStore']);
});

//login
Route::get('/login', [Log_Reg_Controller::class, 'login']);
Route::post('/login', [Log_Reg_Controller::class, 'loginStore']);
// signout
Route::get('/logOut', [Log_Reg_Controller::class, 'singOut']);

// *************************log/reg***********************************


//profile
Route::get('/Profile', [UserProfileController::class, 'profileDetail']);
Route::post('/user/{user:id}/profile_upload', [UserProfileController::class, 'profile_upload']);
Route::post('/user/{user:id}/userData_upload', [UserProfileController::class, 'userData_upload']);

// *************************profiles***********************************



// *************************Admin***********************************

// users
Route::middleware(AdminMiddleware::class)->group(function () {
    
Route::get('/admin',[AdminController::class,'user']);
Route::get('/admin/alluser',[AdminController::class,'user']);
Route::get('/admin/users/{user_id}',[AdminController::class,'useredit']);
Route::post('/update/{user}',[AdminController::class,'update']);
Route::delete('/admin/{user}/delete',[AdminController::class,'delete']);


//packagesCreate
Route::get('/admin/allpackage',[AdminController::class,'indexOfPackage']);
Route::get('/admin/packages/{package}',[AdminController::class,'packageEdit']);
Route::post('/admin/{package}/update',[AdminController::class,'updatePackage']);
Route::get('/admin/newPackage/create',[AdminController::class,'createPackage']);
Route::post('/admin/packageStore',[AdminController::class,'storePackage']);
Route::delete('/admin/{package}/deletePackage',[AdminController::class,'deletePackage']);


//hotels
Route::get('/admin/allhotel',[AdminController::class,'indexOfHotel']);
Route::get('/admin/hotels/{hotel}/edit',[AdminController::class,'hotelEdit']);
Route::post('/admin/{hotel}/updateHotel',[AdminController::class,'updateHotel']);
Route::get('/admin/newHotel/create',[AdminController::class,'createHotel']);
Route::post('/admin/hotelStore',[AdminController::class,'storeHotel']);
Route::delete('/admin/{hotel}/deletehotel',[AdminController::class,'deleteHotel']);


// Rooms
Route::get('/admin/allroom',[AdminController::class,'indexOfRoom']);
Route::get('/admin/createRoom_1',[AdminController::class,'createRoom_1']);
Route::post('/admin/roomStore',[AdminController::class,'storeRoom_1']);
Route::delete('/admin/{room}/deleteRoom',[AdminController::class,'deleteRoom']);
Route::get('/admin/rooms/{room}/edit',[AdminController::class,'roomEdit']);
Route::post('/admin/rooms/{room}/update',[AdminController::class,'updateRoom']);


// orders package
Route::get('/admin/allPackageorders',[AdminController::class,'AllPackageorders']);
Route::delete('/admin/{order_package}/deletePackageOrder',[AdminController::class,'deletePackageOrder']);
// order's user search
Route::post('/admin/users/searchPackage',[AdminController::class,'searchUser']);


// orders room
Route::get('/admin/allRoomorders',[AdminController::class,'AllRoomorders']);
Route::post('/admin/users/searchRoom',[AdminController::class,'searchUserRoom']);
Route::delete('/admin/{order}/deleteRoomOrder',[AdminController::class,'deleteorderroom']);


// email
// Route::get('/sendEmail/{{$order->id}}/sendmail',[EmailController::class,'sendmail']);

Route::get('/sendEmail/{order}/sendmailRoom',[EmailController::class,'send']);
Route::get('/sendEmail/{order}/sendmailPackage',[EmailController::class,'sendmail']);

// contact Mail
Route::get('/admin/contactMail',[AdminController::class,'contactMail']);
Route::get('/admin/mails/{email}/send',[AdminController::class,'sendMailEdit']);
Route::post('/admin/{email}/sendmail',[EmailController::class,'sendmailformAd']);
Route::delete('/admin/{id}/deletecontactmail',[AdminController::class,'deletecontact']);


// blogs
Route::get('/admin/allBlogs',[AdminController::class,'AllBlogs']);
Route::delete('/admin/{blog}/deleteBlog',[AdminController::class,'deleteBlog']);
});
// *************************Admin***********************************
