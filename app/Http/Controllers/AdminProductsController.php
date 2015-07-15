<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class AdminProductsController extends Controller
{
    private $productModel;

    public function __construct(Product $productModel)
    {
        $this->productModel = $productModel;
    }

    public function index()
    {
        $products = $this->productModel->all();

        return view('products.index',[
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function save(Requests\ProductRequest $request)
    {
        $input = $request->all();

        $product = $this->productModel->fill($input);
        $product->save();

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = $this->productModel->find($id);

        return view('products.edit', [
            'product' => $product
        ]);
    }

    public function update(Requests\ProductRequest $request, $id)
    {
        $input = $request->all();

        $this->productModel->find($id)->update($input);

        return redirect()->route('products.index');
    }

    public function delete($id)
    {
        $this->productModel->find($id)->delete();

        return redirect()->route('products.index');
    }
}
