<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
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

Route::get('/register',  [RegistrationController:: class, 'index']);
Route::post('/register',  [RegistrationController:: class, 'register']);


// Route::get('/', function () {
//     return view("welcome");
// });

// Route::get('/demo/{name}/{id?}', function ($name, $id = null) {
//     //    echo $name. "  " ."<br/>";
// //    echo $id;
//     $data = compact("name", "id");
//     return view("demo")->with($data);
// });

// Route::get("/test", function () {
//     echo "Testing the route";
// });
// Route::get("/home/{name?}",function($name="Sumit"){
//     $data = compact("name");
//     return view("home")->with($data);
// });



// Route::get("/home/{name?}/{sirname?}", function ($name = "sumit", $sirname = "narwal") {
//     //    $demo = "<h2>Hii this id H2</h2>";
//     //echo "this is $name $sirname";
//     $result = compact("name", "sirname");
  
//     return view("home")->with($result);

// });
// Route::get("/home/{name?}/{sirname?}", function ($name = null, $sirname = null) {
//     //    $demo = "<h2>Hii this id H2</h2>";
//         $data = compact("name", "sirname");
//         return view("home")->with($data);

//     });