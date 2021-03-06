<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Listing;
use App\Comment;
use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{

    function add($listing='personal'){
  /*      $categories = [];
        $categoriesParent = Category::whereNull('parent_id')->get();
        foreach($categoriesParent as $parent) {
            $categories[ $parent->name ] = $parent->childs;
        }
*/
        $categories=self::$categories;
        $countries =  self::$countries;

        switch ($listing) {
            case 'personal':
                $view = 'createPersonal';
                break;
            case 'events':
                $view = 'createEvent';
                break;
            case 'sale':
                $view = 'createSale';
                break;
            case 'publicity':
                $view = 'createPublicity';
                break;
            default:
                $view = 'createPersonal';
                break;
        }

        return view("posts.$view", compact('categories', 'countries'));
    }





    function addSale($listing='sale'){
        /*$categories = [];
        $categoriesParent = Category::whereNull('parent_id')->get();
        foreach($categoriesParent as $parent) {
            $categories[ $parent->name ] = $parent->childs;
        }*/
        $categories=self::$categories;
        $countries =  self::$countries;

        switch ($listing) {
            case 'personal':
                $view = 'createPersonal';
                break;
            case 'events':
                $view = 'createEvent';
                break;
            case 'sale':
                $view = 'createSale';
                break;
            case 'publicity':
                $view = 'createPublicity';
                break;
            default:
                $view = 'createPersonal';
                break;
        }

        return view("posts.$view", compact('categories', 'countries'));
    }


    function addPublicity($listing='publicity'){
        /*$categories = [];
        $categoriesParent = Category::whereNull('parent_id')->get();
        foreach($categoriesParent as $parent) {
            $categories[ $parent->name ] = $parent->childs;
        }*/
        $categories=self::$categories;
        $countries =  self::$countries;

        switch ($listing) {
            case 'personal':
                $view = 'createPersonal';
                break;
            case 'events':
                $view = 'createEvent';
                break;
            case 'sale':
                $view = 'createSale';
                break;
            case 'publicity':
                $view = 'createPublicity';
                break;
            default:
                $view = 'createPersonal';
                break;
        }

        return view("posts.$view", compact('categories', 'countries'));
    }


    function addEvents($listing='events'){

        /*$categories = [];
        $categoriesParent = Category::whereNull('parent_id')->get();
        foreach($categoriesParent as $parent) {
            $categories[ $parent->name ] = $parent->childs;
        } */

        $categories=self::$categories;
        $countries =  self::$countries;

        switch ($listing) {
            case 'personal':
                $view = 'createPersonal';
                break;
            case 'events':
                $view = 'createEvent';
                break;
            case 'sale':
                $view = 'createSale';
                break;
            case 'publicity':
                $view = 'createPublicity';
                break;
            default:
                $view = 'createPersonal';
                break;
        }

        return view("posts.$view", compact('categories', 'countries'));
    }

    function addAction(Request $req) {
        $req->validate([
            'title' => 'required',
            'listing' => 'required|exists:App\Listing,slug',
            'categories' => 'required',
            'post_content' => 'required',
            'videourl' => 'nullable|url',
            'country' => 'required|size:3',
            'state' => 'required',
            'city' => 'required',
            'date' => 'nullable|date',
            'time' => 'nullable',
            'fileToUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $gallery = uniqid() . time() . '.' . Str::slug($req->fileToUpload->getClientOriginalExtension());
        $req->fileToUpload->move(public_path('uploads'), $gallery);

        $slug = Str::slug($req->title);
        $i = 1;
        while(Post::where('slug', $slug)->count() > 0) {
            $slug .= $i++;
        }

        $post = new Post;

        $post->user_id = Auth::user()->id;
        $post->listing_id = Listing::where('slug', $req->listing)->value('id');
        $post->title = $req->title;
        $post->slug = $slug;
        $post->gallery = $gallery;
        $post->description = $req->post_content;
        $post->video_url = $req->videourl;
        $post->country = $req->country;
        $post->state = $req->state;
        $post->city = $req->city;
        $post->price = $req->price;
        $post->currency = $req->currency;
        $post->brand = $req->brand ?? null;
        $post->condition = $req->condition ?? null;
        $post->short_description = $req->short_description ?? null;
        $post->specifications = $req->specifications ?? null;
        if ($req->has('date') && $req->has('time')) {
            $post->posted_at = Carbon::createFromFormat('Y-m-d H:i', $req->date .' ' . $req->time);
        }
        $countries =  self::$countries;

        session([
            'post' => $post,
            'categories' => $req->categories
        ]);

        return view('posts.preview', [
            'countries' => $countries,
            'post' => $post,
            'categories' => $req->categories
        ]);


    }


    function saveAction() {
        $post = session('post');
        $categories = session('categories');

        session([
            'post' => null,
            'categories' => null
        ]);

        if ($post && $categories) {
            $post->save();
            $post->categories()->sync($categories);

            return redirect()->route('home')->with('success', "your have add new post !");
    }

        return redirect()->route('home');

    }

    function cancelAction() {
        session([
            'post' => null,
            'categories' => null
        ]);
        //return redirect('posts/publicity');
        return redirect()->back();
    }

    public function detail($id) {
        $post = Post::find($id);

        if (!$post) {
            abort(404);
        }

        $posts = Post::where('id', '<>', $id)->latest()->limit(3)->get();

        $listings = Listing::all();
        $categories = Category::all();

        return view('posts.detailPost', compact('post', 'posts', 'listings', 'categories'));
    }

    public function postComment(Request $req, $postID) {

        if ( ! Post::find($postID)) {
            abort(404);
        }

        $req->validate([
            'author' => 'required|min:2',
            'email' => 'required|email',
            'url' => 'url|nullable',
            'message' => 'required'
        ]);

        $data = $req->only('author', 'email', 'url', 'message');
        $data['post_id'] = $postID;
        Comment::create($data);

        return redirect()->route('post-detail', [$postID]);
    } 
}
