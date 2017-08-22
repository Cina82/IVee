<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = "mainCategory";
    protected $fillable = ['name','status','slug','priority'];
}
