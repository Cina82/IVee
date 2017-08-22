<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class QuestionModel extends Model
{
 	protected $table = "serviceQuestion";
    protected $fillable = ['question'];
}
