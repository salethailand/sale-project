<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategories;
use App\Category;
class SubCategoriesController extends Controller
{
    //
    public function index()
    {
        $category=SubCategories::All();
        return $category;
    }
    //
    public function getcategory()
    {
        $category=Category::All();
        return $category;
    }
    public function getsubcategory($parentname)
    {

        $category=SubCategories::select('categoryname')->where('maincategory',$parentname)->get();
        return $category;
    }
    public function store(Request $request)
    {
        $category=new SubCategories();
        $category->categoryname = $request->get('categoryname');
        $category->maincategory = $request->get('maincategory');
        $category->save();
        return response()->json($category);
    }
    public function update($id, Request $request)
    {
        $category = SubCategories::find($id);
        $category->update($request->all());
        return response()->json('successfully updated');
    }
    public function delete($id)
    {
        $category = SubCategories::find($id);
        $category->delete();
        return response()->json('succesefully deleted');
    }
}
