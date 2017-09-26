<?php
namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
header('content-type:text/html;charset=utf-8');
class CommonController extends Controller
{
	//存在session的用户ID
	public $user_id='';
	//存在session的用户名称
	public $user_name='';
	public function __construct(Request $request)
	{
		$this->user_id = $request->session()->get('user_id');
		$this->user_name = $request->session()->get('Username');
	}
}