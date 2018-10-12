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
                            <label class="control-label">注册国家</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[title]"  value="<?foreach ($reg as $k1 => $v1)if($v1['id']==$order['oid']) {
                                    //echo $v1['country'];
                                    foreach ($registerorder_country as $k123 => $v123) {
                                        if($v1['country']==$k123+1){
                                            echo $v123;
                                        }
                                    }
                                }?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">注册名称</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[title]"  value="<?foreach ($reg as $k1 => $v1)if($v1['id']==$order['oid']) {
                                    echo  str_replace("@","&nbsp;&nbsp;",$v1['name']);
                                    
                                }?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">支付订单编号</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[number]"  value="<?=$order['order_coding']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">金额</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[number]"  value="<?=$order['number']?>" class="input-xlarge" >
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
                            <label class="control-label">联系人姓名</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[contact_name]"  value="<?foreach ($reg as $k2 => $v2)if($v2['id']==$order['oid']) {
                                    echo $v2['contact_name'];
                                    
                                }?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系人邮箱</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[contact_email]"  value="<?foreach ($reg as $k3 => $v3)if($v3['id']==$order['oid']) {
                                    echo $v3['contact_email'];
                                    
                                }?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系人电话</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[contact_mobile]"  value="<?foreach ($reg as $k4 => $v4)if($v4['id']==$order['oid']) {
                                    echo $v4['contact_mobile'];
                                    
                                }?>" class="input-xlarge" >
                            </div>
                        </div>
                        <!-- <div class="control-group">
                            <label class="control-label">手机号国际代码</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[mobile_code]"  value="<?
                                foreach ($reg as $k5 => $v5)if($v5['id']==$order['oid']) {
                                        foreach ($country_mobilecode as $akw => $avw) {
                                            if($v5['mobile_code']==($akw+1)){
                                                echo $avw['code'];
                                            }
                                        }
                                }
                                ?>" class="input-xlarge" >
                            </div>
                        </div> -->
                        <div class="control-group">
                            <label class="control-label">地址</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[address]"  value="<?foreach ($reg as $k6 => $v6)if($v6['id']==$order['oid']) {
                                    echo $v6['address'];
                                    
                                }?>" class="input-xlarge" >
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