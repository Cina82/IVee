<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class serviceQuotesCredit extends Model
{
 	protected $table = "showServiceQuotesCredit";
    protected $fillable = ['serviceId','credit'];
}
