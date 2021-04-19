<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

//get post put patch delete options
Route::get('/', function () {
    return view('welcome');
});
    // Route::get('/foo', function () {
    //     return 'Hello World'.$_GET['a'];
    // });
    // //匹配用户指定的几个请求类型
    // // Route::match(['get','post'],'/', function () {
    // //     return 'Hello World';
    // // });
    // //表示匹配用户指定的几个请求类型（通过第一个参数去指定）的请求 any表示匹配中路由所支持的全部请求类型
    // // Route::any('/', function () {
    // //     return 'Hello World';
    // // });
    // Route::get('/{id}', function ($id) {
    //     return 'Hello World+'.$id;
    // });
    // //别名
    // Route::get('/1234564654654654', function ($id) {
    //     return 'Hello World+'.$id;
    // })->name('h1');

    // //路由群组
    // Route::group(['prefix'=>'admin/user'],function(){
    //     Route::get('/login', function () {
    //         return '路由群组';
    //     });
    // });
//控制器路由
Route::get('test1',[TestController::class,'test1']);
Route::get('test2',[TestController::class,'test2']);

//增删改查
Route::get('add',[TestController::class,'add']);
Route::get('del',[TestController::class,'del']);
Route::get('mod',[TestController::class,'mod']);
Route::get('select',[TestController::class,'select']);

//view
Route::get('test3',[TestController::class,'test3']);
Route::get('test4',[TestController::class,'test4']);
Route::get('test5',[TestController::class,'test5']);
Route::get('test6',[TestController::class,'test6']);
Route::get('test7',[TestController::class,'test7']);
Route::get('test8',[TestController::class,'test8']);
Route::get('test9',[TestController::class,'test9']);
Route::get('test10',[TestController::class,'test10']);
Route::get('test11',[TestController::class,'test11']);
Route::get('test12',[TestController::class,'test12']);
Route::get('test13',[TestController::class,'test13']);