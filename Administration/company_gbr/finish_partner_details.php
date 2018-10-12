<style type="text/css">
    .controls ul li{width: 200px;list-style: none;line-height: 50px;}
    li{
        list-style: none;
    }
    #inpua,#inpub{
        margin-bottom: 6px;
        margin-right: 6px;
    }
    .c28 .inpu{
        margin-bottom: 6px;
        margin-right: 6px;
    }
     #conp input{
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
                        <i class="icon-th-list"></i>
                        人员详情
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <form class="form-horizontal form-bordered form-validate" method="POST" >
                        <div class="control-group">
                            <label class="control-label">类别</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?foreach ($registermember_sort as $ka => $kb) {if($partner['sort']==$ka+1){
                                    echo $kb;
                                }
                                }?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">类型</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?
                                    foreach ($registermember_type as $zxc => $vcx) {
                                    if($partner['sort']==$zxc+1){
                                        echo $registermember_type[($partner['sort']-1)][($partner['type']-1)];
                                    }
                                }
                                ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?if(($partner['sort']==3&&$partner['type']==1)||($partner['sort']==2)||($partner['sort']==1)){?>
                        <div class="control-group">
                            <label class="control-label"><?if($partner['sort']==2&&$partner['type']==2){echo "法人";}?>姓</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['surname']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==3&&$partner['type']==1)||($partner['sort']==2)||($partner['sort']==1)){?>
                        <div class="control-group">
                            <label class="control-label"><?if($partner['sort']==2&&$partner['type']==2){echo "法人";}?>名</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['name']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==3&&$partner['type']==2)||($partner['sort']==2&&$partner['type']==2)){?>
                        <div class="control-group">
                            <label class="control-label">企业名称</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['enterprise_name']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        
                        <div class="control-group">
                            <label class="control-label">国家</label>
                            <div class="controls">
                                <!-- <input disabled="disabled" type="text"  value="<?
                                foreach ($country as $nwvc => $nwbc) {
                                    if($partner['nation']==$nwvc+1){
                                        echo $nwbc;
                                    }
                                    }?>" class="input-xlarge" > -->
                                <input disabled="disabled" type="text"  value="<?=$partner['nation']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?if(($partner['sort']==3&&$partner['type']==1)||($partner['sort']==2&&$partner['type']==1)||$partner['sort']==1){?>
                        <div class="control-group">
                            <label class="control-label">国籍</label>
                            <div class="controls">
                                <!-- <input disabled="disabled" type="text"  value="<?foreach ($country_code as $nvcw => $nbcw) {if($partner['nationality']==$nvcw+1){echo $nbcw['country'];}}?>" class="input-xlarge" > -->
                                <input disabled="disabled" type="text"  value="<?=$partner['nationality']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==3&&$partner['type']==1)||($partner['sort']==2&&$partner['type']==1)||$partner['sort']==1){?>
                        <div class="control-group">
                            <label class="control-label">出生日期</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=date('Y-m-d',$partner['date_birth'])?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==3&&$partner['type']==1)||($partner['sort']==2&&$partner['type']==1)||$partner['sort']==1){?>
                        <div class="control-group">
                            <label class="control-label">职业</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['profession']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <div class="control-group">
                            <label class="control-label">服务地址1</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['service_a']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">国家1</label>
                            <div class="controls">
                                <!-- <input disabled="disabled" type="text"  value="<?
                                foreach ($country as $nwvca => $nwbca) {
                                    if($partner['nation_a']==$nwvca+1){
                                        echo $nwbca;
                                    }
                                    }?>" class="input-xlarge" > -->
                                <input disabled="disabled" type="text"  value="<?=$partner['nation_a']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">建筑名称编号1</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['building_a']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">地址1</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['address_a']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">区域1</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['area_a']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">服务地址2</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['service_b']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">国家2</label>
                            <div class="controls">
                                <!-- <input disabled="disabled" type="text"  value="<?
                                foreach ($country as $nwvcx => $nwbcx) {
                                    if($partner['nation_b']==$nwvcx+1){
                                        echo $nwbcx;
                                    }
                                    }?>" class="input-xlarge" > -->
                                <input disabled="disabled" type="text"  value="<?=$partner['nation_b']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">建筑名称编号2</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['building_b']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">地址2</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['address_b']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">区域2</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['area_b']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?if($partner['sort']==2){?>
                        <div class="control-group">
                            <label class="control-label">股份类型</label>
                            <div class="controls">
                                <!-- <input disabled="disabled" type="text"  value="<?foreach ($shares_type as $keyr => $valuer) {
                                    if($partner['shares']==$keyr+1){
                                        echo $valuer;
                                    }
                                }?>" class="input-xlarge" > -->
                                <input disabled="disabled" type="text"  value="<?=$partner['shares']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['sort']==2){?>
                        <div class="control-group">
                            <label class="control-label">股份数量</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['number']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['sort']==2){?>
                        <div class="control-group">
                            <label class="control-label">已支付金额</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['has_pay']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['sort']==2){?>
                        <div class="control-group">
                            <label class="control-label">未支付金额</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['not_pay']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==2&&$partner['type']==1)){?>
                        <div class="control-group">
                            <label class="control-label">电话后三位</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['mobile_three']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==2&&$partner['type']==1)){?>
                        <div class="control-group">
                            <label class="control-label">母亲姓名</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['mother_name']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==2&&$partner['type']==1)){?>
                        <div class="control-group">
                            <label class="control-label">父亲姓名</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['father_name']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==2&&$partner['type']==1)){?>
                        <div class="control-group">
                            <label class="control-label">护照号码</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['passport_three']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['sort']==3&&$partner['type']==2){?>
                        <div class="control-group">
                            <label class="control-label">法律形式</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['legal_form']?>" class="input-xlarge" >
                            </div>
                        </div>
                         <?}?>
                         <?if($partner['sort']==3&&$partner['type']==2){?>
                        <div class="control-group">
                            <label class="control-label">管辖该实体的法律</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['tube_legal']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['sort']==3&&$partner['type']==2){?>
                        <div class="control-group">
                            <label class="control-label">实体的注册号码</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['registration_code']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <div class="control-group">
                            <label class="control-label">信息审核状态</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?if($partner['audit_state']==1){echo "信息已提交待审核";}else if($partner['audit_state']==2){echo "信息审核通过";}else if($partner['audit_state']==3){echo "信息审核未通过";}?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">信息审核备注</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=$partner['audit_note']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?if($partner['sort']==3&&$partner['type']==1){?>
                        <div class="control-group">
                            <label class="control-label">披露豁免</label>
                            <div class="controls">
                                <ul class="service-list c66 fz22 plr30 pt40 mt10" >
                                    <li>
                                        <label class="c28 ub ub-ac">
                                            <input id="inpua"  type="radio" name="data[disclosure]" value="1" <?if($partner['disclosure']==1){echo "checked";}?> class="form-checkbox mr10 inpu"/> 2006年公司法第790ZF条
                                        </label>
                                    </li>
                                    <li>
                                        <label class="c28 ub ub-ac">
                                            <input id="inpub" type="radio" name="data[disclosure]" value="2" <?if($partner['disclosure']==2){echo "checked";}?> class="form-checkbox mr10 inpu" />
                                            2006年公司法第790ZG条
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['sort']==3&&$partner['type']==1){?>
                        <div class="control-group">
                            <label class="control-label">控制的性质</label>
                            <div class="controls" id="conp">
                               <?$mm = explode(",", $partner['nature_control']);foreach ($conp as $k1 => $v1) {?>
                                   <p style="display: block;width: 100%;"><?=$v1['name']?></p>
                                    <ul class="service-list c66 fz22 plr30 pt40 mt10" >
                                    <?foreach ($v1['list'] as $k2 => $v2) {?>
                                        <li>
                                             <label class="c28 ub ub-ac" style="display: block; width: 500px;">
                                                <input type="radio" name="nature_control[<?=$k1?>]" value="<?=$k2?>" 
                                                <?foreach ($mm as $k3 => $v3) {
                                                    if($k3==$k1){
                                                        if($v3==$k2){
                                                            echo 'checked="checked"';
                                                        }
                                                    }
                                                }?>
                                                class="form-checkbox itemtop mr10"/>
                                                <span class="c66 pl20 fz26" style="width:94%"><?=$v2?></span>
                                            </label>
                                        </li>
                                        
                                    <?}?>
                                    </ul>
                                <?}?>
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['sort']==3&&$partner['type']==2){?>
                        <div class="control-group">
                            <label class="control-label">控制的性质</label>
                            <div class="controls" id="conp">
                                <?$mm = explode(",", $partner['nature_control']);foreach ($conc as $k1 => $v1) {?>
                                   <p style="display: block;width: 100%;"><?=$v1['name']?></p>
                                    <ul class="service-list c66 fz22 plr30 pt40 mt10" >
                                    <?foreach ($v1['list'] as $k2 => $v2) {?>
                                        <li>
                                             <label class="c28 ub ub-ac" style="display: block; width: 500px;">
                                                <input type="radio" name="nature_control[<?=$k1?>]" value="<?=$k2?>" 
                                                <?foreach ($mm as $k3 => $v3) {
                                                    if($k3==$k1){
                                                        if($v3==$k2){
                                                            echo 'checked="checked"';
                                                        }
                                                    }
                                                }?>
                                                class="form-checkbox itemtop mr10"/>
                                                <span class="c66 pl20 fz26" style="width:94%"><?=$v2?></span>
                                            </label>
                                        </li>
                                        
                                    <?}?>
                                    </ul>
                                <?}?>
                            </div>
                        </div>
                        <?}?>
                        <div class="control-group">
                            <label class="control-label">状态</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?foreach ($registerpeple_state as $xf => $bh) {if($partner['state']==$xf+1){echo $bh;}}?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">创建时间</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=date('Y-m-d',$partner['create_time'])?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">更改时间</label>
                            <div class="controls">
                                <input disabled="disabled" type="text"  value="<?=date('Y-m-d',$partner['change_time'])?>" class="input-xlarge" >
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