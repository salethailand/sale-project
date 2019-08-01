<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
// use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    //
    public function index()
    {
        $category=Category::All();
        return $category;
    }
    //
    public function getcategory()
    {
        $category=Category::select('categoryname')->where('parentid','')->get();
        return $category;
    }
    public function store(Request $request)
    {
        $category=new Category();
        $category->categoryname = $request->get('categoryname');
        $category->parentid = $request->get('maincategory');
        $category->isparent = '1';
        $category->save();
        return response()->json($category);
    }
}
