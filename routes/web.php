<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentInsertController;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\Route as RoutingRoute;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',function(){
// return view('home');
// });

// Route::get('/contact-form', function () {
//     $title = "Send user Information";
//     $title2 = "This is title2";
//     // return view('user_data',['title'=>$title,'title2'=>$title2]);
//     //return view('user_data', compact('title','title2'));
//     return view('user_data')->withTitle($title)->withTitle2($title2)->withTest("This is magic Effect");
// });

// Route::post('get-userdata',function(Request $request){
// // dd($request->all());
//     $fname = $request->input('firstname');
//     $lname = $request->input('lastname');
//     $country = $request->input('country');
//     $subject = $request->input('subject');
//     // return "fname : ".$fname." Lname : ".$lname." country : ".$country." subject : ".$subject." ";
//     return redirect('contact-form')->with('message','Successfully submited the form!');
// });


// Route ::get('test-page/{id}/{type?}', function($id,$type=null){
//     if($id==1&&$type=="first"){
//         return '<h1>first page </h1>';
//     } elseif ($id==1&&$type=="number"){
//         return '<h1>first number </h1>';
//     } elseif ($id == 1 && $type == null) {
//         return '<h1>first is something </h1>';
//     }
//     // return $id;
// })->name('page');


// // Route :: get('sample-page',function(){
// //     return view('home');
// // });

// Route :: view('sample-page', 'home');

// //***************************************** */

// //***   12    */


// //route grouping
// Route::prefix('gallery')->group(function(){
//     Route::get('photos', function () {
//         return "<h1>This is gallery photos</h1>";
//     });

//     Route::get('videos', function () {
//         return "<h1>This is gallery videos</h1>";
//     });

//     Route::get('documents',function(){
//         return "<h1>This is gallery Documents</h1>";
//     });
// });

//middleware
// Route::get('month/{num}', function ($num) {
// if($num==1){
//     return "<h1>January</h1>";
// } elseif ($num == 2) {
//         return "<h1>February</h1>";
//     } elseif ($num == 3) {
//         return "<h1>March</h1>";
//     }
// })->middleware(['month.zero','month']);


//******************** 13 */
// Route::get('login',[LoginController::class,'login_detail']);
// Route::get('login_process', [LoginController::class, 'login_process']);
// Route::get('login_forget', [LoginController::class, 'login_forget']);

// Route::get('post/{id}',[PostController::class,'show']);

// Route::get('month/{num}',[MonthController::class,'numToMonth']);


// Route::view('layouts','layouts.sample');

// Route::get('/', function () {
//     $heading='welcome to the home page';
//     $subheading = '<h1> This is sub heading </h1>';
//     $no_of_users = 10;
//     $is_user_online = 1;
//     $settings='Checking the variable set or not (pass or not)' ;
//     $authors = [['name' => 'kamalan'],['name' => 'nimal'] ,['name' => 'perera'] ,['name' => 'parathiyar'] ,['name' => 'kannathasan'] ,['name' => 'sivakolunthu'] ,['name' => 'sivasankaran'] ];
//     return view('home',compact('heading','subheading','no_of_users', 'is_user_online', 'settings', 'authors'));
// });
// Route::view('/contact','contact');


//  20

// Route::get('/',[StudentInsertController::class,'insert_form']);
// Route::post('create',[StudentInsertController::class,'insert']);
// Route::get('view-records',[StudentInsertController::class,'student_list']);

// Route::get('edit/{id}', [StudentInsertController::class,'edit']);
// Route::post('edit/{id}',[StudentInsertController::class,'update']);

// Route::get('delete/{id}',[StudentInsertController::class,'delete']);

// Route::get('delete_all',[StudentInsertController::class,'delete_all']);


//26
//  Route::get('/', [EmployeeController::class,'create']);
//  Route::post('/store', [EmployeeController::class,'store']);

//  27
// Route::get('list',[EmployeeController::class,'list']);
// Route::get('edit/{id}',[EmployeeController::class,'edit']);
// Route::post('update/{id}',[EmployeeController::class,'update']);
// Route::get('delete/{id}',[EmployeeController::class,'delete']);

// 32
Route::view('/','form');
Route::post('user',[UserController::class],'store');


