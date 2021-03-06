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
                            <a href="<?=$this->url("company_cay/regist")?>"><span><i class="icon-book"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申请</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="lightred">
                        <?if((count($r2))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r2);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_cay/wait")?>"><span><i class="icon-print"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单审核</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="blue">
                        <?if((count($r3))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r3);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_cay/sign")?>"><span><i class="icon-bookmark"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文件签署</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="brown">
                        <?if((count($r4))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r4);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_cay/report")?>"><span><i class="icon-exchange"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申报</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="satgreen">
                        <?if((count($r5))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r5);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_cay/check")?>"><span><i class="icon-globe"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册审查</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="orange">
                        <?if((count($r6))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r6);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_cay/finish")?>"><span><i class="icon-leaf"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册完成</font></font></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-user"></i>
                        订单修改
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                <form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('company_cay/check_up_ajax')?>" name="form_bill" id="form_bill">
                    <div class="control-group">
                        <label class="control-label">公司名称</label>
                        <div class="controls">
                            <input type="text" name="data[name]" value="<?$a = explode("@",$registlist['name']);echo $a[0];?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">订单编号</label>
                        <div class="controls">
                            <input type="text" name="data[order_coding]" value="<?=$registlist['order_coding']?>"  class="input-xlarge"  disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人姓名</label>
                        <div class="controls">
                            <input type="text" name="data[contact_name]" value="<?=$registlist['contact_name']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group" style="display: none;">
                        <label class="control-label">TYPE</label>
                        <div class="controls">
                            <input type="text" name="data[type]" value="<?=$registlist['type']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group" style="display: none;">
                        <label class="control-label">UID</label>
                        <div class="controls">
                            <input type="text" name="data[uid]" value="<?=$registlist['uid']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人邮箱</label>
                        <div class="controls">
                            <input type="text" name="data[contact_email]" value="<?=$registlist['contact_email']?>"  class="input-xlarge" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人电话</label>
                        <div class="controls">
                            <input type="text" name="data[contact_mobile]" value="<?=$registlist['contact_mobile']?>"  class="input-xlarge"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">手机号国际代码</label>
                        <div class="controls">
                            <select name="data[mobile_code]" class="input-xlarge">
                                <?foreach ($country_mobilecode as $w => $q) {?>
                                     <option value="<?echo $w+1;?>"<?if($registlist['mobile_code']==($q['code'])){echo "selected";}?>>
                                     <?=$q['code']?><?=$q['country']?>
                                     </option>
                                <?}?>
                            </select>
                            <!-- <input type="text" name="data[mobile_code]" value="<?=$registlist['mobile_code']?>"  class="input-xlarge"/> -->
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">服务项目</label>
                        <div class="controls">
                            <ul class="service-list c66 fz22 plr30 pt40 mt10">
                            <?
                            $mm = explode(",",$registlist['project']);
                            foreach ($sin_f as $ks1 => $vs1) {?>
                                <li>
                                    <label class="c28 ub ub-ac">
                                        <input  type="checkbox" <?foreach ($mm as $ktr => $vtr) {
                                            if($vtr==($ks1+1)){echo "checked='checked'";}
                                        }
                                        ?> 
                                        <?
                                            for ($i=0; $i < count($porder); $i++) { 
                                                if($porder[$i]['state']==2){
                                                    $ee = explode(",",$porder[$i]['project']);
                                                    for ($m=0; $m <count($ee) ; $m++) { 
                                                        if($ee[$m]==($ks1+1)){
                                                            echo "disabled='disabled'";
                                                        }
                                                    }
                                                }
                                            }
                                        ?> value="<?=$ks1+1?>"  class="form-checkbox mr10 inputa" />
                                        <?=$vs1['project_cn']?>&nbsp;&nbsp;￥<?=$vs1['money_rmb']?>
                                    </label>
                                </li>
                            <?}?>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="control-group">
                        <label class="control-label">支付币种</label>
                        <div class="controls">
                           <select id="sele1" name="data[currency]">
                                <option value="1">人民币</option>
                                <option value="2">LITTLE</option>
                           </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">支付方式</label>
                        <div class="controls">
                           <select id="sele2" name="data[way]">
                                <option value="0">银行卡转账</option>
                                <option value="2">数字钱包</option>
                           </select>
                        </div>
                    </div> -->
                    <div class="control-group">
                        <label class="control-label">邮寄地址</label>
                        <div class="controls">
                            <input type="text" name="data[address]" value="<?=$registlist['address']?>"  class="input-xlarge" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">备注</label>
                        <div class="controls">
                            <input type="text" name="data[audit_note]" value="<?=$registlist['audit_note']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">流程审核</label>
                        <div class="controls">
                            <select name="data[state]" class="input-xlarge">
                                <option value="4" <?if($registlist['state']==4){echo "selected";}?>>退回到注册申报</option>
                                <option value="5" <?if($registlist['state']==5){echo "selected";}?>>暂不处理</option>
                                <option value="6" <?if($registlist['state']==6){echo "selected";}?>>审核通过进入注册完成</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">基本信息审核</label>
                        <div class="controls">
                            <select name="data[audit_state]" class="input-xlarge"><!--  -->
                                <?foreach ($registerpeple_auditstate as $kaw => $vaw) {?>
                                     <option value="<?echo $kaw+1;?>"<?if($registlist['audit_state']==($kaw+1)){echo "selected";}?>>
                                     <?=$vaw?>
                                     </option>
                                <?}?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group" style="display: none;">
                        <label class="control-label">更改时间</label>
                        <div class="controls">
                            <input type="text" name="data[change_time]" value="<?=date('Y-m-d H:m:i')?>"  class="input-xlarge" data-rule-required="true" />
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <input type="hidden"  name="id" value="<?=$registlist['id']?>" />
                        <input type="submit" id="btn" class="btn btn-primary" value="确认"style="width: 60px;" />
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#frist').click(function(){
            window.history.back(-1);
        })
        // $("#btn").on('click',function(){
        //     var aa = "<?foreach ($sin_f as $ks1 => $vs1){echo $vs1['yn_choice'];}?>";
        //         for (var i = 0; i < aa.length; i++) {
        //             if(aa[i]==1){
        //             $(".controls .inputa").removeAttr("disabled"); 
        //         }
        //     }
        // })
        // $("#sele1").change(function(){//币种02
        //     var a = $("#sele1").val();
        //     if(a==1){
        //         $("#sele2").val(0);
        //     }
        //     if(a==2){
        //         $("#sele2").val(2);
        //     }
        //     if($("#sele2").val()==0){
        //         $(this).attr("selected");
        //     }
        //     if($("#sele2").val()==2){
        //         $(this).attr("selected");
        //     }
        // })
        // $("#sele2").change(function(){//方式02
        //     var a = $("#sele2").val();
        //     if(a==0){
        //         $("#sele1").val(1);
        //     }
        //     if(a==2){
        //         $("#sele1").val(2);
        //     }
        //     if($("#sele1").val()==0){
        //         $(this).attr("selected");
        //     }
        //     if($("#sele1").val()==2){
        //         $(this).attr("selected");
        //     }
        // })
    });


</script>