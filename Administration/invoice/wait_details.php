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
                        发票详情
                    </h3>
                </div>
                <div class="box-content nopadding">
                    <form class="form-horizontal form-bordered form-validate" method="POST" >
                        <div class="control-group">
                            <label class="control-label">公司名称</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"   value="<?
                                foreach ($reg as $k112 => $v112)if($invoice['oid']==$v112['id']){
                                    echo str_replace("@","&nbsp;&nbsp;",$v112['name']);
                                }
                                ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">注册国家</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"   value="<?
                                foreach ($reg as $k12 => $v12)if($invoice['oid']==$v12['id']){
                                    foreach ($registerorder_country as $k336 => $v336) {
                                        if($v12['country']==$k336+1){
                                            echo $v336;
                                        }
                                    }
                                }
                                ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">发票标题</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[title]"  value="<?=$invoice['title']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">税号</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[ein]"  value="<?=$invoice['ein']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">支付订单编号</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[ein]"  value="<?
                                
                                    echo $order['order_coding'];
                               
                                ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">支付币种</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[number]"  value="<?foreach ($orderlist_currency as $k12 => $v12) {
                                    if($order['currency']==$k12+1){
                                        echo $v12;
                                    }
                                }
                                ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">支付方式</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[number]"  value="<?foreach ($orderlist_way as $k11 => $v11) {
                                    if($order['way']==$k11+1){
                                        echo $v11;
                                    }
                                }
                                ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">金额</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[ein]"  value="<?
                                
                                    echo $order['number'];
                                
                                ?>" class="input-xlarge" >
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">发票类型</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[type]"  value="<?
                           foreach ($invoicelist_type as $key => $value) {
                               if($invoice['type']==($key+1)){
                                    echo $value;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">业务类型</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[business_type]"  value="<?
                           foreach ($registerorder_type as $k => $v) {
                               if($invoice['business_type']==($k+1)){
                                    echo $v;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label">联系人姓名</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[contact_name]"  value="<?=$invoice['contact_name']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系人邮箱</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[contact_email]"  value="<?=$invoice['contact_email']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系人电话</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[contact_mobile]"  value="<?=$invoice['contact_mobile']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">手机号国际代码</label>
                            <div class="controls">
                                <!-- <input disabled="disabled" type="text" name="data[mobile_code]"  value="<?
                           foreach ($country_mobilecode as $kw => $vw) {
                               if($invoice['mobile_code']==($kw+1)){
                                    echo $vw['code'];
                               }
                           }
                           ?>" class="input-xlarge" > -->
                           <input disabled="disabled" type="text" name="data[mobile_code]"  value="<?=$invoice['mobile_code']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">地址</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[address]"  value="<?=$invoice['address']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">发票申请状态</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[state]"  value="<?
                           foreach ($invoicelist_state as $kv => $vv) {
                               if($invoice['state']==($kv+1)){
                                    echo $vv;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">创建时间</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[create_time]"  value="<?=date('Y-m-d',$invoice['create_time'])?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">修改时间</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[create_time]"  value="<?=date('Y-m-d',$invoice['change_time'])?>" class="input-xlarge" >
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
            //window.location.href="/index.php/sysadmin/system/admin";
        })
    });

    
</script>