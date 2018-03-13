<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;
use Session;
use Hash;
use Input;

class PostController extends Controller
{
  public function __construct()
  {
    $this->middleware('role:superadministrator|administrator|editor|author|contributor');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('manage.posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('manage.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = new Post();
        $post->slug = $request->slug;
        $post->title = $request->slug;
        $post->excerpt = $request->excerpt;
        $post->content = $request->content;
        $post->comment_count = 0;
        $post->published_at = date('Y-m-d H:i:s');
        $post->author_id = Auth::user()->id;
        $post->save();

        $posts = Post::all();
        return view('manage.posts.index')->withPosts($posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::where('id', $id)->get()->first();
      return view('manage.posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $post = Post::where('id', $id);
        return view('manage.posts.edit')->withPost($post);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
      //   $this->validate($request, [
      //     'slug' => 'required|unique:slugs'
      // ]);
      $post = Post::findOrFail($id);
      $post->slug = $request->slug;
      $post->title = $request->slug;
      $post->excerpt = $request->excerpt;
      $post->content = $request->content;
      $post->comment_count = 0;
      $post->published_at = date('Y-m-d H:i:s');
      $post->author_id = Auth::user()->id;

      $post->save();

      // $user->syncRoles(explode(',', $request->roles));
      return redirect()->route('posts.show', $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post= Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index');
    }
    public function apiCheckUnique(Request $request)
    {
      return json_encode(!Post::where('slug', '=', $request->slug)->exists());
    }
}
