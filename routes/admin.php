<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestrictedController;
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function ()  {
    
    Route::get('/', [RestrictedController::class,'index'])->name('admin.index');
    Route::get('/aboutme', [RestrictedController::class,'aboutme'])->name('admin.aboutme');
    Route::post('/aboutme/save', [RestrictedController::class,'aboutmeSave'])->name('admin.saveAboutme');
    Route::get('/services', [RestrictedController::class,'services'])->name('admin.services');
    Route::get('/services/create', [RestrictedController::class,'servicesCreate'])->name('admin.services.create');
    Route::get('/services/edit/{service}', [RestrictedController::class,'servicesEdit'])->name('admin.services.edit');
    Route::get('/services/delete/{service}', [RestrictedController::class,'servicesDelete'])->name('admin.services.delete');
    Route::post('/service/save', [RestrictedController::class,'serviceSave'])->name('admin.service.save');
    Route::post('/service/update', [RestrictedController::class,'serviceUpdate'])->name('admin.service.update');


    Route::get('/resume', [RestrictedController::class,'resume'])->name('admin.resume');
    Route::post('/resume', [RestrictedController::class,'resumeSave'])->name('admin.resume.save');

    Route::get('/jobs', [RestrictedController::class,'jobs'])->name('admin.jobs.index');
    Route::get('/jobs/create', [RestrictedController::class,'jobsCreate'])->name('admin.jobs.create');
    Route::get('/jobs/edit/{job}', [RestrictedController::class,'jobsEdit'])->name('admin.jobs.edit');
    Route::get('/jobs/delete/{job}', [RestrictedController::class,'jobsDelete'])->name('admin.jobs.delete');
    Route::post('/jobs/save', [RestrictedController::class,'jobsSave'])->name('admin.jobs.save');
    Route::post('/jobs/update', [RestrictedController::class,'jobsUpdate'])->name('admin.jobs.update');


    Route::get('/blogs', [RestrictedController::class,'blogs'])->name('admin.blogs.index');
    Route::get('/blogs/create', [RestrictedController::class,'blogsCreate'])->name('admin.blogs.create');
    Route::get('/blogs/edit/{blog}', [RestrictedController::class,'blogsEdit'])->name('admin.blogs.edit');
    Route::get('/blogs/delete/{blog}', [RestrictedController::class,'blogsDelete'])->name('admin.blogs.delete');
    Route::post('/blogs/save', [RestrictedController::class,'blogsSave'])->name('admin.blogs.save');
    Route::post('/blogs/update', [RestrictedController::class,'blogsUpdate'])->name('admin.blogs.update');

    route::get('/msgs', [RestrictedController::class,'msgs'])->name('admin.msgs');
    Route::get('/msgs/delete/{message}', [RestrictedController::class,'msgsDelete'])->name('admin.msgs.delete');

});