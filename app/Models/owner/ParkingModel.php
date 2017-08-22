<?php

namespace App\Models\owner;

use Illuminate\Database\Eloquent\Model;

class ParkingModel extends Model
{
    protected $table = 'tbl_parking';
    protected $fillable =['name','location','city','parking_type','organiser_id']; 
}
