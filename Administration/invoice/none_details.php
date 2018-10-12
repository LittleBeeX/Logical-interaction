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
                                <input disabled="disabled" type="text"   value="<?echo str_replace("@","&nbsp;&nbsp;",$reg['name']);?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">注册国家</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"   value="<?foreach ($registerorder_country as $tr1 => $ui1) {
                                    if($reg['country']==$tr1+1){
                                        echo $ui1;
                                    }
                                }?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系人姓名</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"   value="<?=$reg['contact_name']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系人邮箱</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"   value="<?=$reg['contact_email']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系人手机号</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"   value="<?=$reg['contact_mobile']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">手机号国际码</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"   value="<?=$reg['mobile_code']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">邮寄地址</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"   value="<?=$reg['address']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">支付订单编号</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[number]"  value="<?=$order['order_coding']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">支付方式</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[invoice]"  value="<?
                           foreach ($orderlist_way as $kcq1 => $vcq1) {
                               if($order['way']==($kcq1+1)){
                                    echo $vcq1;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">支付币种</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[invoice]"  value="<?
                           foreach ($orderlist_currency as $kcq3 => $vcq3) {
                               if($order['currency']==($kcq3+1)){
                                    echo $vcq3;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">金额</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[number]"  value="<?=$order['number']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">业务类型</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[business_type]"  value="<?
                           foreach ($registerorder_type as $kc => $vc) {
                               if($order['type']==($kc+1)){
                                    echo $vc;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">发票申请状态</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[invoice]"  value="<?
                           foreach ($invoicelist_state as $kcq => $vcq) {
                               if($order['invoice']==($kcq+1)){
                                    echo $vcq;
                               }
                           }
                           ?>" class="input-xlarge" >
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