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
                               if($porder['way']==($kc+1)){
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