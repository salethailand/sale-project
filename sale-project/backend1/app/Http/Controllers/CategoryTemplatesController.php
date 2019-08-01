<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryTemplates;
class CategoryTemplatesController extends Controller
{
    //
    public function index()
    {
        $templates=CategoryTemplates::All();
        return $templates;

    }
    
}
