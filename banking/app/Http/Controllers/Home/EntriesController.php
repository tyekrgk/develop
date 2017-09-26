<?php 
namespace App\Http\Controllers\Home;
use App\Models\Users;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EntriesController extends CommonController
{
	/**
	 * 名家显示页面
	 * @return [type] [description]
	 */
	public function mjia()
	{
		$uid = $this->user_id;
		$datas = DB::select('select * from stock_master_attention where user_id=?',[$uid]);
		$data = json_decode(json_encode($datas),true);
		foreach ($data as $k => $v) {
			$masterid[$k]=$v['master_id'];
		}
		$mid = implode(',',$masterid);
		$lists = DB::select('select * from stock_master where master_id in ('.$mid.')');
		$list = json_decode(json_encode($lists),true);
		return view('home.mjia',['list'=>$list]);
	}
}

?>