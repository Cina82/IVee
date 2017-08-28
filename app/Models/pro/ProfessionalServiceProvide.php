<?php

namespace App\Models\pro;

use Illuminate\Database\Eloquent\Model;

class ProfessionalServiceProvide extends Model
{
    protected $table = "professionalServiceProvide";
    protected $fillable = ['userId','services'];
}
