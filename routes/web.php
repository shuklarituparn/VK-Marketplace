<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
Route::get('api/v1/login', [Controllers\LoginController::class, 'login_screen'])->name('login.screen');
Route::post('/api/v1/login', [Controllers\LoginController::class, 'login_user'])->name('login.submit');
Route::get('/api/v1/register', [Controllers\RegisterController::class, 'register_screen'])->name('register.screen');
Route::post('/api/v1/register', [Controllers\RegisterController::class, 'register_user'])->name('register.submit');



Route::middleware('auth')->group(function () {
    Route::get('api/v1/cities/', [Controllers\CitiesController::class, 'search_cities'])->name('cities.show');
    Route::get('api/v1/cities/{cityID}', [Controllers\CitiesController::class, 'show_city'])->name('cities.search');
    Route::get('/api/v1/products', [Controllers\ProductController::class, 'search_products'])->name('products.show');
    Route::get('/api/v1/products/{productId}', [Controllers\ProductController::class, 'get_product'])->name('products.search');
    Route::get('/api/v1/category/{categoryId}', [Controllers\CategoryController::class, 'get_category'])->name('category.search');
    Route::get('/api/v1/subcategory/', [Controllers\SubCategoryController::class, 'search_subcategory'])->name('subcategory.search');
    Route::get('/api/v1/subcategory/{subcategoryId}', [Controllers\SubCategoryController::class, 'get_subcategory'])->name('subcategory.search');
    Route::get('api/v1/user/cart', [Controllers\CartsController::class, 'show_cart'])->name('cart.show');
    Route::put('api/v1/user/cart', [Controllers\CartsController::class, 'edit_cart'])->name('cart.submit');
    Route::delete('api/v1/user/cart', [Controllers\CartsController::class, 'remove_cart'])->name('cart.delete');
    Route::post('api/v1/user/order', [Controllers\OrdersController::class, 'order_item'])->name('order.submit');
    Route::get('api/v1/user/orders', [Controllers\OrdersController::class, 'show_orders'])->name('order.show');
    Route::get('api/v1/user/orders/deliveries', [Controllers\DeliveryController::class, 'show_delivery'])->name('deliveries.show');
    Route::post('api/v1/logout', [Controllers\LogoutController::class, 'logout'])->name('logout.submit');

});
Route::group(['middleware' => ['isAdmin', 'auth']], function () {
    Route::post('api/v1/products', [Controllers\ProductController::class, 'create_product'])->name('products.create');
    Route::put('api/v1/products/{productID}', [Controllers\ProductController::class, 'edit_product'])->name('products.edit');
    Route::delete('api/v1/products/{ProductId}', [Controllers\ProductController::class, 'delete_product'])->name('products.delete');
    Route::post('api/v1/cities',[Controllers\CitiesController::class, 'create_city'])->name('cities.create');
    Route::put('api/v1/cities/{cityID}',[Controllers\CitiesController::class, 'edit_city'])->name('cities.edit');
    Route::delete('api/v1/cities/{cityID}',[Controllers\CitiesController::class, 'delete_city'])->name('cities.delete');
    Route::get('api/v1/warehouse/', [Controllers\WarehouseController::class, 'show_warehouse'])->name('warehouse.show');
    Route::post('api/v1/warehouse/',[Controllers\WarehouseController::class, 'create_warehouse'])->name('warehouse.edit');
    Route::post('api/v1/warehouse/{warehouseID}',[Controllers\WarehouseController::class, 'edit_warehouse'])->name('warehouse.delete');
    Route::put('api/v1/warehouse/{warehouseID}',[Controllers\WarehouseInventoryController::class, 'edit_warehouse_inventory'])->name('warehouse.addInventory');
    Route::delete('api/v1/warehouse/{warehouseID}',[Controllers\WarehouseController::class, 'delete_warehouse'])->name('logout.submit');
});


