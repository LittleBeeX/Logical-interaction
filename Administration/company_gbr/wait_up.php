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
                            <a href="<?=$this->url("company_gbr/regist")?>"><span><i class="icon-book"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申请</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="lightred">
                        <?if((count($r2))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r2);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_gbr/wait")?>"><span><i class="icon-print"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单审核</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="satgreen">
                        <?if((count($r6))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r6);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_gbr/finish")?>"><span><i class="icon-leaf"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册完成</font></font></span></a>
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
                <form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('company_gbr/wait_up_ajax')?>" name="form_bill" id="form_bill">
                    <div class="control-group">
                        <label class="control-label">公司名称</label>
                        <div class="controls">
                            <?$a = explode("@",$registlist['name']);?>
                            <input type="text" name="data[name]" value="<?echo $a[0];?>"  class="input-xlarge"  />&nbsp;&nbsp;&nbsp;&nbsp;选择公司名称后缀&nbsp;&nbsp;&nbsp;&nbsp;
                            <select name="data[name2]" class="input-xlarge">
                                <?foreach ($company_lastname as $wr2 => $qr2) {?>
                                     <option value="<?echo $qr2;?>"<?if($a[1]==$company_lastname[$wr2]){echo "selected";}?>>
                                     <?=$qr2?>
                                     </option>
                                <?}?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">注册地区</label>
                        <div class="controls">
                            <select name="data[region]" class="input-xlarge">
                                <?foreach ($country as $wr => $qr) {?>
                                     <option value="<?echo $wr+1;?>"<?if($registlist['region']==($qr)){echo "selected";}?>>
                                     <?=$qr?>
                                     </option>
                                <?}?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">建筑名称/编号</label>
                        <div class="controls">
                            <input type="text" name="data[register_address1]" value="<?=$registlist['register_address1']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">注册地址</label>
                        <div class="controls">
                            <input type="text" name="data[register_address2]" value="<?=$registlist['register_address2']?>"  class="input-xlarge"  =/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">行政区域</label>
                        <div class="controls">
                            <input type="text" name="data[register_address3]" value="<?=$registlist['register_address3']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">所在国家</label>
                        <div class="controls">
                            <select name="data[register_address4]" class="input-xlarge">
                                <?foreach ($country as $wrc => $qrc) {?>
                                     <option value="<?echo $wrc+1;?>"<?if($registlist['register_address4']==($qrc)){echo "selected";}?>>
                                     <?=$qrc?>
                                     </option>
                                <?}?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人姓名</label>
                        <div class="controls">
                            <input type="text" name="data[contact_name]" value="<?=$registlist['contact_name']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人邮箱</label>
                        <div class="controls">
                            <input type="text" name="data[contact_email]" value="<?=$registlist['contact_email']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人电话</label>
                        <div class="controls">
                            <input type="text" name="data[contact_mobile]" value="<?=$registlist['contact_mobile']?>"  class="input-xlarge" />
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
                    <div class="control-group">
                        <label class="control-label">邮寄地址</label>
                        <div class="controls">
                            <input type="text" name="data[address]" value="<?=$registlist['address']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">货币类型</label>
                        <div class="controls">
                            <select name="data[currency_type]" class="input-xlarge">
                            <?foreach ($registermember_currencytype as $fg => $gh) {?>
                                <option value="<?=$fg+1?>" <?if($rebasic['currency_type']==$gh){echo "selected";}?>><?=$gh?></option>
                            <?}?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">股份类型</label>
                        <div class="controls">
                           <select name="data[shares_type]" class="input-xlarge"><!--  -->
                                <?foreach ($shares_type as $agx => $bgx) {?>
                                     <option value="<?echo $agx+1;?>"<?if($rebasic['shares_type']==($bgx)){echo "selected";}?>>
                                     <?=$bgx?>
                                     </option>
                                <?}?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">股份面值</label>
                        <div class="controls">
                            <input type="text" name="data[facevalue]" value="<?=$rebasic['facevalue']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">股份数量</label>
                        <div class="controls">
                            <input type="text" name="data[number]" value="<?=$rebasic['number']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">未缴资本</label>
                        <div class="controls">
                            <input type="text" name="data[unpaid]" value="<?=$rebasic['unpaid']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">规定详情</label>
                        <div class="controls">
                            <input type="text" name="data[details]" value="<?=$rebasic['details']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">是否有PCS</label>
                        <div class="controls">
                            <select name="data[psc]" class="input-xlarge">
                                <option value="1" <?if($rebasic['psc']==1){echo "selected";}?>>是</option>
                                <option value="2" <?if($rebasic['psc']==2){echo "selected";}?>>否</option>
                            </select>

                        </div>
                    </div>
                   <div class="control-group">
                        <label class="control-label">董事登记册</label>
                        <div class="controls">
                           <select name="data[register_directors]" class="input-xlarge"><!--  -->
                                <?foreach ($registerbasic_address as $agx => $bgx) {?>
                                     <option value="<?=$bgx?>"<?if($rebasic['register_directors']==($bgx)){echo "selected";}?>>
                                     <?=$bgx?>
                                     </option>
                                <?}?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">董事住址登记</label>
                        <div class="controls">
                           <select name="data[register_address]" class="input-xlarge"><!--  -->
                                <?foreach ($registerbasic_address as $agx1 => $bgx1) {?>
                                     <option value="<?=$bgx1?>"<?if($rebasic['register_address']==($bgx1)){echo "selected";}?>>
                                     <?=$bgx1?>
                                     </option>
                                <?}?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">申请方式</label>
                        <div class="controls">
                            <select name="data[apply_way]" class="input-xlarge">
                            <?foreach ($registermember_applyway as $ku => $li) {?>
                                <option value="<?=$ku+1?>" <?if($rebasic['apply_way']==$li){echo "selected";}?>><?=$li?></option>
                            <?}?>
                            </select>
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
                                <option value="1" <?if($registlist['state']==1){echo "selected";}?>>退回到注册申请</option>
                                <option value="2" <?if($registlist['state']==2){echo "selected";}?>>暂不处理</option>
                                <option value="6" <?if($registlist['state']==6){echo "selected";}?>>审核通过进入到注册完成</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group" style="display: none;">
                        <label class="control-label">更改时间</label>
                        <div class="controls">
                            <input type="text" name="data[change_time]" value="<?=date('Y-m-d H:m:i')?>"  class="input-xlarge"  disabled="disabled"/>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <input type="hidden"  name="id" value="<?=$registlist['id']?>"/>
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
            //window.location.href="/index.php/sysadmin/system/admin";
        })
    
    });
    // $(function(){
    //    $("#scope_business").change(function() {
    //         var key = $(this).val();
    //         $.ajax({
    //             url:'<?= $this->url("company_gbr/wait_up_ajaxA")?>',
    //             type:'post',
    //             data:{key:key},
    //             dataType:'json',
    //             success:function(e){
    //                 $("#scope_business2").html(e.info);
    //             } 
    //         })
    //     });
    // })


</script>