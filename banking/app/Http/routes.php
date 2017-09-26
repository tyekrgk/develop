<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('project/show');
});
/**
 * 前台
 */
Route::group(['middleware'=>'web','namespace' => 'Home'], function(){
    Route::group(['prefix'=>'project'],function(){
        //首页
        Route::match(['get','post'],'/show','InfoController@index');
        //个人简介
        Route::match(['get','post'],'/center','LoginController@center');
        //美国股市页面
        Route::match(['get','post'],'/meigu','MeiguController@index');
        //美国全部新闻
        Route::get('/meigu_newpage','MeiguController@meigu_newpage');
        //美国新闻详情
        Route::get('/meigu_new','MeiguController@meigu_new');
        //美国新闻详情
        Route::get('/meigu_info/{symbol}','MeiguController@meigu_info');
        //财务流向
        Route::match(['get','post'],'/money_liu','Money_flowController@money_liu');
        //数据分析
        Route::match(['get','post'],'/Data_analysis','Money_flowController@Data_analysis');
        Route::match(['get','post'],'/add_meigu','MeiguController@add_meigu');
        // 大数据统计
        Route::match(['get','post'],'/shuju','MeiguController@shuju');
        //加自选
        Route::match(['get','post'],'/zixuan','MeiguController@zixuan');
        //加自选
        Route::match(['get','post'],'/zixuan','MeiguController@zixuan');
        //加自选
        Route::match(['get','post'],'/zixuan','MeiguController@zixuan');
        //美股详情页
        Route::match(['get','post'],'/firmshow','MeiguController@index');
        //登录
        Route::match(['get','post'],'/login','LoginController@index');
        //登录验证
        Route::match(['get','post'],'/logins','LoginController@logins');
        //注册验证
        Route::match(['get','post'],'/registers','LoginController@registers');
        //退出登录
        Route::match(['get','post'],'/del_login','LoginController@del_login');
        //第三方登陆
        Route::match(['get','post'],'/qq_login','LoginController@qq_login');
        //第三方登陆
        Route::match(['get','post'],'/yan','LoginController@yan');
        //第三方登陆-用户绑定信息
        Route::any('/user_bind',['uses'=>'LoginController@user_bind']);
        //个人中心
        Route::match(['get','post'],'/personal','LoginController@personal');
        //个人资料
        Route::match(['get','post'],'/ge','LoginController@ge');
        //申请大师
        Route::match(['get','post'],'/Apply','PersonalController@Apply');
        //我的名家
        Route::match(['get','post'],'/mjia','EntriesController@mjia');
        //登录
        Route::match(['get','post'],'/register','LoginController@register');
        //上传文件
        Route::match(['get','post'], '/info','FileController@info');
        //删除自选
        Route::match(['get','post'], '/del','PersonalController@del');
        //上传文件
        Route::match(['get','post'], '/ajax','loginController@ajax');
        //炒股大师
        Route::match(['get','post'], '/master','MasterController@master');
        //炒股大师点赞
        Route::match(['get','post'], '/dianz','MasterController@dianz');
        //炒股大师关注
        Route::match(['get','post'], '/guan','MasterController@guan');
        //炒股大师详情页
        Route::match(['get','post'], '/mastershow','MasterController@mastershow');
        //申请大师资格
        Route::match(['get','post'], '/applyadd','PersonalController@applyadd');
    });
});
/**
 * 后台
 */
Route::group(['middleware'=>'web','namespace' => 'Admin'], function(){
    Route::group(['prefix'=>'admin'],function(){
    //登录页面
    Route::match(['get','post'],'/login','LoginController@login');
    //验证登录
    Route::match(['get','post'],'/loginin','LoginController@loginin');
    //退出登录
    Route::match(['get','post'],'/loginout','LoginController@loginout');
    //注册页面
    Route::match(['get','post'],'/register','LoginController@register');
    //注册入库
    Route::match(['get','post'],'/registerin','LoginController@registerin');
    //首页
    Route::match(['get','post'],'/show','InfoController@index');
    //用户列表
    Route::match(['get','post'],'/user','UserController@user');
    //用户添加
    Route::match(['get','post'],'/useradd','UserController@useradd');
    //权限列表
    Route::match(['get','post'],'/limits','LimitsController@limits');
    //权限添加
    Route::match(['get','post'],'/limitsadd','LimitsController@limitsadd');
    //权限添加入库
    Route::match(['get','post'],'/limitsin','LimitsController@limitsin');
    //权限删除
    Route::match(['get','post'],'/limitsdel','LimitsController@limitsdel');
    //管理员列表
    Route::match(['get','post'],'/adminshow','LimitsController@adminshow');
    //分配权限
    Route::match(['get','post'],'/allot','LimitsController@allot');
    //企业列表
    Route::match(['get','post'],'/firm','FirmController@firm');
    //企业列表状态ajax修改
    Route::match(['get','post'],'/firm/firm_status','FirmController@firm_status');
    //企业添加
    Route::match(['get','post'],'/firmadd','FirmController@firmadd');
    //企业删除
    Route::get('/firm/firm_del/{firm_id}','FirmController@firm_del');
    //股票删除
    Route::match(['get','post'],'/delete/{id}','TouckController@delete');
    //股票列表
    Route::match(['get','post'],'/touck','TouckController@touck');
    //股票添加
    Route::match(['get','post'],'/touckadd','TouckController@touckadd');
    //分类列表
    Route::match(['get','post'],'/type','TypeController@type');
    //分类添加
    Route::match(['get','post'],'/typeadd','TypeController@typeadd');
    //分类删除
    Route::match(['get','post'],'/del','TypeController@del');
    //分类修改
    Route::match(['get','post'],'/upda/{id}','TypeController@upda');
    //修改提交
    Route::match(['get','post'],'/update','TypeController@update');
     //轮播图列表
    Route::match(['get','post'],'/wheel','WheelController@wheel');
    //轮播图渲染页面
    Route::match(['get','post'],'/wheeladd','WheelController@wheeladd');
    //轮播图添加
    Route::match(['get','post'],'/wheeladdd','WheelController@wheeladdd');
    //轮播图删除
    Route::match(['get','post'],'/wheeldei/{id}','WheelController@wheeldei');
    //日志管理
    Route::match(['get','post'],'/log','LogController@log');
    //审核大师
    Route::match(['get','post'],'/success','WheelController@succ');
    //审核大师
    Route::match(['get','post'],'/err','WheelController@err');
    });
});
