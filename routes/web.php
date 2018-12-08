<?php
Route::resource('post','PostController')->only('index','create','store');
