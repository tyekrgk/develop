<!DOCTYPE html>
<!-- saved from url=(0026)http://q.10jqka.com.cn/usa -->
<html lang="en">
<base href="<?php echo e(URL::asset('Home/index').'/'); ?>">
<head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
    
    <title>同花顺财经网</title>
    <meta name="keywords" content="金融,金融网">
    <meta name="description" content="核新同花顺网络信息股份有限公司。">
    <link rel="stylesheet" href="./cd/cb">
    <link rel="stylesheet" href="./cd/cb(1)">  
    <link rel="stylesheet" type="text/css" href="./css/subMenu.min.css">
    <link rel="stylesheet" type="text/css" href="http://s.thsi.cn/js/home/v5/thirdpart/icheck/skins/square/grey.css">
    <link rel="stylesheet" type="text/css" href="http://s.thsi.cn/js/home/v5/thirdpart/scrollbar/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="http://s.thsi.cn/css/weblist/main.1.3.css?2016108">
    <script src="http://s.thsi.cn/cb?js/;jquery-1.8.3.min.js;ta.min.js;storage.min.js;jquery.cookie.min.js;md5.js;thsLogin.min.js;js/home/;ths_core.min.js;ths_quote.js" type="text/javascript"></script>
    <script src="http://s.thsi.cn/cb?/js/listpage/;WdatePicker.js;patch.min.js&2013030722" type="text/javascript"></script>
    <script src="http://afpmm.alicdn.com/g/mm/afp-cdn/JS/k.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="http://s.thsi.cn/cb?css/home/v3/1.3/autoFix.css" />

    


<style>
    body{background-color: white;}
</style>
</head>
<body>
<div class="header fixed">
    <div class="w1200">
        <div class="hdlogo">
            <a target="_blank" class="site-logo" href="http://www.10jqka.com.cn/"> <img src="./img/logo-ths.jpg" title="同花顺" alt="同花顺"></a>
        </div>

        <div class="nav">
            <a href="<?php echo e(url('project/show')); ?>" data-type="hssc">首页</a>
            <a href="<?php echo e(url('project/meigu')); ?>" class="cur">美国市场</a>
            <a href="http://q.10jqka.com.cn/global/">财务分析</a>
            <a href="http://q.10jqka.com.cn/gn/" data-type="bk">资金流向</a>
            <a href="http://q.10jqka.com.cn/xsb/" target="_blank">炒股大师</a>
        </div>


        <div class="login-box hide">

            <a href="http://upass.10jqka.com.cn/login?redir=HTTP_REFERER" target="_blank">登录</a>

        </div>

        <div class="logined_box fr">

            <a href="http://stock.10jqka.com.cn/my/" target="_blank" id="J_username" style="background-position: right 36px;">co_412608137</a>

            <span>|</span>

            <a href="javascript:;" id="header_logined_out" target="_self" class="homeloginout">退出</a>

        </div>

    </div>

</div>
<div class="content-1200">
            <div class="top_title2" style="margin-top: 104px">
            <div class="left_border"></div>
            <p>
                <?php if($type=='mgyw'): ?>
                美股要闻
                <?php elseif($type=='zggng'): ?>
                中国概念股
                <?php else: ?>
                研究分析
                <?php endif; ?>
            </p>
            </div>
            <div class="mt30 clearfix">
                <div class="data-line" style="margin-bottom: 15px;">
                    <p><a href="<?php echo e(url('project/show')); ?>" style="color:black;">首页</a> > <a href="<?php echo e(url('project/meigu')); ?>" style="color:black;">美股频道</a> > <a href="<?php echo e(url('project/meigu_newpage')); ?>?type=<?php echo e($type); ?>" style="color:black;">
                        <?php if($type=='mgyw'): ?>
                        美股要闻
                        <?php elseif($type=='zggng'): ?>
                        中国概念股
                        <?php else: ?>
                        研究分析
                        <?php endif; ?>
                    </a></p>
                </div>
            </div>
            <div class="list-con">

            <ul>
                <?php foreach($jrj_new_rows as $k => $v): ?>
                <li>
                    <span class="arc-title">
                      <a target="_blank" title="<?php echo e($v['title']); ?>" href="<?php echo e(url('project/meigu_new')); ?>?link=<?php echo e($v['link']); ?>&type=<?php echo e($type); ?>"><?php echo e($v['title']); ?></a>
                        <span><?php echo e($v['time']); ?></span>
                    </span>
                    <a target="_blank" href="<?php echo e(url('project/meigu_new')); ?>?link=<?php echo e($v['link']); ?>&type=<?php echo e($type); ?>"  rel="nofollow" class="arc-cont"><?php echo e($v['content']); ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
