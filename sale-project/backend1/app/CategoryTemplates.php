<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class CategoryTemplates extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'tblTemplates';
}
