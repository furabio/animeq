<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    private $categories;

    public function __construct(Category $category)
    {
        $this->categories = $category;
    }

    public function show()
    {

    }

    public function allCategories()
    {
        $categories = $this->categories->all();

        return view('admin.categories.all')->withCategories($categories);
    }


    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoriesRequest $requests){
        $this->categories->create($requests->all());

        Session::flash('success', 'A categoria ' . $requests->name . ' foi criada com sucesso!');

        return redirect()->route('categories.all');
    }

    public function delete($id)
    {
        $category = $this->categories->findOrFail($id);

        $category->delete();

        Session::flash('success', 'A categoria ' . $this->categories->findOrFail($id)->name . ' foi deletada com sucesso!');

        return redirect()->route('categories.all');
    }

}
