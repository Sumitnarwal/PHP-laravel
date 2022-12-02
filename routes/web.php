<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/', function () {
    return view("index"); });
Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer', [CustomerController::class, 'view']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::get("/customer/delete/{id}", [CustomerController::class, "delete"])->name("customer.delete");
Route::get("/customer/edit/{id}", [CustomerController::class, "edit"])->name("customer.edit");
Route::post("/customer/update/{id}", [CustomerController::class, "update"])->name("customer.update");

Route::get('get-all-session', function () {
    $session = session()->all();
    p($session);
});

Route::get('set-session', function (Request $request) {
    $request->session()->put('user_name', "INT");
    $request->session()->put('user_id', "123");
    return redirect('get-all-session');

});
Route::get('destroy-session', function () {
    session()->forget('user_name');
  //  session()->forget('user_id');
   
    return redirect('get-all-session');

});



// Route::get("/customer",function(){
// $customers=Customer::all();
// echo "<pre>";
// print_r($customers->toArray());
// });

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