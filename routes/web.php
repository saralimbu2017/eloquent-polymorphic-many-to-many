<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Video;
use App\Models\Tag;
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

Route::get('/', function () {
    return view('welcome');
});

//Route for insert operation
Route::get('/insert', function () {
    //creating a post 
    $post = Post::create(['name'=>'My first post']);
    //creating a tag1
    $tag1 = Tag::find(1);
    //attaching tag1 to post
    $post->tags()->save($tag1);

    //Creating a video
    $video = Video::create(['name'=>'video.mov']);
    //creating a tag
    $tag2 = Tag::find(2);
    //attaching a tag to a video
    $video->tags()->save($tag2);
});
