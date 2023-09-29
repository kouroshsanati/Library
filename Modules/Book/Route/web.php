<?php

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {

});*/

Route::resource('book', \Modules\Book\Controller\BookController::class);
