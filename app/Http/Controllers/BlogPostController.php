<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    public function create()
    {
        return view('dashboard');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        if (BlogPost::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ])) {
            return back()->with('success', 'Blog uploaded successfully');
        }
    }

    public function index()
    {
        // Fetch all blog posts from the database
        // dd("tyuio");
        $blogPosts = BlogPost::all();
        // dd($blogPosts);
        // Pass the data to the view
        return view('research-blog', compact('blogPosts'));
    }

    public function readMorePost($id, Request $request)
{
    // Fetch the specific blog post by ID
    $blogPost = BlogPost::find($id);

    // Check if the blog post exists
    if (!$blogPost) {
        abort(404); // Return a 404 error if the post is not found
    }

    // Get the title and content query parameters from the request
    $title = $request->query('title');
    $content = $request->query('content');

    // Pass the blog post data, title, and content to the "posts.blade.php" view
    return view('posts', compact('blogPost', 'title', 'content'));
}


}


