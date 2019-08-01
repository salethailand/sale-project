<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class SubCategories extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'tblSubCategories';
}
