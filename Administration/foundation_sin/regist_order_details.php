<style type="text/css">
    li{
        list-style: none;
    }
    .controls .inputa{
        margin-bottom: 6px;
        margin-right: 6px;
    }
</style>
<div id="main">
<div class="container-fluid">
    <div class="page-header">
        <div class="pull-left">
            <h1><?=$this->menu?></h1>
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
        
            <div class="box">
                <div class="box-content">
                    <ul class="tiles tiles-center nomargin">
                        <li class="lightgrey">
                        <?if((count($r1))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r1);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("foundation_sin/regist")?>"><span><i class="icon-book"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申请</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="lightred">
                        <?if((count($r2))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r2);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("foundation_sin/wait")?>"><span><i class="icon-print"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单审核</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="blue">
                        <?if((count($r3))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r3);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("foundation_sin/sign")?>"><span><i class="icon-bookmark"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文件签署</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="brown">
                        <?if((count($r4))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r4);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("foundation_sin/report")?>"><span><i class="icon-exchange"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申报</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="satgreen">
                        <?if((count($r5))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r5);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("foundation_sin/check")?>"><span><i class="icon-globe"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册审查</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="orange">
                        <?if((count($r6))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r6);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("foundation_sin/finish")?>"><span><i class="icon-leaf"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册完成</font></font></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-th-list"></i>
                        支付订单详情
                    </h3>
                </div>
                <div class="box-content nopadding">

                    <form class="form-horizontal form-bordered form-validate"  >
                        
                        <div class="control-group">
                            <label class="control-label">订单编号</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[order_coding]"  value="<?=$porder['order_coding']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">服务项目</label>
                            <div class="controls">
                                <ul class="service-list c66 fz22 plr30 pt40 mt10">
                                <?foreach ($service as $key => $value) {?>
                                <?$ccc = explode(",",$porder['project']);foreach ($ccc as $k3 => $v3)if($v3==$value['id']){?>
                                    <li>
                                        <label class="c28 ub ub-ac" >
                                            <input  type="checkbox" value="" class="form-checkbox mr10 inputa"  checked="checked" disabled="disabled" />
                                            <?=$value['project_cn']?>&nbsp;&nbsp;￥<?=$value['money_rmb']?>
                                        </label>
                                    </li>
                               <?}}?>
                                </ul>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">订单金额</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[number]"  value="<?=$porder['number']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">支付方式</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[way]"  value="<?
                           foreach ($orderlist_way as $kc => $vc) {
                               if($porder['way']==($kc)){
                                    echo $vc;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">支付币种</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[currency]"  value="<?
                           foreach ($orderlist_currency as $kb => $vb) {
                               if($porder['currency']==($kb+1)){
                                    echo $vb;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">支付状态</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[state]"  value="<?
                           foreach ($orderlist_state as $kaa => $vaa) {
                               if($porder['state']==($kaa+1)){
                                    echo $vaa;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">发票</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[invoice]"  value="<?
                           foreach ($invoicelist_state as $kd => $vd) {
                               if($porder['invoice']==($kd+1)){
                                    echo $vd;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">创建时间</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[create_time]"  value="<?=date('Y-m-d',$porder['create_time'])?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">更改时间</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[change_time]"  value="<?=date('Y-m-d',$porder['change_time'])?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="button" id="frist" class="btn btn-primary" value="返回" style="width: 60px;" />
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function(){
        $('#frist').click(function(){
            window.history.back(-1);
        })
    });

    
</script>