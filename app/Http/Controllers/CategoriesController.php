<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    private $categoryModel;

    public function __construct(Category $categoryModel)
    {
        $this->categoryModel = $categoryModel;
    }

    public function index()
    {
        $categories = $this->categoryModel->all();

        return view('categories.index',[
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function save(Requests\CategoryRequest $request)
    {
        $input = $request->all();

        $category = $this->categoryModel->fill($input);
        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = $this->categoryModel->find($id);

        return view('categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Requests\CategoryRequest $request, $id)
    {
        $input = $request->all();

        $this->categoryModel->find($id)->update($input);

        return redirect()->route('categories.index');
    }

    public function delete($id)
    {
        $this->categoryModel->find($id)->delete();

        return redirect()->route('categories.index');
    }
}
