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

route::get("/", [JobController::class, 'index'])->name('home');
Route::group(['prefix' => 'jobs', 'as' => 'jobs.'], function () {
    route::get('post', [JobController::class, 'post_a_job'])->name('post');
    route::post('store', [JobController::class, 'store'])->name('store');
    route::get('view/{id}', [JobController::class, 'job_detail'])->name('view');
    route::post('load', [JobController::class, 'searchajaxjobsload'])->name('load');
});
Route::group(['prefix' => 'candidates', 'as' => 'candidates.'], function () {
    route::get('create/{id}', [CandidateController::class, 'index'])->name('create');
    route::post('store/{id}', [CandidateController::class, 'store'])->name('store');
    route::get('list/{id}', [CandidateController::class, 'candidate_list'])->name('list');
});