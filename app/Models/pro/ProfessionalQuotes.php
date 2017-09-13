<?php

namespace App\Models\pro;

use Illuminate\Database\Eloquent\Model;

class ProfessionalQuotes extends Model
{
    protected $table = "professionalQuotes";
    protected $fillable = ['userId','serviceId','quotesPrice','quotesMessage'];
}
