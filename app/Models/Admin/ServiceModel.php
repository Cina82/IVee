<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
 	protected $table = "categoryServices";
    protected $fillable = ['categoryId','name','image'];
}
