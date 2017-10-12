<!DOCTYPE html>
<!-- saved from url=(0026)http://q.10jqka.com.cn/usa -->
<html lang="en">
<base href="{{URL::asset('Home/index').'/'}}">
<head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
    
    <title>同花顺财经网</title>
    <meta name="keywords" content="金融,金融网">
    <meta name="description" content="核新同花顺网络信息股份有限公司。">
    <link rel="stylesheet" href="./cd/cb">
    <link rel="stylesheet" href="./cd/cb(1)">  
            <script type="text/javascript" src="./tu/ichart.1.2.min.js"></script>
        <link rel="stylesheet" href="./tu/demo.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="./css/subMenu.min.css">
    <style>
    #canvasDiv1{
        margin-left: 50px; 
        float:left;
    }
    .right_pic{
        margin-right: 150px;
        margin-top: 50px;
    }
    </style>
    </head>
<body class="reversedColor">
<div class="header fixed">
    <div class="w1200">
        <div class="hdlogo">
            <a target="_blank" class="site-logo" href="http://www.10jqka.com.cn/"> <img src="./img/logo-ths.jpg" title="同花顺" alt="同花顺"></a>
            <h1><a target="_blank" title="炒股中心" class="sub-logo">炒股中心</a></h1>
        </div>

        <div class="nav">
            <a href="{{url('project/show')}}" data-type="hssc">首页</a>
            <a href="http://q.10jqka.com.cn/usa/" class="cur">美国市场</a>
            <a href="{{url('project/Data_analysis')}}">财务分析</a>
            <a href="{{url('project/money_liu')}}">资金流向</a>
            <a href="{{url('project/master')}}">炒股大师</a>
        </div>
        @if($name != '')
            <div class="login-box he">
               <a href="{{url('project/personal')}}"  style="background-position: right 36px;">{{$name}}</a> 
               | 
               <a href="{{url('project/del_login')}}">退出</a>
            </div>
        @else
            <div class="login-box he">
                <a href="{{url('project/login')}}">登录</a>
            </div>
        @endif

    </div>

