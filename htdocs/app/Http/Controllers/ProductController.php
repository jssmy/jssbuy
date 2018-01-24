<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Slug as Slug;
use Carbon\Carbon; /// clase que maneja tiempo
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    protected function validator_create(array $data)
    {
        return Validator::make($data, [
            'name'          => 'required|string|min:5|max:255',
            'description'   => 'required|string|min:5|max:255',
            'unit_price'    => 'required|numeric|min:1',
            'stock'         => 'required|numeric|min:1',
            'category'      => 'required|numeric|min:1',
            'img_1'         =>  'required|file|image',
            'img_2'         =>  'required|file|image',
            'img_3'         =>  'required|file|image',
            'img_4'         =>  'required|file|image',
            'img_5'         =>  'required|file|image',
        ]);
    }


    protected function validator_update(array $data)
    {
        return Validator::make($data, [
            'name'          => 'required|string|min:5|max:255',
            'description'   => 'required|string|min:5|max:255',
            'unit_price'    => 'required|numeric|min:1',
            'stock'         => 'required|numeric|min:1',
            'category'      => 'required|numeric|min:1',
            'img_1'         =>  'file|image',
            'img_2'         =>  'file|image',
            'img_3'         =>  'file|image',
            'img_4'         =>  'file|image',
            'img_5'         =>  'file|image',
        ]);
    }
    public function index()
    {
        //

        $products = Product::paginate(5);
        foreach ($products as $product) {
            $product->category;
        }

        return view('product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = \App\Category::all();


        return view('product.create')->with('categories',$categories);
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
        $this->validator_create($data)->validate();
        $slug = new Slug();
        $url = $slug->make($data['name']);

        $name1 = $this->name_image($data['img_1']);
        $name2 = $this->name_image($data['img_2']);
        $name3 = $this->name_image($data['img_3']);
        $name4 = $this->name_image($data['img_4']);
        $name5 = $this->name_image($data['img_5']);

      
      
        Product::create([
            'slug'  =>  $url,
            'name'  =>  $data['name'],
            'description' =>    $data['description'],
            'unit_price'  =>    $data['unit_price'],
            'stock'       =>    $data['stock'],
            'category_id' =>    $data['category'],
            'img_1'       =>    $name1,
            'img_2'       =>    $name2,
            'img_3'       =>    $name3,
            'img_4'       =>    $name4,
            'img_5'       =>    $name5,

            ]);

            
            $this->save_image($data['img_1'],$name1);
            $this->save_image($data['img_2'],$name2);
            $this->save_image($data['img_3'],$name3);
            $this->save_image($data['img_4'],$name4);
            $this->save_image($data['img_5'],$name5);
            
        return redirect()->route('product.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('product.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $product = Product::where('slug',$slug)->first();
        $product->category;
        $categories = \App\Category::all();


        return view('product.edit')
        ->with('product',$product)
        ->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
            $data = $request->all();
            

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    function save_image($image,$name)
    {

        \Storage::disk('local_products')->put($name,\File::get($image));
    }

    function name_image($image)
    {

          $name = 'jssmy'.Carbon::now().$image->getClientOriginalName();
        return $name;
    }
}
