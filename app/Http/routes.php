<?php
/*
|--------------------------------------------------------------------------
| Import class Post
|--------------------------------------------------------------------------
|
*/

use App\Post;



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/post/{id}', 'PostsController@show_post');
//
//Route::resource('/posts', 'PostsController');
//
//Route::get('/contact', 'PostsController@contact');
//
//Route::get('/about/{name}', 'PostsController@about');


/*
 * INSERT DATA TO DATABASE
 */

Route::get('/insert', function(){
    DB::insert('insert into posts(title, content) values(?,?)', ['PHP with Laravel', 'This is most amazing thing that could happen']);
});



/*
 |--------------------------------------------------------------
 | DATANASE Raw SQL Queries
 |--------------------------------------------------------------
 */

Route::get('/read', function(){
    $results = DB::select('select * from posts');

    $for_print = array();

    foreach($results as $post){
        array_push($for_print,$post->title);
    }
    //it returns every found title as array

    return $for_print;
});


Route::get('/find', function(){
//    $posts = Post::all();
//
//    foreach($posts as $post){
//        return $post->title;
//    }

    if(Post::find(2)){
        return Post::find(2)->title;
    }else return "Not found !!";
});


Route::get('/findwhere', function(){
    $posts = Post::where('id',2)->orderBy('id', 'desc')->take(1)->get();
    foreach($posts as $post) return $post->title;
});