</div>
    <div class="content">

        <div class="top_title2" style="margin-top: 104px">
            <div class="left_border"></div>
            <p>指数行情</p>
        </div>

        <div class="mt30 clearfix">
          <input type='hidden' class="xin" value="{{$add_list}}">
             <script type="text/javascript">
                    $(function(){
                        var price = $('.xin').val();
                        var arr=[]
                        arr=price.split(",");
                        // alert(arr)
                        var pv=[],ip=[],t;
                        for(var i=0;i<arr.length;i++){
                            // t = Math.floor();
                            pv.push(arr[i]);
                          
                        }
                        
                        var data = [
                                    {
                                        name : '%',
                                        value:pv,
                                        color:'#0d8ecf',
                                        line_width:2
                                    },
                                    {
                                        name : 'IP',
                                        value:ip,
                                        color:'#ef7707',
                                        line_width:2
                                    }
                                 ];
                         
                        // var labels = ["0-0.5","0.5-1","1-2.5","2.5-5","5-10","10-15","15-20","大于20"];
                       
                        var labels = ["10-15","16-20","大于20","5-10","2.5-5","2-2.5","0.5-1","0-0.5"];

                        var line = new iChart.LineBasic2D({
                            render : 'canvasDiv1',
                            data: data,
                            align:'center',
                            title : '美股的跌涨幅比',
                            subtitle : '由于比例较小不足1%,默认为0',
                            footnote : '',
                            width : 660,
                            height : 350,
                            tip:{
                                enable:true,
                                shadow:true
                            },
                            legend : {
                                enable : true,
                                row:1,//设置在一行上显示，与column配合使用
                                column : 'max',
                                valign:'top',
                                sign:'bar',
                                background_color:null,//设置透明背景
                                offsetx:-80,//设置x轴偏移，满足位置需要
                                border : true
                            },
                            crosshair:{
                                enable:true,
                                line_color:'#62bce9'
                            },
                            sub_option : {
                                label:false,
                                point_hollow : false
                            },
                            coordinate:{
                                width:500,
                                height:240,
                                axis:{
                                    color:'#9f9f9f',
                                    width:[0,0,2,2]
                                },
                                grids:{
                                    vertical:{
                                        way:'share_alike',
                                        value:5
                                    }
                                },
                                scale:[{
                                     position:'left',   
                                     start_scale:0,
                                     end_scale:50,
                                     scale_space:0,
                                     scale_size:2,
                                     scale_color:'#9f9f9f'
                                },{
                                     position:'bottom', 
                                     labels:labels
                                }]
                            }
                        });
                    
                    //开始画图
                    line.draw();
                });
                
            </script>

          

           
              
               <div id='canvasDiv1'></div>
           


            <div class="right_pic zhu">
                <div id="container" class="zhu" data-highcharts-chart="3">
                    <div class="highcharts-container" id="highcharts-9" style="position: relative; overflow: hidden; width: 270px; height: 249px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                    <svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="270" height="249">
                    <desc>Created with Highcharts 4.1.5</desc>
                    <defs>
                    <clippath id="highcharts-10">
                    <rect x="0" y="0" width="221" height="149"></rect>
                    </clippath>
                    </defs>
                    <rect x="0" y="0" width="270" height="249" strokeWidth="0" fill="#FFFFFF" class=" highcharts-background">
                    </rect>
                    </g>
                    <g class="highcharts-series-group" zIndex="3">
                    <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(39,40) scale(1 1)" style="cursor:pointer;" clip-path="url(#highcharts-10)">

                    <rect x="6.5" y="149.5" width="14" height="0" stroke="#FFFFFF" stroke-width="1" fill="#59b881" rx="0" ry="0"></rect>
                    <rect x="34.5" y="148.5" width="14" height="1" stroke="#FFFFFF" stroke-width="1" fill="#59b881" rx="0" ry="0"></rect>
                    <rect x="61.5" y="144.5" width="14" height="5" stroke="#FFFFFF" stroke-width="1" fill="#59b881" rx="0" ry="0"></rect>
                    <rect x="89.5" y="88.5" width="14" height="61" stroke="#FFFFFF" stroke-width="1" fill="#59b881" rx="0" ry="0"></rect>
                    <rect x="117.5" y="23.5" width="14" height="126" stroke="#FFFFFF" stroke-width="1" fill="#d75442" rx="0" ry="0"></rect>
                    <rect x="144.5" y="135.5" width="14" height="14" stroke="#FFFFFF" stroke-width="1" fill="#d75442" rx="0" ry="0"></rect>
                    <rect x="172.5" y="146.5" width="14" height="3" stroke="#FFFFFF" stroke-width="1" fill="#d75442" rx="0" ry="0"></rect>
                    <rect x="200.5" y="147.5" width="14" height="2" stroke="#FFFFFF" stroke-width="1" fill="#d75442" rx="0" ry="0"></rect>
                    </g>
                    
                    </g>



                    <g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7">

                    <text x="55.40522486435067" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 55.40522486435067 205)" y="205" opacity="1">

                    <tspan>-∞~-9%</tspan></text><text x="83.03022486435067" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 83.03022486435067 205)" y="205" opacity="1"><tspan>-9%~-6%</tspan></text><text x="110.65522486435067" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 110.65522486435067 205)" y="205" opacity="1"><tspan>-6%~-3%</tspan></text><text x="138.28022486435069" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 138.28022486435069 205)" y="205" opacity="1"><tspan>-3%~-0%</tspan></text><text x="165.90522486435069" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 165.90522486435069 205)" y="205" opacity="1"><tspan>0%~3%</tspan></text><text x="193.53022486435069" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 193.53022486435069 205)" y="205" opacity="1"><tspan>3%~6%</tspan></text><text x="221.15522486435069" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 221.15522486435069 205)" y="205" opacity="1"><tspan>6%~9%</tspan></text><text x="248.78022486435066" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 248.78022486435066 205)" y="205" opacity="1"><tspan>9%~∞%</tspan></text></g>

                    </svg></div></div>
                <p class="pic_top">上涨:<span class="red" style="font-size: 14px;" id="sz">3874</span> &nbsp;下跌:<span class="green" style="font-size: 14px;" id="xd">1810</span> &nbsp;平盘:<span style="font-size: 14px; font-weight: bold; margin-left: 15px;" id="pp">581</span></p>
            </div>      
        </div>
        <div class="m-pager-box0" board="zgg">

