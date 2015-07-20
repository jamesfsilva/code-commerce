<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
use CodeCommerce\Category;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\ProductImage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminProductsController extends Controller
{
    private $productModel;

    public function __construct(Product $productModel)
    {
        $this->productModel = $productModel;
    }

    public function index()
    {
        $products = $this->productModel->paginate(10);

        return view('products.index',[
            'products' => $products
        ]);
    }

    public function create(Category $category)
    {
        $categories = $category->lists('name','id');
        
        return view('products.create', [
            'categories' => $categories
        ]);
    }

    public function save(Requests\ProductRequest $request)
    {
        $input = $request->all();

        $product = $this->productModel->fill($input);
        $product->save();

        return redirect()->route('products.index');
    }

    public function edit($id,Category $category)
    {
        $product = $this->productModel->find($id);
        $categories = $category->lists('name','id');

        return view('products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(Requests\ProductRequest $request, $id)
    {
        $input = $request->all();
        
        $input['featured'] = isset($input['featured']) ? true : false;
        $input['recommend'] = isset($input['recommend']) ? true : false;

        $this->productModel->find($id)->update($input);

        return redirect()->route('products.index');
    }

    public function delete($id)
    {
        $this->productModel->find($id)->delete();

        return redirect()->route('products.index');
    }
    
    public function images($productId)
    {
        $product = $this->productModel->find($productId);
        
        return view('products.images.index', [
            'product' => $product
        ]);
    }
    
    public function imagesCreate($productId)
    {
        $product = $this->productModel->find($productId);
        
        return view('products.images.create', [
            'product' => $product
        ]);
    }
    
    public function imagesSave(Request $request, $productId, ProductImage $productImage)
    {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        
        $image = $productImage->create([
            'product_id' => $productId,
            'extension' => $extension
        ]);
        
        Storage::disk('local_public')->put($image->id.'.'.$extension, File::get($file));

        return redirect()->route('products.images',['productId'=>$productId]);
    }
}
