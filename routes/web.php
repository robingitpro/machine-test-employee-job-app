<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

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

Route::get("/", [JobController::class, 'index'])->name('home');
Route::group(['prefix' => 'jobs', 'as' => 'jobs.'], function () {
    Route::get('post', [JobController::class, 'post_a_job'])->name('post');
    Route::post('store', [JobController::class, 'store'])->name('store');
    Route::get('view/{id}', [JobController::class, 'job_detail'])->name('view');
    Route::post('load', [JobController::class, 'searchajaxjobsload'])->name('load');
});
Route::group(['prefix' => 'candidates', 'as' => 'candidates.'], function () {
    Route::get('create/{id}', [CandidateController::class, 'index'])->name('create');
    Route::post('store/{id}', [CandidateController::class, 'store'])->name('store');
    Route::get('list/{id}', [CandidateController::class, 'candidate_list'])->name('list');
});
