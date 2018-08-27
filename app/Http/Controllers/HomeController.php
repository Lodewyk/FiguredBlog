<?php

namespace App\Http\Controllers;

use App\Post;

/**
 * Class HomeController
 *
 * @category Http
 * @package  Controllers
 *
 * @author   Lodewyk Duminy
 * @since    25 August 2018
 */
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Retrieves all the posts currently stored in the post table
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function all()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
}
