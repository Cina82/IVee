<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PaymentSetting extends Model
{
 	protected $table = "paymentSetting";
    protected $fillable = ['marchantName','ClientId','secretKey','paymentType'];
}
