<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
Route::get('/api/v1/login', [Controllers\LoginController::class, 'login_screen']);
Route::post('/api/v1/login', [Controllers\LoginController::class, 'login_user']);
Route::get('/api/register', [Controllers\RegisterController::class, 'register_screen']);
Route::post('/api/register', [Controllers\RegisterController::class, 'register_user']);



Route::middleware('auth')->group(function () {
    Route::get('api/v1/cities/', [Controllers\CitiesController::class, 'search_cities']);
    Route::get('api/v1/cities/{cityID}', [Controllers\CitiesController::class, 'show_city']);
    Route::get('/api/v1/products', [Controllers\ProductController::class, 'search_products']);
    Route::get('/api/v1/products/{productId}', [Controllers\ProductController::class, 'get_product']);
    Route::get('/api/v1/category/{categoryId}', [Controllers\CategoryController::class, 'get_category']);
    Route::get('/api/v1/subcategory/', [Controllers\SubCategoryController::class, 'search_subcategory']);
    Route::get('/api/v1/subcategory/{subcategoryId}', [Controllers\SubCategoryController::class, 'get_subcategory']);
    Route::get('api/v1/user/cart', [Controllers\CartsController::class, 'show_cart']);
    Route::put('api/v1/user/cart', [Controllers\CartsController::class, 'edit_cart']);
    Route::delete('api/v1/user/cart', [Controllers\CartsController::class, 'remove_cart']);
    Route::post('api/v1/user/order', [Controllers\OrdersController::class, 'order_item']);
    Route::get('api/v1/user/orders', [Controllers\OrdersController::class, 'show_orders']);
    Route::get('api/v1/user/orders/deliveries', [Controllers\DeliveryController::class, 'show_delivery']);
    Route::post('api/v1/logout', [Controllers\LogoutController::class, 'logout']);

});
Route::group(['middleware' => ['isAdmin', 'auth']], function () {
    Route::post('api/v1/products', [Controllers\ProductController::class, 'create_product']);
    Route::put('api/v1/products/{productID}', [Controllers\ProductController::class, 'edit_product']);
    Route::delete('api/v1/products/{ProductId}', [Controllers\ProductController::class, 'delete_product']);
    Route::post('api/v1/cities',[Controllers\CitiesController::class, 'create_city']);
    Route::put('api/v1/cities/{cityID}',[Controllers\CitiesController::class, 'edit_city']);
    Route::delete('api/v1/cities/{cityID}',[Controllers\CitiesController::class, 'delete_city']);
    Route::get('api/v1/warehouse/', [Controllers\WarehouseController::class, 'show_warehouse']);
    Route::post('api/v1/warehouse/',[Controllers\WarehouseController::class, 'create_warehouse']);
    Route::post('api/v1/warehouse/{warehouseID}',[Controllers\WarehouseController::class, 'edit_warehouse']);
    Route::put('api/v1/warehouse/{warehouseID}',[Controllers\WarehouseInventoryController::class, 'edit_warehouse_inventory']);
    Route::delete('api/v1/warehouse/{warehouseID}',[Controllers\WarehouseController::class, 'delete_warehouse']);
});


