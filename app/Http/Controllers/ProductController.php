<?php

namespace shopIlocos\Http\Controllers;
use Illuminate\support\Facades\Storage;
use Illuminate\Http\Request;
use shopIlocos\Product;
use shopIlocos\User;
use shopIlocos\Product_Category;
class ProductController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index', 'show']]);
    }

    /**
     * 
    
     
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products=Product::all();
      return view('shopilocos')->with('products', $products);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id= auth()->user()->id;
        $user= User::find($user_id);
        $product_categories=Product_Category::all();
        return view('forms.newproduct')->with('product_categories',$product_categories)
        ->with('products', $user->products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO! catch post validation error and show a nice error message to the user
        $this->validate($request, [
            'product_name' => 'required|unique:products',
            'qty' => 'required',
            'price' => 'required',
            'product_image' => 'image|nullable|max:1999'
        
    ]);

       
//handle file upload
if($request->hasFile('product_image')){
    //Get filname with the extension
    
    $filenameWithExt=$request->file('product_image')->getClientOriginalName();
    
    //Get jus the filename
    
    $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);
    
    //GGet just the ext
    $extension=$request->file('product_image')->getClientOriginalExtension();

    //filename to Store
    $fileNameToStore=$filename.'_'.time().'.'.$extension;
    
    //upload Image  

    
    $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);
    
    }
    
    else {
        $fileNameToStore='noimage.jpg';
    
    }



        $products=new Product;
        $products->product_name=$request->input('product_name');
     
        $products->category_id=$request->input('category');
        $products->remaining_stocks=$request->input('qty');
        $products->price=$request->input('price');
        $products->user_id=auth()->user()->id;
        $products->product_image=$fileNameToStore;
        $products->save();

        return redirect('/products/create')->with('success','Post Created!');



    }

    /**
     * Display the specified resource.
     *
     * @param  \shopIlocos\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
     
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \shopIlocos\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \shopIlocos\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \shopIlocos\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
