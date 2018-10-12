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
                        发票修改
                    </h3>
                </div>
                <div class="box-content nopadding">
                    <form class="form-horizontal form-bordered form-validate"  method="POST" action="<?=$this->url('user/user_invoice_up_ajax')?>" name="form_regist" id="form_regist" enctype="multipart/form-data" >
                     <!--    <div class="control-group">
                            <label class="control-label">注册国家</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[title]"  value="<?
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
                            <label class="control-label">注册名称</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[title]"  value="<?
                                foreach ($reg as $k112 => $v112)if($invoice['oid']==$v112['id']){
                                    $m = explode("@",$v112['name']);
                                    echo $m[0];
                                }
                                ?>" class="input-xlarge" >
                            </div>
                        </div> -->

                        <div class="control-group">
                            <label class="control-label">业务类型</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[type]"  value="<?
                           foreach ($registerorder_type as $qwe => $ewq) {
                               if($invoice['type']==($qwe+1)){
                                    echo $ewq;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">发票类型</label>
                            <div class="controls">
                                <select name="data[type]" class="input-xlarge"><!--  -->
                                    <?foreach ($invoicelist_type as $kc => $vc) {?>
                                 <option value="<?echo $kc+1;?>"<?if($invoice['type']==($kc+1)){echo "selected";}?>><?=$vc?></option>
                                     <?}?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">发票抬头</label>
                            <div class="controls">
                                <input  type="text" name="data[title]"  value="<?=$invoice['title']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">税号</label>
                            <div class="controls">
                                <input  type="text" name="data[ein]"  value="<?=$invoice['ein']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">金额</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[number]"  value="<?
                                foreach ($order as $key => $value)if($invoice['poid']==$value['id']){
                                    echo $value['number'];
                                }
                                ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">支付订单编号</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[number]"  value="<?
                                foreach ($order as $ka => $va)if($invoice['poid']==$va['id']){
                                    echo $va['order_coding'];
                                }
                                ?>" class="input-xlarge" >
                            </div>
                        </div>
                        
                         <div class="control-group">
                            <label class="control-label">联系人姓名</label>
                            <div class="controls">
                                <input  type="text" name="data[contact_name]"  value="<?=$invoice['contact_name']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系人邮箱</label>
                            <div class="controls">
                                <input  type="text" name="data[contact_email]"  value="<?=$invoice['contact_email']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系人电话</label>
                            <div class="controls">
                                <input  type="text" name="data[contact_mobile]"  value="<?=$invoice['contact_mobile']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">手机号国际代码</label>
                            <div class="controls">
                              <select name="data[mobile_code]" class="input-xlarge">
                              <?foreach ($country_mobilecode as $ww => $qw) {?>
                                     <option value="<?echo $ww+1;?>"<?if($invoice['mobile_code']==($qw['code'])){echo "selected";}?>>
                                     <?=$qw['code']?><?=$qw['country']?>
                                     </option>
                                <?}?>
                            </select>
                            <!-- <input  type="text" name="data[mobile_code]"  value="<?=$invoice['mobile_code']?>" class="input-xlarge" > -->
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">邮寄地址</label>
                            <div class="controls">
                                <input  type="text" name="data[address]"  value="<?=$invoice['address']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?if($invoice['state']!=2){?>
                        <div class="control-group">
                            <label class="control-label">审核发票</label>
                            <div class="controls">
                                <select name="data[state]" class="input-xlarge">
                                    <option value="2" <?if($invoice['state']==2){echo "selected";}?>>审核通过</option>
                                    <option value="1" <?if($invoice['state']==1){echo "selected";}?>>暂不处理</option>
                                </select>
                            </div>
                        </div>
                        <?}?>
                        <div class="control-group" style="display: none;">
                            <label class="control-label">修改时间</label>
                            <div class="controls">
                                <input  type="text" name="data[change_time]"  value="<?=date('Y-m-d H:m:i')?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="hidden" name="id" value="<?=$invoice['id']?>" />
                            <input type="submit" id="btn" class="btn btn-primary" value="确认修改" />
                            <input type="reset" class="btn btn-primary" value="重置" style="margin-left: 20px;width: 60px;margin-right: 20px;" />
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