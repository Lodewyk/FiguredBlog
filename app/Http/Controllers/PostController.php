<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

/**
 * Class HomeController
 *
 * @category Http
 * @package  Controllers
 *
 * @author   Lodewyk Duminy
 * @since    25 August 2018
 */
class PostController extends Controller
{
    /**
     * Redirects to the new post screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function new()
    {
        return view('postEditor');
    }

    /**
     * Redirects to the edit screen along with
     * the data of the post to be edited.
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $post = Post::find($id);
        return view('postEditor', compact('post'));
    }

    /**
     * Saves post data and redirects back to the home page.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(Request $request)
    {
        $post = new Post();
        $id = $request->get('id');
        $title = $request->get('title');
        $content = $request->get('content');
        if (!empty($id)) {
            $post = Post::find($id);
        }
        $post->title = $title;
        $post->content = $content;
        $post->save();
        return redirect('home');
    }

    /**
     * Deletes a post
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $post = Post::find($id);
        $post->delete();
        return redirect('home');
    }
}