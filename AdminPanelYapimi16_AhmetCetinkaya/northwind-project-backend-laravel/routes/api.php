<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeTerritoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TerritoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix("/auth")->group(function () {
    $controller = AuthController::class;
    Route::post("/login", [$controller, "login"]);
    Route::post("/register", [$controller, "register"]);
    Route::get("/refresh", [$controller, "refresh"])->middleware("auth:api");
});

Route::prefix("/categories")->group(function () {
    $controller = CategoryController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::group(['middleware' => ['auth.role:admin']], function () use ($controller) {
        Route::post("", [$controller, "Add"]);
        Route::put("/{id}", [$controller, "Update"]);
        Route::delete("/{id}", [$controller, "Delete"]);
    });
});

Route::prefix("/customers")->group(function () {
    $controller = CustomerController::class;
    Route::group(['middleware' => ['auth.role:admin']], function () use ($controller) {
        Route::get("", [$controller, "GetAll"]);
        Route::get("/{id}", [$controller, "GetById"]);
        Route::post("", [$controller, "Add"]);
        Route::put("/{id}", [$controller, "Update"]);
        Route::delete("/{id}", [$controller, "Delete"]);
    });
});

Route::prefix("/employees")->group(function () {
    $controller = EmployeeController::class;
    Route::group(['middleware' => ['auth.role:admin']], function () use ($controller) {
        Route::get("", [$controller, "GetAll"]);
        Route::get("/{id}", [$controller, "GetById"]);
        Route::post("", [$controller, "Add"]);
        Route::put("/{id}", [$controller, "Update"]);
        Route::delete("/{id}", [$controller, "Delete"]);
    });
});

Route::prefix("/employeesterritories")->group(function () {
    $controller = EmployeeTerritoryController::class;
    Route::group(['middleware' => ['auth.role:admin']], function () use ($controller) {
        Route::get("", [$controller, "GetAll"]);
        Route::get("/{id}", [$controller, "GetById"]);
        Route::post("", [$controller, "Add"]);
        Route::put("/{id}", [$controller, "Update"]);
        Route::delete("/{id}", [$controller, "Delete"]);
    });
});

Route::prefix("/orders")->group(function () {
    $controller = OrderController::class;
    Route::group(['middleware' => ['auth.role:admin']], function () use ($controller) {
        Route::get("", [$controller, "GetAll"]);
        Route::get("/{id}", [$controller, "GetById"]);
        Route::post("", [$controller, "Add"]);
        Route::put("/{id}", [$controller, "Update"]);
        Route::delete("/{id}", [$controller, "Delete"]);
    });
});

Route::prefix("/orderdetails")->group(function () {
    $controller = OrderDetailController::class;
    Route::group(['middleware' => ['auth.role:admin']], function () use ($controller) {
        Route::get("", [$controller, "GetAll"]);
        Route::get("/{id}", [$controller, "GetById"]);
        Route::post("", [$controller, "Add"]);
        Route::put("/{id}", [$controller, "Update"]);
        Route::delete("/{id}", [$controller, "Delete"]);
    });
});

Route::prefix("/products")->group(function () {
    $controller = ProductController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::group(['middleware' => ['auth.role:admin']], function () use ($controller) {
        Route::post("", [$controller, "Add"]);
        Route::put("/{id}", [$controller, "Update"]);
        Route::delete("/{id}", [$controller, "Delete"]);
    });
});

Route::prefix("/regions")->group(function () {
    $controller = RegionController::class;
    Route::get("", [$controller, "GetAll"]);
    Route::get("/{id}", [$controller, "GetById"]);
    Route::group(['middleware' => ['auth.role:admin']], function () use ($controller) {
        Route::post("", [$controller, "Add"]);
        Route::put("/{id}", [$controller, "Update"]);
        Route::delete("/{id}", [$controller, "Delete"]);
    });
});

Route::prefix("/shippers")->group(function () {
    $controller = ShipperController::class;
    Route::group(['middleware' => ['auth.role:admin']], function () use ($controller) {
        Route::get("", [$controller, "GetAll"]);
        Route::get("/{id}", [$controller, "GetById"]);
        Route::post("", [$controller, "Add"]);
        Route::put("/{id}", [$controller, "Update"]);
        Route::delete("/{id}", [$controller, "Delete"]);
    });
});

Route::prefix("/suppliers")->group(function () {
    $controller = SupplierController::class;
    Route::group(['middleware' => ['auth.role:admin']], function () use ($controller) {
        Route::get("", [$controller, "GetAll"]);
        Route::get("/{id}", [$controller, "GetById"]);
        Route::post("", [$controller, "Add"]);
        Route::put("/{id}", [$controller, "Update"]);
        Route::delete("/{id}", [$controller, "Delete"]);
    });
});

Route::prefix("/territories")->group(function () {
    $controller = TerritoryController::class;
    Route::group(['middleware' => ['auth.role:admin']], function () use ($controller) {
        Route::get("", [$controller, "GetAll"]);
        Route::get("/{id}", [$controller, "GetById"]);
        Route::post("", [$controller, "Add"]);
        Route::put("/{id}", [$controller, "Update"]);
        Route::delete("/{id}", [$controller, "Delete"]);
    });
});
