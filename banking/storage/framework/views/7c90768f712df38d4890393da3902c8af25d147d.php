<!DOCTYPE html>
<!-- saved from url=(0026)http://q.10jqka.com.cn/usa -->
<html lang="en">
<meta charset="utf-8">
<base href="<?php echo e(URL::asset('Home/index').'/'); ?>">
<head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
    
    <title>顺子财经网</title>
    <meta name="keywords" content="金融,金融网">
    <meta name="description" content="核新同花顺网络信息股份有限公司。">
    <link rel="stylesheet" href="./cd/cb">
    <link rel="stylesheet" href="./cd/cb(1)">  
    <link rel="stylesheet" type="text/css" href="./css/subMenu.min.css"></head>
<body class="reversedColor">
<div class="header fixed">
    <div class="w1200">
        <div class="hdlogo">
            <a target="_blank" class="site-logo" href="http://www.10jqka.com.cn/"> <img src="./img/logo-ths.jpg" title="同花顺" alt="同花顺"></a>
            <h1><a target="_blank" title="炒股中心" class="sub-logo">炒股中心</a></h1>
        </div>

        <div class="nav">
            <a href="<?php echo e(url('project/show')); ?>" data-type="hssc">首页</a>
            <a href="<?php echo e(url('project/meigu')); ?>" >美国市场</a>
            <a href="<?php echo e(url('project/Data_analysis')); ?>">财务分析</a>
            <a href="<?php echo e(url('project/money_liu')); ?>" class="cur">资金流向</a>
            <a href="<?php echo e(url('project/master')); ?>">炒股大师</a>
        </div>
        <?php if($name != ''): ?>
            <div class="login-box he">
               <a href="<?php echo e(url('project/personal')); ?>"  style="background-position: right 36px;"><?php echo e($name); ?></a> 
               | 
               <a href="<?php echo e(url('project/del_login')); ?>">退出</a>
            </div>
        <?php else: ?>
            <div class="login-box he">
                <a href="<?php echo e(url('project/login')); ?>">登录</a>
            </div>
        <?php endif; ?>
    </div>

