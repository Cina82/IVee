<?php

namespace App\Models\customer;

use Illuminate\Database\Eloquent\Model;

class CustomerServiceQuestion extends Model
{
    protected $table = "customerServiceQuestion";
    protected $fillable = ['serviceId','customerId','questionAndOption'];
}