<div class="bottom-page">
    <span class="num-container">

        <?php for($i=1;$i<=10;$i++): ?>
            <?php if($page==$i): ?>
                <a class="num"><?php echo e($i); ?></a>
            <?php else: ?>
                <?php if($i==1): ?>
                <a href="<?php echo e(url('project/meigu_newpage')); ?>?page=<?php echo e($i); ?>&link=http://usstock.jrj.com.cn/list/<?php echo e($type); ?>.shtml&type=<?php echo e($type); ?>" rel="nofollow"><?php echo e($i); ?></a>
                <?php else: ?>
                <a href="<?php echo e(url('project/meigu_newpage')); ?>?page=<?php echo e($i); ?>&link=http://usstock.jrj.com.cn/list/<?php echo e($type); ?>-<?php echo e($i); ?>.shtml&type=<?php echo e($type); ?>" rel="nofollow"><?php echo e($i); ?></a>
                <?php endif; ?>
            <?php endif; ?>
        <?php endfor; ?>          
    </span>
            </div>            
            
       </div>
</div>
    
<!-- 频道资讯 开始-->

  <div class="bottom-map-warp">
        <div class="bottom-map clearfix">
            <dl class="item">
                <dt class="icon-pdzx">频道资讯</dt>
                <dd><a href="http://news.10jqka.com.cn/yaowen/" target="_blank">财经要闻</a></dd>
                <dd><a href="http://news.10jqka.com.cn/cjzx_list/" target="_blank">宏观经济</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/bidu/" target="_blank">股票必读</a></dd>
                <dd><a href="http://master.10jqka.com.cn/" target="_blank">名家100</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/company.shtml" target="_blank">公司频道</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/market.shtml" target="_blank">市场频道</a></dd>
                <dd><a href="http://futures.10jqka.com.cn/" target="_blank">股指期货</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/newstock/" target="_blank">新股频道</a></dd>
                <dd><a href="http://news.10jqka.com.cn/guojicj_list/" target="_blank">国际财经</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/chuangye/" target="_blank">创业板</a></dd>
                <dd><a href="http://xinsanban.10jqka.com.cn/" target="_blank">新三板</a></dd>
                <dd><a href="http://news.10jqka.com.cn/bigdata.shtml" target="_blank">图解财经</a></dd>                
            </dl>
            <dl class="item">
                <dt class="icon-tzrd">投资热点</dt>
                <dd><a href="http://stock.10jqka.com.cn/bktt_list/" target="_blank">四大报刊</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/fupan/" target="_blank">每日复盘</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/fincalendar.shtml" target="_blank">投资日历</a></dd>
                <dd><a href="http://data.10jqka.com.cn/financial/yjyg/" target="_blank">财报大全</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/zaopan/" target="_blank">早盘必读</a></dd>
                <dd><a href="http://news.10jqka.com.cn/hudong/" target="_blank">互动平台</a></dd>
                <dd><a href="http://doctor.10jqka.com.cn/" target="_blank">牛叉诊股</a></dd>
                <dd><a href="http://data.10jqka.com.cn/tradetips/tfpts/" target="_blank">交易提示</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/thsgd/" target="_blank">实时新闻</a></dd>
                <dd><a href="http://data.10jqka.com.cn/market/xsjj/" target="_blank">限售解禁</a></dd>
                <dd><a href="http://data.10jqka.com.cn/ipo/xgpt/" target="_blank">新股日历</a></dd>
                <dd><a href="http://data.10jqka.com.cn/market/ggsd/" target="_blank">公告速递</a></dd>
            </dl>
            <dl class="item">
                <dt class="icon-sjjh">数据精华</dt>
                <dd><a href="http://data.10jqka.com.cn/market/longhu/" target="_blank">龙虎榜单</a></dd>
                <dd><a href="http://data.10jqka.com.cn/market/dzjy/" target="_blank">大宗交易</a></dd>
                <dd><a href="http://data.10jqka.com.cn/market/rzrq/" target="_blank">融资融券</a></dd>
                <dd><a href="http://data.10jqka.com.cn/financial/yjyg/" target="_blank">业绩预告</a></dd>
                <dd><a href="http://data.10jqka.com.cn/funds/ggzjl/" target="_blank">个股资金</a></dd>
                <dd><a href="http://data.10jqka.com.cn/funds/ddzz/" target="_blank">大单追踪</a></dd>
                <dd><a href="http://data.10jqka.com.cn/hgt/hgtb/" target="_blank">沪港通</a></dd>
                <dd><a href="http://data.10jqka.com.cn/funds/hyzjl/" target="_blank">行业资金</a></dd>
                <dd><a href="http://data.10jqka.com.cn/ipo/xgyp/" target="_blank">新股预披</a></dd>
                <dd><a href="http://data.10jqka.com.cn/market/ggsyl/" target="_blank" class="overw">个股市盈率</a></dd>
                <dd><a href="http://data.10jqka.com.cn/rank/cxfl/" target="_blank">持续放量</a></dd>
                <dd><a href="http://data.10jqka.com.cn/rank/xstp/" target="_blank">向上突破</a></dd>
            </dl>
        </div>
    </div>  

