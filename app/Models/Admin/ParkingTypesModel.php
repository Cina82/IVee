<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ParkingTypesModel extends Model
{
    protected $table = 'tbl_parkingTypes';
    protected $fillable =['parkingType'];
}
