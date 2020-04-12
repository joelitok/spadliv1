<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Post;
use Validator;
use App\Listing;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    function home() {
        $salesListingId = Listing::where('slug', 'sales')->value('id');
        $eventsListingId = Listing::where('slug', 'events')->value('id');
        $personalListingId = Listing::where('slug', 'personal')->value('id');
        $publicityListingId = Listing::where('slug', 'publicity')->value('id');
        $posts = Post::latest()->get();
        return view('home', compact('salesListingId', 'eventsListingId', 
                    'personalListingId', 'publicityListingId', 'posts'));
    }

    function postsByListing($slugListing) {
        $salesListingId = Listing::where('slug', 'sales')->value('id');
        $eventsListingId = Listing::where('slug', 'events')->value('id');
        $personalListingId = Listing::where('slug', 'personal')->value('id');
        $publicityListingId = Listing::where('slug', 'publicity')->value('id');

        $listingID = Listing::where('slug', $slugListing)->value('id');
        
        $posts = Post::where('listing_id', $listingID)->latest()->get();
        
        return view('home', compact('salesListingId', 'eventsListingId', 
                    'personalListingId', 'publicityListingId', 'posts'));
    }

    function postsByCategory($categorySlug) {
        $salesListingId = Listing::where('slug', 'sales')->value('id');
        $eventsListingId = Listing::where('slug', 'events')->value('id');
        $personalListingId = Listing::where('slug', 'personal')->value('id');
        $publicityListingId = Listing::where('slug', 'publicity')->value('id');
        
        $category = Category::where('slug', $categorySlug)->first();

        $posts = $category->posts()->latest()->get();

        return view('home', compact('salesListingId', 'eventsListingId', 
                    'personalListingId', 'publicityListingId', 'posts'));
    }


    function auth() {
        $countries =  self::$countries;
        return view('auth', compact('countries'));
    }


    function login(Request $req) {

        $validator = Validator::make($req->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('auth?page=login')->withInput($req->all())->withErrors($validator->errors());
        }

        $userdata = [
            'email' => $req->email,
            'password' => $req->password
        ];
    
        // attempt to do the login
        if ( ! Auth::attempt($userdata)) {
            return redirect('auth?page=login')->with('error', "Incorrect email or password !");
        }

        //dd(Auth::user());
        // Login success 
        //dd("Login success");
        return redirect('posts/add');
    }


    function register(Request $req) {

        $validator = Validator::make($req->all(),[
            'first_name' => 'required',
            'last_name' => 'nullable',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
            'day' => 'required|numeric|between:1,31',
            'month' => 'required|numeric|between:1,12',
            'year' => 'required|numeric|between:1940,' . date('Y'),
            'gender' => 'required|in:M,F',
            'city' => 'required',
            'country' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('auth?page=register')->withInput($req->all())->withErrors($validator->errors());
        }

        User::create([
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'birthdate' => Carbon::createFromDate($req->year, $req->month, $req->day),
            'gender' => $req->gender,
            'city' => $req->city,
            'country' => $req->country,
            'email_verified_at' => Carbon::now()
        ]);

        return redirect('auth?page=login')->with('success', "Successful registration, now login !");
    }

}
