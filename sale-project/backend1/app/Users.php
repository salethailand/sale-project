<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Users extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'tblUsers';
    
    // protected $fillable = [
    //     'username','email', 'surname', 'password', 'usertype', 'pakage', 'thecharacter', 'subject'
    // ];
}