</div>    
	<div class="content">
		<p class="top_title1"><span><a href="http://q.10jqka.com.cn/usa/">美国市场</a>></span>资金流向</p>
        <div class="body m-pager-box"  board="all">
        
		<div class="top_title2">
			<div class="left_border"></div>
			<p>全部美股涨跌排行榜</p>
		</div>

		<p class="check"></p>	

		<div id="maincont"  data-fixedthead="true">   
		            
			<table class="m-table m-pager-table">
				<thead>
					<tr>
						<th style="width:7%">序号</th>
						<th style="width:8%" ><a href="javascript:void(0)" field="stockcode" >代码<i></i></a></th>
					    <th style="width:11%" ><a href="javascript:void(0)" field="stockname" >简称<i></i></a></th>						
						<th style="width:8%" ><a href="javascript:void(0)" field="xj" >现价<i></i></a></th>
						<th style="width:8%"  class="cur"><a href="javascript:void(0)" field="zdf" order="desc"  class="desc">涨跌幅<i></i></a></th>
                        
                        <th style="width:8%" ><a href="javascript:void(0)" field="hs" >换手率<i></i></a></th>
                        <th style="width:8%" ><a href="javascript:void(0)" field="cjl" >流入资金<i></i></a></th>
					    <th style="width:8%" ><a href="javascript:void(0)" field="syl" >流出资金<i></i></a></th>
					    <th style="width:8%" ><a href="javascript:void(0)" field="cje" >净额<i></i></a></th>
	                    <th style="width:8%" ><a href="javascript:void(0)" field="52zg" >成交额<i></i></a></th>
	                    <th style="width:8%" ><a href="javascript:void(0)" field="52zg" >大单流入<i></i></a></th>
                        
                </thead>
                <tbody>

					<?php foreach ($add_list['data'] as $k => $v) {?>
					
                           <tr>
	                		<td><?php echo e($v['moneyflow_id']); ?></td>
	                		<td><a href=""><?php echo e($v['moneyflow_code']); ?></a></td>
	                		<td><a href=""><?php echo e($v['moneyflow_abbreviation']); ?></a></td>
	                		<td class="c-fall"><?php echo e($v['moneyflow_lateprice']); ?></td>
	                		<td class="c-fall"><?php echo e($v['moneyflow_fluct']); ?></td>
	                		<td class="c-fall"><?php echo e($v['moneyflow_rate']); ?></td>
	                		<td><?php echo e($v['moneyflow_funds']); ?></td>
	                		<td><?php echo e($v['moneyflow_outfunds']); ?></td>
	                		<td><?php echo e($v['moneyflow_net']); ?></td>
	                		<td><?php echo e($v['moneyflow_turnover']); ?></td>
	                		<td><?php echo e($v['moneyflow_inflow']); ?></td>
	                	    <td><a class="j_addStock" title="加自选" href="javascript:void(0);"><img src="http://i.thsi.cn/images/q/plus_logo.png" alt=""></a></td>
	                	    
	                	</tr>
                	                   
                	                	</tr>
                	           <?php }?>
                </tbody>
            </table>
		    <input type="hidden" id="baseUrl" value='usa/detail'>
            <div class="m-pager" id="m-page">
            <a href="<?php echo e(url('project/money_liu?page=1')); ?>">首页</a>
            <?php if($add_list['prev_page_url']==''){?>
            <a href="<?php echo e(url('project/money_liu?page=1')); ?>">上一页</a>
            <?php }else{?>
            <a href="<?php echo e($add_list['prev_page_url']); ?>">上一页</a>
            <?php }?>

            <?php if($add_list['current_page']==1){?>
            <?php }else{?>
            <a href="<?php echo e(url('project/money_liu?page=')); ?><?php echo e($add_list['current_page']-1); ?>"><?php echo e($add_list['current_page']-1); ?></a>
            <?php }?>

            <a href="<?php echo e(url('project/money_liu?page=')); ?><?php echo e($add_list['current_page']); ?>" style="color: red"><?php echo e($add_list['current_page']); ?></a>

            <?php if($add_list['current_page']==$add_list['last_page']){?>
            <?php }else{?>
            <a href="<?php echo e(url('project/money_liu?page=')); ?><?php echo e($add_list['current_page']+1); ?>"><?php echo e($add_list['current_page']+1); ?></a>
            <?php }?>

            <?php if($add_list['next_page_url']==''){?>
            <a href="<?php echo e(url('project/money_liu?page=')); ?><?php echo e($add_list['last_page']); ?>">下一页</a>
            <?php }else{?>
            <a href="<?php echo e($add_list['next_page_url']); ?>">下一页</a>
            <?php }?>
            <a href="<?php echo e(url('project/money_liu?page=')); ?><?php echo e($add_list['last_page']); ?>">尾页</a>
      
            </div>
        </div>
        </div>
     	    <div class="cf">
	    	    		    	<div class="news_l ">
	    		<div class="top_title2">
	    			<div class="left_border"></div>
	    			<p>美股要闻</p><span class="more"><a href="http://stock.10jqka.com.cn/usstock/mggsxw_list/" target="_blank">更多>></a></span>
	    		</div>
	    		<ul>
	    			    			<li><a href="http://news.10jqka.com.cn/20170913/c800426759.shtml" target="_blank" title="机构预计苹果今年销量将达2.275亿部 累计营收明年年底有望达1万亿">机构预计苹果今年销量将达2.275亿部...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://stock.10jqka.com.cn/usstock/20170913/c600426747.shtml" target="_blank" title="跟风还是逆向投资？美投资家阐述为什么苹果不受追捧">跟风还是逆向投资？美投资家阐述为什...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://stock.10jqka.com.cn/usstock/20170913/c600426742.shtml" target="_blank" title="员工增长迅速 谷歌斥资2.5亿美元购置3座新办公楼">员工增长迅速 谷歌斥资2.5亿美元购置...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://news.10jqka.com.cn/20170913/c600426676.shtml" target="_blank" title="分析师：1000美元iPhone X或把苹果送上万亿市值宝座">分析师：1000美元iPhone X或把苹果送...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://stock.10jqka.com.cn/usstock/20170913/c600426671.shtml" target="_blank" title="iPhone X并不算贵！或助苹果市值登上万亿美元巅峰？">iPhone X并不算贵！或助苹果市值登上...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://news.10jqka.com.cn/20170913/c600424596.shtml" target="_blank" title="诺德斯特龙家族接洽私募股权公司 有意私有化诺德斯特龙">诺德斯特龙家族接洽私募股权公司 有...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://news.10jqka.com.cn/20170913/c600424162.shtml" target="_blank" title="周三美股公司公布财报及预测 关注CB乡村店">周三美股公司公布财报及预测 关注CB...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://news.10jqka.com.cn/20170913/c600423103.shtml" target="_blank" title="为何果粉常在而米粉摇摆？为何奶茶店易冷而星巴克不衰？">为何果粉常在而米粉摇摆？为何奶茶店...</a><span class="right_date">2017-09-13</span></li>
                 
	    		</ul>
	    	</div>
	    		    	    		    	<div class="news_l ">
	    		<div class="top_title2">
	    			<div class="left_border"></div>
	    			<p>中概股新闻</p><span class="more"><a href="http://stock.10jqka.com.cn/usstock/zggxw_list/" target="_blank">更多>></a></span>
	    		</div>
	    		<ul>
	    			    			<li><a href="http://stock.10jqka.com.cn/usstock/20170913/c600426729.shtml" target="_blank" title="京东整合1号店采购体系 称不涉及人员变动裁员">京东整合1号店采购体系 称不涉及人员...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://news.10jqka.com.cn/20170913/c600423175.shtml" target="_blank" title="京东集团与韩国贸易协会、中国经济网签署战略合作">京东集团与韩国贸易协会、中国经济网...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://stock.10jqka.com.cn/usstock/20170913/c600418200.shtml" target="_blank" title="传1号店10月将关门 它只是京东攻打阿里的百日阵地">传1号店10月将关门 它只是京东攻打阿...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://stock.10jqka.com.cn/usstock/20170913/c600416076.shtml" target="_blank" title="阿里云推出异构计算产品 面向人工智能">阿里云推出异构计算产品 面向人工智能</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://stock.10jqka.com.cn/usstock/20170913/c600416072.shtml" target="_blank" title="聚美优品“颜值贷”涉嫌违规 陈欧亲自代言">聚美优品“颜值贷”涉嫌违规 陈欧亲...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://stock.10jqka.com.cn/usstock/20170912/c600415995.shtml" target="_blank" title="京东宣布9月13日凌晨开启预约新iPhone">京东宣布9月13日凌晨开启预约新iPhone</a><span class="right_date">2017-09-12</span></li>
                	    			<li><a href="http://stock.10jqka.com.cn/usstock/20170912/c600415960.shtml" target="_blank" title="阿里巴巴向印度在线杂货商BigBasket投资2亿美元">阿里巴巴向印度在线杂货商BigBasket...</a><span class="right_date">2017-09-12</span></li>
                	    			<li><a href="http://news.10jqka.com.cn/20170912/c600415792.shtml" target="_blank" title="京东：9年销售了1500万iPhone iPhone6好评率最高">京东：9年销售了1500万iPhone iPhon...</a><span class="right_date">2017-09-12</span></li>
                 
	    		</ul>
	    	</div>
	    		    	    		    	<div class="news_l no_r">
	    		<div class="top_title2">
	    			<div class="left_border"></div>
	    			<p>国际财经</p><span class="more"><a href="http://news.10jqka.com.cn/guojicj_list/" target="_blank">更多>></a></span>
	    		</div>
	    		<ul>
	    			    			<li><a href="http://news.10jqka.com.cn/20170913/c600426766.shtml" target="_blank" title="意大利二季度失业率为11.2%">意大利二季度失业率为11.2%</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://news.10jqka.com.cn/20170913/c600426765.shtml" target="_blank" title="美国8月份中小企业乐观程度指数为105.3">美国8月份中小企业乐观程度指数为105.3</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://news.10jqka.com.cn/20170913/c600424128.shtml" target="_blank" title="美参议院批准新任白宫经济顾问委员会主席">美参议院批准新任白宫经济顾问委员会...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://news.10jqka.com.cn/20170913/c600422988.shtml" target="_blank" title="惠誉：尽管泰国经济温和复苏 但仍面临巨大挑战">惠誉：尽管泰国经济温和复苏 但仍面...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://news.10jqka.com.cn/20170913/c600422935.shtml" target="_blank" title="威斯康星州批准了富士康新工厂30亿美元的激励方案">威斯康星州批准了富士康新工厂30亿美...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://news.10jqka.com.cn/20170913/c600422897.shtml" target="_blank" title="外媒：东芝倾向将芯片业务售给由贝恩资本牵头的财团">外媒：东芝倾向将芯片业务售给由贝恩...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://news.10jqka.com.cn/20170913/c600422164.shtml" target="_blank" title="亿万富豪投资人Leon Cooperman：美股越来越接近回调">亿万富豪投资人Leon Cooperman：美股...</a><span class="right_date">2017-09-13</span></li>
                	    			<li><a href="http://news.10jqka.com.cn/20170913/c600422063.shtml" target="_blank" title="中位数59039美元 2016年美国中产阶级收入创新高">中位数59039美元 2016年美国中产阶级...</a><span class="right_date">2017-09-13</span></li>
                 
	    		</ul>
	    	</div>
	    		    	
	    </div>    </div>
  <div class="bottom-map-warp">
        <div class="bottom-map clearfix">
            <dl class="item">
                <dt class="icon-pdzx">频道资讯</dt>
                <dd><a href="http://news.10jqka.com.cn/yaowen/" target="_blank">财经要闻</a></dd>
                <dd><a href="http://news.10jqka.com.cn/cjzx_list/ " target="_blank">宏观经济</a></dd>
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
    </div> 		<div class="alert_box hide" id="resBox">
	        <div class="hd">
                <h2>提示</h2>
                <span class="close"></span>
            </div>
            <div class="bd warn_con">
                <p></p>
            </div> 
		</div>
