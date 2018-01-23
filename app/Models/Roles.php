<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = "counters";
    protected $fillable = ['date','visit_date','visit_time','hits'];
}
