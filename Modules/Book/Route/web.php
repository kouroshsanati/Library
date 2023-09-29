<?php

use Illuminate\Support\Facades\Route;
use Modules\Book\Controller\BookController;


/*Route::get('/', function () {

});*/
Route::get('/books/deleted',[BookController::class,'delete']);
Route::delete('/books/force-delete/{id}',[BookController::class,'deleteForce'])->name('book.force.delete');
Route::resource('books', BookController::class);

