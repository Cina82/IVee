<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ProCategoryModel extends Model
{
    protected $table = "proCategory";
    protected $fillable = ['name','status','slug','priority'];
}
