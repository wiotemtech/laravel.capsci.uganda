<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::query();


        if ($request->has('searchQuery') && $request->searchQuery !== '') {
            $query->where('title', 'like', '%' . $request->searchQuery . '%');
        }


        $blogs = $query->latest()->paginate(5);

        return response()->json([
            'message' => 'Blogs retrieved successfully',
            'blogs' => $blogs,
        ]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:17408',
        ]);


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $validated['image'] = $imagePath;
        }


        $blog = Blog::create($validated);


        return response()->json([
            'message' => 'Blog created successfully',
            'blog' => $blog,
        ], 201);
    }


    public function edit($id)
    {
        $blog = Blog::find($id);
        return response()->json([
            'blog' => $blog
        ], 200);
    }



    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:17825792',
        ]);

        $blog = Blog::findOrFail($id);


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $validated['image'] = $imagePath;
        }

        $blog->update($validated);

        return response()->json([
            'message' => 'Blog updated successfully',
            'blog' => $blog,
        ], 200);
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $image_path = public_path('storage/' . $blog->image);

        if (file_exists($image_path)) {
            @unlink($image_path);
        }

        $blog->delete();

        return response()->json([
            'message' => 'Blog deleted successfully'
        ], 200);
    }
}