<div class="bottom-link">
        <div id="footer">
            <p id="bottom-scroll-listen" data-scroll-taid="web_2bottom" class="ta-scroll-box scroll-ta-over"><a target="_blank" href="http://news.10jqka.com.cn/tzz/" rel="nofollow">投资者关系</a> 			<span class="ff">|</span> 			<a target="_blank" href="http://news.10jqka.com.cn/20100105/c61833421.shtml" rel="nofollow">关于同花顺</a> 			<span>|</span> 			<a target="_blank" href="http://download.10jqka.com.cn/">软件下载</a> 			<span>|</span> 			<a target="_blank" href="http://www.10jqka.com.cn/ia/pass_buck.php" rel="nofollow">法律声明</a> 			<span>|</span> 			<a target="_blank" href="http://www.10jqka.com.cn/hexin_license.htm" rel="nofollow">运营许可</a> 			<span>|</span> 			<a target="_blank" href="http://www.10jqka.com.cn/modules.php?name=what&amp;page=cooperate" rel="nofollow">内容合作</a> 			<span>|</span> 			<a target="_blank" href="http://www.10jqka.com.cn/hexin_contact.htm" rel="nofollow">联系我们</a> 			<span>|</span> 			<a target="_blank" href="http://news.10jqka.com.cn/link.shtml" rel="nofollow">友情链接</a> 			<span>|</span> 			<a target="_blank" href="http://news.10jqka.com.cn/msg/" rel="nofollow">网友意见箱</a> 			<span>|</span> 			<a target="_blank" href="http://job.10jqka.com.cn/" rel="nofollow">招聘英才</a> 			<span class="ff">|</span> 			<a target="_blank" href="http://vote.10jqka.com.cn/webvote/suggest.html" rel="nofollow">用户体验计划</a></p> <p class="c333">不良信息举报电话：(0571)88933003 			<a href=" mailto:jubao@myhexin.com" class="smarterwiki-linkify">举报邮箱：jubao@myhexin.com</a> 			增值电信业务经营许可证：B2-20080207</p> <p class="c333">CopyrightHithink RoyalFlush Information Network Co.,Ltd. All rights reserved. 浙江核新同花顺网络信息股份有限公司版权所有</p> <p class="c333">ICP证： 			<a href="http://www.miitbeian.gov.cn/" target="_blank">浙ICP备09003598号</a> 			证券投资咨询服务提供：浙江同花顺云软件有限公司 （中国证监会核发证书编号：ZX0050）</p> <div id="myVerifyImageBox" class="verifyImageBox" siteid="43" style="margin-bottom:20px;"></div>

        </div>
    </div> <script type="text/javascript" src="http://s.thsi.cn/cb?js/;jquery-1.8.3.min.js;ta.min.js;storage.min.js&20151106"></script>
