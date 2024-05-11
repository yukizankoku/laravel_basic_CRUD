<?php

namespace App\Http\Controllers;

use App\Models\PortofolioPost;
use App\Models\PortofolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('admin')) {
            $posts = PortofolioPost::latest()->get();
        } else {
            $posts = PortofolioPost::latest()->where('user_id', auth()->user()->id)->get();
        }
    
        return view('dashboard.posts.index', [
            "title" => "My Posts",
            "posts" => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create',[
            'categories' => PortofolioCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255|unique:portofolio_posts',
            'portofolio_category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');
        $validatedData['slug'] = Str::of($validatedData['title'])->slug('-');

        PortofolioPost::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New Post has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortofolioPost  $portofolioPost
     * @return \Illuminate\Http\Response
     */
    public function show(PortofolioPost $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortofolioPost  $portofolioPost
     * @return \Illuminate\Http\Response
     */
    public function edit(PortofolioPost $post)
    {
        return view('dashboard.posts.edit',[
            'categories' => PortofolioCategory::all(),
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortofolioPost  $portofolioPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortofolioPost $post)
    {
        $rules = [
            'portofolio_category_id' => 'required',
            'body' => 'required',
            'image' => 'image|file|max:1024',
            'title' => 'required|max:255'
        ];

        if($request->title != $post->title){
            $rules['title'] = 'required|max:255|unique:portofolio_posts';
        }


        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');
        $validatedData['slug'] = Str::of($validatedData['title'])->slug('-');

        PortofolioPost::where('id', $post->id)
                        ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Post has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortofolioPost  $portofolioPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortofolioPost $post)
    {
        if($post->image) {
            Storage::delete($post->image);
        }

        PortofolioPost::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Post Has been Deleted!');
    }

}
