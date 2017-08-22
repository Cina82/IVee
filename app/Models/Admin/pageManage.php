<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class pageManage extends Model
{
   protected $table = 'tbl_page';
   protected $fillable =['name','metaTitle','metaDescription','metaValue']; 
}
