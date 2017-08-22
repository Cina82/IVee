<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class OrganiserManage extends Model
{
   protected $table = 'users';
   protected $fillable =['name','first_name','last_name','email','password','activated','role_data','user_role_id']; 
}
