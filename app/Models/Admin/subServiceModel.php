<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class subServiceModel extends Model
{
 	protected $table = "subServices";
    protected $fillable = ['serviceId','name','slug','status'];
}
