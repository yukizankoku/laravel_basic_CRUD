<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortofolioPost;
use App\Models\PortofolioCategory;
use App\Models\User;

class PortofolioPostController extends Controller
{
    public function index()
    {
        return view('portofolio',[
            "title" => "Portofolio",
            "categories" => PortofolioCategory::all(),
            // menampilkan postingan berurutan by ID
            // "posts" => PortofolioPost::all(),

            // menampilkan postingan terbaru
            "posts" => PortofolioPost::latest()->FilterPost(request(['search']))->paginate(7)->withQueryString(),
        ]);
    }

    public function show(PortofolioPost $post)
    {
        return view('portofolio_post',[
            "title" => "Portofolio",
            "post" => $post
        ]);
    }

    public function cat(PortofolioCategory $category)
    {
        return view('portofolio_category',[
            "title" => $category->name,
            "posts" => $category->posts,
            "category" => $category->name
        ]);
    }

    public function user(User $user)
    {
        return view('portofolio_user',[
            "title" => $user->name,
            "posts" => $user->posts,
            "user" => $user->name
        ]);
    }
}