<script type="text/javascript" src="http://s.thsi.cn/cb?js/home/;ths_core.min.js;ths_quote.min.js;ths_index_v3.3.min.js"></script>
<script type="text/javascript" src="http://s.thsi.cn/cb?js/ucenter/subMenu_v3.js"></script>
<script type="text/javascript" src="http://s.thsi.cn/js/q/newq/common_v2.min.js"></script>
<script type="text/javascript" src="http://s.thsi.cn/cb?js/datacenter/rzrq/highcharts.js"></script>
<script type="text/javascript" src="http://s.thsi.cn/cb?js/webHQ/resources/require.min.js"></script>
<script type="text/javascript" src="http://s.thsi.cn/cb?js/home/v5/app/flash/;puredataprovider-gbk.js;2.0.7/drawChart.min.js"></script>
<script type="text/javascript" src="http://s.thsi.cn/cb?js/q/newq/flash.min.js"></script>
<script type="text/javascript" src="http://s.thsi.cn/js/q/newq/index2.js"></script>
<script type="text/javascript" src="http://s.thsi.cn/cb?js/q/newq/newzdfb.js&20161201"></script>

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

<script type="text/javascript" src="http://s.thsi.cn/js/home/v6/weblogin_v3.20170609.js"></script>

<script>

var fidId = 'hqzx_mgsc';

if (typeof(fidId)!="undefined" && fidId!=null) {
	TA.log({id:'db_57ee1454_207',fid:'info_gather,qcenter,'+fidId});
} else {
	TA.log({id:'db_57ee1454_207',fid:'info_gather,qcenter'});
}
	//TA.log({id: 'db_57ee1454_207',fid: 'qcenter'});
</script>

<script>
	$(function(){
		 var chartsCount = 60 * 1000;
		    var chartsTimer = setInterval(function(){
			    var mydate = new Date();
				var mytime = mydate.getHours();
				if (mytime > 20 || mytime < 5) {
				    pager.changeContent();
				}
		    },chartsCount);
		
	    if($('.m-pager-box').length > 0){
	        var pager = new mpager('.m-pager-box');
	        pager.init();
	    }
	});
	
	
</script>

</body>
</html>
