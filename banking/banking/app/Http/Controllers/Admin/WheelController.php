<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
use Illuminate\Support\Facades\Input;
class WheelController extends CommonController
{
	/**
	 * 审核
	 * @return [type] [description]
	 */
	public function wheel()
	{
		$data = DB::select('select * from stock_master');
		$data = json_decode(json_encode($data), true);
		return view('admin.wheel',['data'=>$data]);
	}
    //删除 
    public function  wheeldei($id) {
      $data = DB::table('slideshow')->where('show_id',$id)->delete();
      return redirect('admin/wheel');
    }
    //审核大师通过
    public function succ(Request $res)
    {
        $id = $res->id;
        $list = DB::update("update stock_master set master_static = 1 where master_id = '$id'");
        if($list){
            return 1;
        }else{
            return 2;
        }
    }
    //审核大师不通过
    public function err(Request $res)
    {
        $id = $res->id;
        $list = DB::update("update stock_master set master_static = 0 where master_id = '$id'");
        if($list){
            return 1;
        }else{
            return 2;
        }
    }
}
?>