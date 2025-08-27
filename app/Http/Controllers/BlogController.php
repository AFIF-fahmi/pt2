<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = BlogPost::query();
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        $posts = $query->orderByDesc('published_at')->paginate(6);
        $categories = BlogPost::select('category')->distinct()->pluck('category');
        return view('blog', compact('posts', 'categories'));
    }
}
