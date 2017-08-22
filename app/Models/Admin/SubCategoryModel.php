<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    protected $table = "SubCategory";
    protected $fillable = ['mainCategoryId','name','status','slug','priority'];
}
