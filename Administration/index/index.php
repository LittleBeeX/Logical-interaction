<style type="text/css">
    #sss{
        font-size: 16px;
    }
    #sss span{
        margin-left: 5%;
    }
</style>
<div id="main">
<div class="container-fluid">
<div class="page-header">
        <div class="pull-left">
            <h1>首页</h1>
        </div>
        <div class="pull-right">
            <ul class="stats">
                <li class='lightred'>
                    <i class="icon-calendar"></i>
                    <div class="details">
                        <span class="big"></span>
                        <span></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="breadcrumbs">
        <ul>
            <li>
                <a href="javascript:();"><?=$headname?></a>
                <i class="icon-angle-right"></i>
            </li>
            <li>
                <a href="javascript:();"><?=$this->title?></a>
                <i class="icon-angle-right"></i>
            </li>
            <li>
                <a href="javascript:();"><?=$this->menu?></a>
            </li>
        </ul>
        <div class="close-bread">
            <a href="javascript:();"><i class="icon-remove"></i></a>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        近一个月新增注册情况
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <div  id="newRegister" style="height:600px;">
                    </div>
                   <p id="sss">
                       <span>近一个月新增注册总数:</span>
                       <span style="color: pink;">新加坡基金会<?=$sinfcount?></span>
                       <span style="color: green;">新加坡有限公司<?=$sinccount?></span>
                       <span style="color: orange;">英国私人有限公司<?=$gbrccount?></span>
                       <span style="color: red;">BVI有限公司<?=$cayccount?></span>
                       <span style="color: brown;">开曼有限公司<?=$cym?></span>
                       <span>共计：<?=$sinfcount+$sinccount+$gbrccount+$cayccount+$cym?></span>
                   </p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('newRegister'));
        // 指定图表的配置项和数据
            option = {
                title: {
                    text: '近一个月新增注册情况',
                },
                tooltip: {
                    trigger: 'axis'
                },
                legend: {
                    data:['新加坡基金会','新加坡有限公司','英国私人有限公司','BVI有限公司','开曼有限公司']
                },
                grid: {
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    containLabel: true
                },
                toolbox: {
                    feature: {
                        saveAsImage: {}
                    }
                },
                xAxis: {
                    type: 'category',
                    boundaryGap: false,
                    data: <?echo json_encode($time)?>
                },
                yAxis: {
                    name:'注册数量',
                    type: 'value',
                },
                series: [
                    {
                        name:'新加坡基金会',
                        type:'line',
                        color:'pink',
                        data:[<?foreach ($sin_foundation as $k1 => $v1) {
                        echo $v1['count'].",";
                    }?>]
                    },
                    {
                        name:'新加坡有限公司',
                        type:'line',
                        color:'green',
                        data:[<?foreach ($sin_company as $k2 => $v2) {
                        echo $v2['count'].",";
                    }?>]
                    },
                    {
                        name:'英国私人有限公司',
                        type:'line',
                        color:'orange',
                        data:[<?foreach ($gbr_company as $k3 => $v3) {
                        echo $v3['count'].",";
                    }?>]
                    },
                    {
                        name:'BVI有限公司',
                        type:'line',
                        color:'red',
                        data:[<?foreach ($cay_company as $k4 => $v4) {
                        echo $v3['count'].",";
                    }?>]
                    },
                    {
                        name:'开曼有限公司',
                        type:'line',
                        color:'brown',
                        data:[<?foreach ($cym_company as $k5 => $v5) {
                        echo $v3['count'].",";
                    }?>]
                    },
                ]
            };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
