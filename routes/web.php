<?php

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
use App\Post;
Route::get('/crawal', 'TestController@index');

Route::get('/', 'PostController@all');

Route::get('/posts/{post}', 'PostController@single');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/{any}', 'AdminController@index')->where('any', '.*');


Route::get('/{post}/comments', 'CommentController@index');
Route::post('/{post}/comments', 'CommentController@store');

Route::any ( '/search', function () {
 $q = Request::get ( 'q' );
 if($q != ""){
 $posts = Post::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'body', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
 $pagination = $posts->appends ( array (
    'q' => Request::get ( 'q' ) 
  ) );
 if (count ( $posts ) > 0)
  return view('landing', compact('posts'))->withQuery ( $q );
 }
  return view ( 'landing' )->withMessage ( 'No Details found. Try to search again !' );
} );
