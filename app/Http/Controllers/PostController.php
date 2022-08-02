<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $allPosts = Post::all();

        return view("posts", ["allPosts" => $allPosts]);
    }





    public  static function convert($data)
    {
        return Carbon::parse($data)->format('m/d/Y');
    }



    public function show($id)
    {
        // $post = Post::where('id', $id)->first();
        $post = Post::find($id);

        return view('post', ["post" => $post]);
    }



    public function create()
    {

        return view('create_post');
    }

    public function store()
    {
        $pureDada = request()->validate([
            "author" => "required",
            "title" => "required",
            "body" => "required",
        ]);


        // Test
        //$allData = request()->all();
        // dd($allData);
        // dd($pureDada);

        // 1 nacin
        $post = new Post();
        $post->author = request("author");
        $post->title = request("title");
        $post->body = request("body");
        $post->save();


        // 2 nacin popunjava se fillable properyty u samom modelu
        $post = new Post();
        $post->create($pureDada);


        // return redirect("/")->with('create', 'Post CREATED');
        //name routing
        return redirect(route('home'))->with('create', 'Post CREATED');
    }



    // 1 Nacin EDIT  **************************************************************
    /*
    public function edit($id)
    {
        $post = Post::find($id);



       // return view('edit', ["post" => $post]);
        return view('edit_post', compact('post'));
    }
*/

    // 2 Nacin EDIT route model binding i type hinting
    public function edit(Post $post)
    {

        // return view('edit', ["post" => $post]);
        return view('edit_post', compact('post'));
    }



    // 1 nacin update  *****************************************
    /*
    public function update($id)
    {
        $post = Post::find($id);
        $pureData = request()->validate([
            "author" => "required",
            "title" => "required",
            "body" => "required",
        ]);

        $post->author = request("author");
        $post->title = request("title");
        $post->body = request("body");
        $post->update();

        return redirect('/post/' . $post->id)->with('updated', "Post UPDATED");
    }
    */

    // 2 nacin route model binding i type hinting
    public function update(Post $post)
    {

        $pureData = request()->validate([
            "author" => "required",
            "title" => "required",
            "body" => "required",
        ]);


        $post->update($pureData);

        return redirect('/post/' . $post->id)->with('updated', "Post UPDATED");
    }



    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/')->with('delete', 'Post DELETED');
    }
}
