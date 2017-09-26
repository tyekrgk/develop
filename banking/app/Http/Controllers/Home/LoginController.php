<?php

namespace App\Http\Controllers\Home;
use App\Models\Users;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
	//登录页面
    public function index()
    {
    	return view('home.login');
    }
    //注册页面
    public function register()
    {
    	return view('home.register');
    }
    //注册
    public function registers(Request $res)
    {
        $this -> validate($res,[
            'Name' => 'required|max:8|min:2',
            'Email' => 'required',
        ],[
            'Name.required' => '名称不能为空',
            'Name.max' => '请输入2-6位的名称',
            'Name.min' => '请输入2-6位的名称',
            'Email.required' => '邮箱不能为空',
        ]);
    	$name = $res->input('Name');
    	$email =  $res->input('Email');
        $pwd =  $res->input('Password');
    	$pwd1 =  $res->input('Password1');
        $pwds = md5($pwd);
        $list = Users::first(['email'])->toArray();
        if($email == $list['email']){
            return redirect('project/register')->with('hasExists','邮箱重复请重新输入');
        }
        if($pwd != $pwd1){
            return redirect('project/register')->with('hasExists','两次密码不相等请重新输入');
        }
    	$list = DB::insert('insert into stock_users(user_name,email,user_password) values(?,?,?)',[$name,$email,$pwds]);
    	if($list){
    		return redirect('project/login');
    	}else{
    		return redirect('project/login')->with('hasExists','注册失败');
    	}
    }
    //登录
    public function logins(Request $login)
    {
        $name = $login->input('Username');
        $pwd = $login->input('Password');
        $pwds = md5($pwd);
        $brand = $login->check;
        $lists = DB::select("select * from stock_users where user_name = '$name' and user_password = '$pwds'");
        $lists1 = json_decode(json_encode($lists),true);
        if($lists1){
            $login->session()->put('Password',$pwd);
            $login->session()->put('Username',$name);
	    	$login->session()->put('user_id',$lists1[0]['id']);
			if($brand != ' '){
                $login->session()->put('pwd',$pwd);
                $login->session()->put('name',$name);
			}
            return redirect('project/show');
    	}else{
    		return redirect('project/login')->with('hasExists','用户名或密码错误');
    	}
    }
    // 退出登录
    public function del_login()
    {
        \Session::forget('Username');
        \Session::forget('Password');
        return redirect('project/show');
    }
    //个人中心
    public function personal(Request $request)
    {
    	$list = DB::select('select * from stock_image  ORDER BY img_id DESC limit 1');
		$lists = json_decode(json_encode($list),true);
		foreach ($lists as $k => $v) {
			$oppo[$k] = $v['img_url'];
		}
		$name = $request->session()->get('Username');
        $opp = DB::select('select * from stock_zixuan');
        $ppo = json_decode(json_encode($opp),true);
        $uid = $request->session()->get('user_id');
        $datas = DB::select('select * from stock_master where user_id=?',[$uid]);
        $data = json_decode(json_encode($datas),true);
    	return view('home.personal',['name'=>$name,'lists'=>$lists[0],'ppo'=>$ppo,'data'=>$data]);
    }
    //个人资料修改
    public function ge(Request $request)
    {
		$id = $request->session()->get('user_id');
		$nam = DB::select("select user_name,center from stock_users where id = $id");
		$name = json_decode(json_encode($nam),true);
		$list = DB::select('select * from stock_image ORDER BY img_id DESC limit 1');
		$lists = json_decode(json_encode($list),true);
		foreach ($lists as $k => $v) {
			$oppo[$k] = $v['img_url'];
		}
		foreach ($name as $k => $v) {
            $name2 = $v['user_name'];
			$center = $v['center'];
		}
    	return view('home.ge',['name'=>$name2,'lists'=>$lists[0],'center'=>$center]);
    }
    public function ajax(Request $request)
    {
    	$name = $request->name;
    	$id = $request->session()->get('user_id');
    	$upda = DB::update("update stock_users set user_name = '$name' where id = '$id'");
    	if($upda){
    		echo "1";
    	}else{
    		echo "0";
    	}
    }
    public function center(Request $request)
    {
        $name = $request->name;
        $id = $request->session()->get('user_id');
        $upda = DB::update("update stock_users set center = '$name' where id = '$id'");
        if($upda){
            echo "1";
        }else{
            echo "0";
        }
    }
     //QQ登陆
    public function qq_login()
    {
        $access_token = 'https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&client_id=101410063&client_secret=1bc916c460bf89d733bc7105633522d1&code='.$_GET['code'].'&redirect_uri=http://www.bolang.com/project/qq_login';
        $access_token_content = file_get_contents($access_token);
        $params = $this->access_token($access_token_content);
        // print_r($params);die;
        $user_id = 'https://graph.qq.com/oauth2.0/me?access_token='.$params['access_token'];
        $data = file_get_contents($user_id);
        $data = str_replace('callback(','', $data);
        $data = str_replace(');','', $data);
        $open_id = json_decode($data,true);
        $openid=$open_id['openid']; 
        \Session::put('openid',$openid);
        $user_url = 'https://graph.qq.com/user/get_user_info?access_token='.$params['access_token'].'&oauth_consumer_key=101410063&openid='.$openid;
        $user_message = json_decode(file_get_contents($user_url), true);
        // 查询该用户是否绑定手机号或邮箱
          $res = DB::table('users_oauth')->where('open_id','=',$openid)->get();
          if($res)
          {
                //使用扣扣登陆过
                return redirect('project/show');
           }else{
                //没有使用扣扣登陆过
                return redirect()->action('Home\LoginController@user_bind',['nickname' => $user_message['nickname']]);
         }                  
    }

    //获取扣扣用户access_token
    public function access_token($access_token_content)
    {
        $queryParts = explode('&', $access_token_content);
        $params = array();
        foreach ($queryParts as $param) {
          $item = explode('=', $param);
          $params[$item[0]] = $item[1];
        }  
        return $params;
    }


    //用户授权后进行绑定
    public function user_bind()
    {
       return view('auth.bind');
    }


    //绑定验证
    public function yan()
    {
        //组装第三方登录数据
        $three = [
            'name' => $_POST['name'],
            'password'=> md5($_POST['password']),
            'email' => $_POST['email'],
            'created_at' => date('Y-m-d H:i:s',time()),
            'updated_at' => date('Y-m-d H:i:s',time()),
        ];
        $id = DB::table('users')->insertGetId($three);
        $user_oauth_data = [
            'open_id' => \Session::get('openid'),
            'user_id' => $id,           
            'type' => '1',          //扣扣用户
            'create_time' => time()
            ];
        $fure = DB::table('users_oauth')->insertGetId($user_oauth_data);
        if($id && $fure)
        {
            return redirect('project/show');
        }
    }
}
