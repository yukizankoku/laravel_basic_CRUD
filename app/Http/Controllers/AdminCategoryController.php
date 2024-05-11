<?php

namespace App\Http\Controllers;

use App\Models\PortofolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            "title" => "Post Categories",
            "categories" => PortofolioCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
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
            'name' => 'required|max:255|unique:portofolio_categories',
        ]);

        $validatedData['slug'] = Str::of($validatedData['name'])->slug('-');

        PortofolioCategory::create($validatedData);

        return redirect('/dashboard/categories')->with('success', 'New Category has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortofolioCategory  $portofolioCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PortofolioCategory $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortofolioCategory  $portofolioCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PortofolioCategory $category)
    {
        return view('dashboard.categories.edit',[
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortofolioCategory  $portofolioCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortofolioCategory $category)
    {
        $rules = [
            'name' => 'required|max:255'
        ];

        if($request->name != $category->name){
            $rules['name'] = 'required|max:255|unique:portofolio_categories';
        }

        $validatedData = $request->validate($rules);

        $validatedData['slug'] = Str::of($validatedData['name'])->slug('-');

        PortofolioCategory::where('id', $category->id)
                        ->update($validatedData);

        return redirect('/dashboard/categories')->with('success', 'Category has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortofolioCategory  $portofolioCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortofolioCategory $category)
    {
        PortofolioCategory::destroy($category->id);

        return redirect('/dashboard/categories')->with('success', 'Category Has been Deleted!');
    }
}
