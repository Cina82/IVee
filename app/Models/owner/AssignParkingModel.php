<?php

namespace App\Models\owner;
use Illuminate\Database\Eloquent\Model;

class AssignParkingModel extends Model
{
     protected $table = 'tbl_assignParking';
     protected $fillable =['parking_id','manager_id','organiser_id'];
}
