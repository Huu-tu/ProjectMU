<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleDriveController;
use App\Http\Controllers\CloudController;
use App\Http\Controllers\DropboxCloudController;
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


//New API
Route::get('/', function () {
    return view('main.home');
});

Route::get('/home', function () {
    return view('main.main');
})->name('home');

Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleDriveController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleDriveController::class, 'callbackFromGoogle'])->name('callback');
});

Route::prefix('dropbox')->name('dropbox.')->group( function(){
    Route::get('login', [DropboxCloudController::class, 'loginWithDropbox'])->name('login');
    Route::any('callback', [DropboxCloudController::class, 'callbackFromDropbox'])->name('callback');
});

Route::get('/get-drive-serive',[
    GoogleDriveController::class,
    'getDriveSerive'
]);

Route::get('/get-single-drive/{option}/{id}',[
    CloudController::class,
    'getSingleDrive'
]);

Route::post('/file-upload-cloud/{option}',[
    CloudController::class,
    'upLoadDrive'
]);

Route::post('/new-folder/{option}',[
    CloudController::class,
    'newFolder'
]);

Route::get('/get-all-file-cloud/{option}',[
    CloudController::class,
    'getAllDrive'
]);

Route::delete('/file-delete-cloud/{option}/{files}',[
    CloudController::class,
    'deleteDrive'
]);

Route::get('/get-file-upLoad-cloud/{option}/{key}',[
    CloudController::class,
    'getfileUpLoadCloud'
]);

Route::get('/file-down-load-cloud/{option}/{key}',[
    CloudController::class,
    'fileDownLoadCloud'
]);

//Old API
Route::get('/getAllFileUploadCloud/{option}',[
    FileUploadController::class,
    'getAllFileUpload'
]);

Route::get('/getFileUpload/{option}/{key}',[
    FileUploadController::class,
    'getFileUpload'
]);

Route::post('/fileUploadToCloud/{option}',[
    FileUploadController::class,
    'fileUploadToCloud'
]);

Route::get('/fileDownLoadCloud/{option}/{key}',[
    FileUploadController::class,
    'fileDownLoadCloud'
]);

Route::delete('/fileDeleteCloud/{option}/{key}',[
    FileUploadController::class,
    'fileDeleteCloud'
]);