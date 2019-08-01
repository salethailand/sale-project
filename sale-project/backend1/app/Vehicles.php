<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Vehicles extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'VehiclesAds';
    
    protected $fillable = [
        'subcategoryid','model', 'condition', 'bodytype', 'Gear', 'fueltype', 'color', 'engine', 'noofdoors', 'mileage', 'ownerdetails', 'license', 'features'
    ];
}
