<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class roleManage extends Model
{
    protected $table = 'role_user';

    protected $fillable = ['role_id','user_id'];
}