<div class="mar m-pager-box1" board="all">
            <div class="top_title2" style="margin-bottom: 30px">
                <div class="left_border"></div>
                <p>全部美股涨跌排行榜</p><span class="more"><a href="http://q.10jqka.com.cn/usa/detail/" target="_blank">更多&gt;&gt;</a></span>
            </div>
            
            <div class="all_maincont">               
                <table class="m-table m-pager-table">
                    <thead>
                        <tr>
                            <th style="width:15%"><a href="javascript:void(0)" field="stockcode">名称<i></i></a></th>
                            <th style="width:7%">行业版块</th>
                            <th style="width:6%"><a href="javascript:void(0)" field="xj">代码<i></i></a></th>
                            <th style="width:6%"><a href="javascript:void(0)" field="zd">涨跌额<i></i></a></th>
                            <th style="width:6%"><a href="javascript:void(0)" field="zd">涨跌幅<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="hs">昨收<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="cjl">今开<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="syl">最高价<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zs">最低价<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="kpj">振幅<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zgj">成交量<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zdj">市值<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zdj">上市地<i></i></a></th>
                            <th style="width:7%">加自选</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $k=>$v){?>
                        <?php if($v['diff']<0){?>
                        <tr style="color:green">
                        <?php }else{?>
                        <tr style="color:red">
                        <?php }?>
                            <td><a href="{{url('project/meigu_info')}}/{{$v['symbol']}}"><?php echo $v['cname']?></a></td>
                            <td><?php echo $v['category']?></td>
                            <td><?php echo $v['symbol']?></td>
                            <td><?php echo $v['price']?></td>
                            <td><?php echo $v['diff']?></td>
                            <td><?php echo $v['chg']?></td>
                            <td><?php echo $v['open']?></td>
                            <td><?php echo $v['high']?></td>
                            <td><?php echo $v['low']?></td>
                            <td><?php echo $v['amplitude']?></td>
                            <td><?php echo round($v['volume']/10000,2)?>万</td>
                            <td><?php echo round($v['mktcap']/100000000,2)?>亿</td>
                            <td><?php echo $v['market']?></td>
                            <td><a class="j_addStock" data-name="<?php echo $v['cname']?>" title="加自选" href="javascript:void(0);"><img src="./img/plus_logo.png" alt=""></a></td>
                        </tr>  
                    <?php }?>                 
                    </tbody>
                </table>
            </div>
        </div>
<script src="{{URL::asset('jq.js')}}"></script>
<script>
    $(function(){
        $(".j_addStock").click(function(){
            var name = $(this).data('name');
            $.ajax({
                type:"get",
                url:"{{url('project/zixuan')}}",
                data:{'name':name},
                success:function(data){
                    if(data == 1){
                        alert('您已成功将股票 '+name+' 加入自选股！')
                    }else if(data == 2){
                        alert('加入自选失败！')
                    }else if(data == 3){
                        alert('股票 '+name+' 已在您的自选股中！')
                    }
                }
            })
        })
    })
</script>  
        
            <div class="cf">
                <div class="news_l ">
                <div class="top_title2">
                    <div class="left_border"></div>
                    <p>美股要闻</p><span class="more"><a href="{{url('project/meigu_newpage')}}?type=mgyw" target="_blank">更多&gt;&gt;</a></span>
                </div>
                <ul>
                    @foreach($yw as $v)
                    <li>
                        <a href="{{url('project/meigu_new')}}?link={{$v['link']}}&type=mgyw" target="_blank" title="{{$v['title']}}">
                            @if(mb_strlen($v['title'])>17)
                                {{mb_substr($v['title'],0,17).'...'}}
                            @else
                                {{$v['title']}}
                            @endif
                        </a><span class="right_date">{{$v['time']}}</span>
                    </li>
                    @endforeach         
                </ul>
            </div>

            <div class="news_l ">
                <div class="top_title2">
                    <div class="left_border"></div>
                    <p>中概股新闻</p><span class="more"><a href="{{url('project/meigu_newpage')}}?type=zggng" target="_blank">更多&gt;&gt;</a></span>
                </div>
                <ul>
                    @foreach($gng as $v)
                    <li>
                        <a href="{{url('project/meigu_new')}}?link={{$v['link']}}&type=zggng" target="_blank" title="{{$v['title']}}">
                            @if(mb_strlen($v['title'])>17)
                                {{mb_substr($v['title'],0,17).'...'}}
                            @else
                                {{$v['title']}}
                            @endif
                        </a><span class="right_date">{{$v['time']}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="news_l no_r">
                <div class="top_title2">
                    <div class="left_border"></div>
                    <p>研究分析</p><span class="more"><a href="{{url('project/meigu_newpage')}}?type=yjfx" target="_blank">更多&gt;&gt;</a></span>
                </div>
                <ul>
                    @foreach($yjfx as $v)
                    <li>
                        <a href="{{url('project/meigu_new')}}?link={{$v['link']}}&type=yjfx" target="_blank" title="{{$v['title']}}">
                            @if(mb_strlen($v['title'])>17)
                                {{mb_substr($v['title'],0,17).'...'}}
                            @else
                                {{$v['title']}}
                            @endif
                        </a><span class="right_date">{{$v['time']}}</span>
                    </li>
                    @endforeach
                </ul>
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