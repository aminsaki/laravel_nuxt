<?php

use Illuminate\Support\Facades\Route;

use Facades\App\Test\Amin;
use App\Http\Controllers as Controller;


Route::get('/',[Controller\HomeController::class,'index']);
