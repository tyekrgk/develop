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
    public function add()
    {
        $a='project/Data_analysis'.'.html';
        if(file_exists($a)){
            echo file_get_contents($a);
        }else{
            ob_start();
            $html = file_get_contents('http://localhost/gittest/develop/banking/public/project/Data_analysis');
            ob_end_clean();
            file_put_contents($a,$html);
            echo $html;
        }

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