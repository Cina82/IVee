<?php

namespace App\Http\Controllers\serviceSearch;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Models\Model;
use DB;
use App\Models\Admin\ServiceModel;

class serviceSearchManageController extends Controller
{
    public function serviceSearch($searchval)
    {
		/*$users = DB::table('categoryServices')	
				->where(function ($query) use ($searchval) {
						$query->where('name','like', '%'.$searchval.'%')
						})->get();*/

		$users = ServiceModel::where('name', 'like', $searchval. '%')->get()->toArray();

		echo '<style>.imgsetli
		{background:#fff; height:40px;  padding-top:10px; flex:3; z-index:10; opacity: 0.9;}
		 .imgsetli:hover {
    		background-color: #F4F4F4;
			}
		 </style><ul id="country-list"  style="width: 393px; height: 120px; overflow: auto;">';
		 foreach($users as $u)
		 {?>
			<li onClick="selectdata('<?php echo $u['id']; ?>');">
			<?php if($u['name'] != null) { echo '<div class="imgsetli"><b>'.$u['name'].'</b></div>'; } else {
				echo '<div><b>&nbsp;</b></div>';
			} ?>
			</li>

        <?php } 

        echo '</ul>';       

	}
	public function proServiceSearch($searchval)
	{
		$users = ServiceModel::where('name', 'like', $searchval. '%')->get()->toArray();

		echo '<style>.imgsetli
		{background:#fff; height:60px; padding-right:20px;padding-top:16px;font-size: 20px;line-height: 1.5;font-weight: 500; flex:3; z-index:10; opacity: 0.9;}
		 .imgsetli:hover {
    		background-color: #F4F4F4;
			}
		 </style><ul id="country-list"  style="width: 925px; height: 400px; text-align:right; overflow: auto;">';
		 foreach($users as $u)
		 {?><a href="saveService/<?php echo $u['id']; ?>">
			<li>
			<?php if($u['name'] != null) { echo '<div class="imgsetli"><b>'.$u['name'].'</b></div>'; } else {
				echo '<div><b>&nbsp;</b></div>';
			} ?>
			</li></a>

        <?php } 

        echo '</ul>';       
	}
}

