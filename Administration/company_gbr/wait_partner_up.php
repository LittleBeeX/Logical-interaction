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
<link rel="stylesheet" href="/public/plugins/datetimepicker/datetimepicker.css">
<script src="/public/plugins/datetimepicker/datetimepicker.js"></script>
<script src="/public/plugins/datetimepicker/locales/bootstrap-datetimepicker.zh-CN.js"></script>
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
                    <form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('company_gbr/wait_partner_up_ajax')?>" name="regist_partner_up" id="regist_partner_up">
                        
                        <?if(($partner['sort']==3&&$partner['type']==1)||($partner['sort']==2)||($partner['sort']==1)){?>
                        <div class="control-group">
                            <label class="control-label"><?if($partner['sort']==2&&$partner['type']==2){echo "法人";}?>姓</label>
                            <div class="controls">
                                <input type="text" name="data[surname]"  value="<?=$partner['surname']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==3&&$partner['type']==1)||($partner['sort']==2)||($partner['sort']==1)){?>
                        <div class="control-group">
                            <label class="control-label"><?if($partner['sort']==2&&$partner['type']==2){echo "法人";}?>名</label>
                            <div class="controls">
                                <input  type="text" name="data[name]" value="<?=$partner['name']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==3&&$partner['type']==2)||($partner['sort']==2&&$partner['type']==2)){?>
                        <div class="control-group">
                            <label class="control-label">企业名称</label>
                            <div class="controls">
                                <input  type="text" name="data[enterprise_name]" value="<?=$partner['enterprise_name']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <div class="control-group">
                            <label class="control-label">国家</label>
                            <div class="controls">
                                <select name="data[nation]">
                                <?foreach ($country as $nwvc => $nwbc) {?>
                                    <option  value="<?=$nwvc+1?>"<?if($partner['nation']==$nwbc){echo "selected";}?>><?=$nwbc?></option>
                                <?}?>
                                </select>
                            </div>
                        </div>
                         <?if(($partner['sort']==3&&$partner['type']==1)||($partner['sort']==2&&$partner['type']==1)||$partner['sort']==1){?>
                        <div class="control-group">
                            <label class="control-label">国籍</label>
                            <div class="controls">
                                <select name="data[nationality]">
                                <?foreach ($country_code as $nvcw => $nbcw) {?>
                                    <option value="<?=$nvcw+1?>"<?if($partner['nationality']==$nbcw['country']){echo "selected";}?>><?=$nbcw['country']?></option>
                                <?}?>
                                </select>
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==3&&$partner['type']==1)||($partner['sort']==2&&$partner['type']==1)||$partner['sort']==1){?>
                        <div class="control-group">
                            <label class="control-label">出生日期</label>
                            <div class="controls">
                                <input type="text" id="created" name="data[date_birth]" value="<?=date('Y-m-d',$partner['date_birth'])?>"  placeholder="出生日期" class="input-medium datepick valid" />
                                <span class="help-block error valid" for="publishtime"></span>
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==3&&$partner['type']==1)||($partner['sort']==2&&$partner['type']==1)||$partner['sort']==1){?>
                        <div class="control-group">
                            <label class="control-label">职业</label>
                            <div class="controls">
                                <input type="text" name="data[profession]" value="<?=$partner['profession']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <div class="control-group">
                            <label class="control-label">服务地址1</label>
                            <div class="controls">
                                <input  type="text" name="data[service_a]" value="<?=$partner['service_a']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">国家1</label>
                            <div class="controls">
                                <select name="data[nation_a]">
                                <?foreach ($country as $nvc => $nbc) {?>
                                    <option value="<?=$nvc+1?>"<?if($partner['nation_a']==$nbc){echo "selected";}?>><?=$nbc?></option>
                                <?}?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">建筑名称编号1</label>
                            <div class="controls">
                                <input  type="text" name="data[building_a]" value="<?=$partner['building_a']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">地址1</label>
                            <div class="controls">
                                <input  type="text" name="data[address_a]" value="<?=$partner['address_a']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">区域1</label>
                            <div class="controls">
                                <input  type="text" name="data[area_a]" value="<?=$partner['area_a']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">服务地址2</label>
                            <div class="controls">
                                <input  type="text" name="data[service_b]" value="<?=$partner['service_b']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">国家2</label>
                            <div class="controls">
                                <select name="data[nation_b]">
                                <?foreach ($country as $nv => $nb) {?>
                                    <option value="<?=$nv+1?>"<?if($partner['nation_b']==$nb){echo "selected";}?>><?=$nb?></option>
                                <?}?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">建筑名称编号2</label>
                            <div class="controls">
                                <input  type="text" name="data[building_b]" value="<?=$partner['building_b']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">地址2</label>
                            <div class="controls">
                                <input  type="text" name="data[address_b]" value="<?=$partner['address_b']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">区域2</label>
                            <div class="controls">
                                <input  type="text" name="data[area_b]" value="<?=$partner['area_b']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?if($partner['sort']==2){?>
                        <div class="control-group">
                            <label class="control-label">股份类型</label>
                            <div class="controls">
                                <select name="data[shares]">
                                <?foreach ($shares_type as $krr => $vrr) {?>
                                    <option value="<?=$krr+1?>"<?if($partner['shares']==$vrr){echo "selected";}?>><?=$vrr?></option>
                                <?}?>
                                </select>
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['sort']==2){?>
                        <div class="control-group">
                            <label class="control-label">股份数量</label>
                            <div id="compute" class="controls">
                                <input  id="inputA" onkeyup="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}"  type="text" name="data[number]" value="<?=$partner['number']?>" class="input-xlarge" >
                                <input style="display: none;" id="inputB" type="text" value="<?=$basic['number']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['sort']==2){?>
                        <div class="control-group">
                            <label class="control-label">已支付金额</label>
                            <div class="controls">
                                <input  type="text" name="data[has_pay]" value="<?=$partner['has_pay']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['sort']==2){?>
                        <div class="control-group">
                            <label class="control-label">未支付金额</label>
                            <div class="controls">
                                <input  type="text" name="data[not_pay]" value="<?=$partner['not_pay']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==2&&$partner['type']==1)){?>
                        <div class="control-group">
                            <label class="control-label">电话后三位</label>
                            <div class="controls">
                                <input  type="text" name="data[mobile_three]" value="<?=$partner['mobile_three']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==2&&$partner['type']==1)){?>
                        <div class="control-group">
                            <label class="control-label">母亲姓名</label>
                            <div class="controls">
                                <input  type="text" name="data[mother_name]" value="<?=$partner['mother_name']?>" class="input-xlarge" >
                            </div>
                        </div>
                         <?}?>
                         <?if(($partner['sort']==2&&$partner['type']==1)){?>
                        <div class="control-group">
                            <label class="control-label">父亲姓名</label>
                            <div class="controls">
                                <input  type="text" name="data[father_name]" value="<?=$partner['father_name']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($partner['sort']==2&&$partner['type']==1)){?>
                        <div class="control-group">
                            <label class="control-label">护照号码</label>
                            <div class="controls">
                                <input  type="text" name="data[passport_three]" value="<?=$partner['passport_three']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['sort']==3&&$partner['type']==2){?>
                        <div class="control-group">
                            <label class="control-label">法律形式</label>
                            <div class="controls">
                                <input  type="text" name="data[legal_form]"  value="<?=$partner['legal_form']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['sort']==3&&$partner['type']==2){?>
                        <div class="control-group">
                            <label class="control-label">管辖该实体的法律</label>
                            <div class="controls">
                                <input  type="text" name="data[tube_legal]" value="<?=$partner['tube_legal']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['sort']==3&&$partner['type']==2){?>
                        <div class="control-group">
                            <label class="control-label">实体的注册号码</label>
                            <div class="controls">
                                <input  type="text" name="data[registration_code]" value="<?=$partner['registration_code']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['audit_state']==1){?>
                        <div class="control-group">
                            <label class="control-label">信息审核</label>
                            <div class="controls">
                                <select name="data[audit_state]">
                                        <option value="1">暂不处理</option>
                                        <option value="2">审核通过</option>
                                        <option value="3">审核未通过</option>
                                </select>
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['audit_state']==2){?>
                        <div class="control-group">
                            <label class="control-label">信息审核</label>
                            <div class="controls">
                                <select name="data[audit_state]">
                                        <option value="2">暂不处理</option>
                                        <option value="1">信息提交</option>
                                        <option value="3">审核未通过</option>
                                </select>
                            </div>
                        </div>
                        <?}?>
                        <?if($partner['audit_state']==3){?>
                        <div class="control-group">
                            <label class="control-label">信息审核</label>
                            <div class="controls">
                                <select name="data[audit_state]">
                                        <option value="3">暂不处理</option>
                                        <option value="1">信息提交</option>
                                        <option value="2">审核通过</option>
                                </select>
                            </div>
                        </div>
                        <?}?>
                        <div class="control-group">
                            <label class="control-label">信息审核备注</label>
                            <div class="controls">
                                <input  type="text" name="data[audit_note]" value="<?=$partner['audit_note']?>" class="input-xlarge" >
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
                        <div class="control-group" style="display: none;">
                            <label class="control-label">更改时间</label>
                            <div class="controls">
                                <input type="text" name="data[change_time]" value="<?=date('Y-m-d H:m:i')?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="hidden"  name="id" value="<?=$partner['id']?>"/>
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
    });
    $("#compute input").keyup(function(){
        var a = $("#inputA").val();
        var lth = $("#inputA").val().length;
        var b = parseInt('<?=$basic['number']?>');
        var aa = parseInt('<?=$partner['number']?>');
        var lth2 = ('<?=$partner['number']?>').length;
        if(a>b){
            $("#inputA").val(b);
        }
        if(a==''){
            $("#inputA").val(aa);
        }
    });
        
});
</script>