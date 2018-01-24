<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Slug as Slug;
use Illuminate\Routing\Redirector;

use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected function validator(array $data)
    {


        return Validator::make($data, [
            'slug'      => 'required|string|max:255|unique:categories', 
            'name'      => 'required|string|max:255',
            
        ]);
    }


     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $categories = \App\Category::paginate(10);
        return view('category.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $slug = new Slug();
        $url = $slug->make($data['name']);
        $data['slug']= $url;
        $this->validator($data)->validate();

        \App\Category::create([
            'name'=>$data['name'],
            'slug'=>$data['slug']
            ]);
        return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        return view('category.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $category = \App\Category::where('slug',$slug)->first();
        return view('category.edit')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $data = $request->all();
        $slug = new Slug();
        $url = $slug->make($data['name']);
        $category['name']=$data['name'];
        $category['slug']=$url;
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