<!-- 频道资讯 结束-->


 <!-- 底部 开始-->   
<div class="bottom-link">
    <div id="footer">
            <p id="bottom-scroll-listen" data-scroll-taid="web_2bottom" class="ta-scroll-box scroll-ta-over">
            <a target="_blank" href="http://news.10jqka.com.cn/tzz/" rel="nofollow">投资者关系</a>           <span class="ff">|</span>           
            <a target="_blank" href="http://news.10jqka.com.cn/20100105/c61833421.shtml" rel="nofollow">关于同花顺</a>           <span>|</span>          
            <a target="_blank" href="http://download.10jqka.com.cn/">软件下载</a>           <span>|</span>          
            <a target="_blank" href="http://www.10jqka.com.cn/ia/pass_buck.php" rel="nofollow">法律声明</a>             <span>|</span>          <a target="_blank" href="http://www.10jqka.com.cn/hexin_license.htm" rel="nofollow">运营许可</a>            <span>|</span>          <a target="_blank" href="http://www.10jqka.com.cn/modules.php?name=what&amp;page=cooperate" rel="nofollow">内容合作</a>             <span>|</span>          <a target="_blank" href="http://www.10jqka.com.cn/hexin_contact.htm" rel="nofollow">联系我们</a>            <span>|</span>          <a target="_blank" href="http://news.10jqka.com.cn/link.shtml" rel="nofollow">友情链接</a>          <span>|</span>          <a target="_blank" href="http://news.10jqka.com.cn/msg/" rel="nofollow">网友意见箱</a>           <span>|</span>          <a target="_blank" href="http://job.10jqka.com.cn/" rel="nofollow">招聘英才</a>             <span class="ff">|</span>           <a target="_blank" href="http://vote.10jqka.com.cn/webvote/suggest.html" rel="nofollow">用户体验计划</a></p> <p class="c333">不良信息举报电话：(0571)88933003          <a href="mailto:jubao@myhexin.com" class="smarterwiki-linkify">举报邮箱：jubao@myhexin.com</a>           增值电信业务经营许可证：B2-20080207</p> <p class="c333">CopyrightHithink RoyalFlush Information Network Co.,Ltd. All rights reserved. 浙江核新同花顺网络信息股份有限公司版权所有</p> <p class="c333">ICP证：           <a href="http://www.miitbeian.gov.cn/" target="_blank">浙ICP备09003598号</a>           证券投资咨询服务提供：浙江同花顺云软件有限公司 （中国证监会核发证书编号：ZX0050）</p> <div id="myVerifyImageBox" class="verifyImageBox" siteid="43" style="margin-bottom:20px;">  
        </div>
    </div>
</div>
 <!-- 底部 结束-->

<script type="text/javascript" src="./cd/cb(2)"></script>
<script type="text/javascript" src="./cd/cb(3)"></script>
<script type="text/javascript" src="./cd/cb(4)"></script>
<script type="text/javascript" src="./cd/common_v2.min.js"></script>
<script type="text/javascript" src="./cd/cb(5)"></script>
<script type="text/javascript" src="./cd/cb(6)"></script>
<script type="text/javascript" src="./cd/cb(7)"></script>
<script type="text/javascript" src="./cd/cb(8)"></script>
<script type="text/javascript" src="./cd/index2.js"></script>
<script type="text/javascript" src="./cd/cb(9)"></script>

<script>
    $(function(){
        /*切换颜色*/
        $("#red_check").click(function(){
          $("body").addClass("reversedColor");

        });
        $("#green_check").click(function(){
            $("body").removeClass("reversedColor");

        });
    }); 
</script>

<script type="text/javascript" src="./js/weblogin_v3.20170609.js"></script>

<script>
    var fidId = 'hqzx_mgsc';
    if (typeof(fidId)!="undefined" && fidId!=null) {
        TA.log({id:'db_57ee1411_383',fid:'info_gather,qcenter,'+fidId});
    } else {
        TA.log({id:'db_57ee1411_383',fid:'info_gather,qcenter'});
    }
</script>

<img id="__ths_stat__" height="0" width="0" style="display:none" src="./cd/q">

<script>
    $(function(){
        var chartsCount = 60 * 1000;
        var len = $('.m-pager-table').length;
        var chartsTimer = setInterval(function(){
            var mydate = new Date();
            var mytime = mydate.getHours();
            if (mytime > 20 || mytime < 5) {
                for(var j = 0; j < len; j++){
                    window['pager'+j].changeContent();
                }               
            }
         },chartsCount);
            
        for(var i = 0; i < len; i++){
            var pagerName = 'pager'+i;
            window[pagerName] = new mpager('.m-pager-box'+i);
            window[pagerName].init();
        }
    });
</script>


</body>
</html>