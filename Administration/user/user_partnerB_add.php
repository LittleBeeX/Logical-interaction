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
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-th-list"></i>
                        人员添加
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('user/user_partnerB_add_ajax')?>?oid=<?=$oid?>&type=<?=$type?>&sort=<?=$sort?>" name="regist_partner_up" id="regist_partner_up">
                        <?if(($sort==3&&$type==1)||($sort==2)||($sort==1)){?>
                        <div class="control-group">
                            <label class="control-label"><?if($sort==2&&$type==2){echo "法人";}?>姓</label>
                            <div class="controls">
                                <input type="text" name="data[surname]"  value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($sort==3&&$type==1)||($sort==2)||($sort==1)){?>
                        <div class="control-group">
                            <label class="control-label"><?if($sort==2&&$type==2){echo "法人";}?>名</label>
                            <div class="controls">
                                <input  type="text" name="data[name]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($sort==3&&$type==2)||($sort==2&&$type==2)){?>
                        <div class="control-group">
                            <label class="control-label">企业名称</label>
                            <div class="controls">
                                <input  type="text" name="data[enterprise_name]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <div class="control-group">
                            <label class="control-label">国家</label>
                            <div class="controls">
                                <select name="data[nation]">
                                <?foreach ($country as $nwvc => $nwbc) {?>
                                    <option  value="<?=$nwvc+1?>"><?=$nwbc?></option>
                                <?}?>
                                </select>
                            </div>
                        </div>
                         <?if(($sort==3&&$type==1)||($sort==2&&$type==1)||$sort==1){?>
                        <div class="control-group">
                            <label class="control-label">国籍</label>
                            <div class="controls">
                                <select name="data[nationality]">
                                <?foreach ($country_code as $nvcw => $nbcw) {?>
                                    <option value="<?=$nvcw+1?>"><?=$nbcw['country']?></option>
                                <?}?>
                                </select>
                            </div>
                        </div>
                         <?}?>
                        <?if(($sort==3&&$type==1)||($sort==2&&$type==1)||$sort==1){?>
                        <div class="control-group">
                            <label class="control-label">出生日期</label>
                            <div class="controls">
                                <input type="text" id="created" name="data[date_birth]" value=""  placeholder="出生日期" class="input-medium datepick valid" />
                                <span class="help-block error valid" for="publishtime"></span>
                            </div>
                        </div>
                        <?}?>
                        <?if(($sort==3&&$type==1)||($sort==2&&$type==1)||$sort==1){?>
                        <div class="control-group">
                            <label class="control-label">职业</label>
                            <div class="controls">
                                <input type="text" name="data[profession]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <div class="control-group">
                            <label class="control-label">服务地址1</label>
                            <div class="controls">
                                <input  type="text" name="data[service_a]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">国家1</label>
                            <div class="controls">
                                <select name="data[nation_a]">
                                <?foreach ($country as $nvc => $nbc) {?>
                                    <option value="<?=$nvc+1?>"><?=$nbc?></option>
                                <?}?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">建筑名称编号1</label>
                            <div class="controls">
                                <input  type="text" name="data[building_a]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">地址1</label>
                            <div class="controls">
                                <input  type="text" name="data[address_a]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">区域1</label>
                            <div class="controls">
                                <input  type="text" name="data[area_a]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">服务地址2</label>
                            <div class="controls">
                                <input  type="text" name="data[service_b]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">国家2</label>
                            <div class="controls">
                                <select name="data[nation_b]">
                                <?foreach ($country as $nv => $nb) {?>
                                    <option value="<?=$nv+1?>"><?=$nb?></option>
                                <?}?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">建筑名称编号2</label>
                            <div class="controls">
                                <input  type="text" name="data[building_b]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">地址2</label>
                            <div class="controls">
                                <input  type="text" name="data[address_b]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">区域2</label>
                            <div class="controls">
                                <input  type="text" name="data[area_b]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?if($sort==2){?>
                        <div class="control-group">
                            <label class="control-label">股份类型</label>
                            <div class="controls">
                                <select name="data[shares]">
                                <?foreach ($shares_type as $krr => $vrr) {?>
                                    <option value="<?=$krr+1?>"><?=$vrr?></option>
                                <?}?>
                                </select>
                            </div>
                        </div>
                        <?}?>
                        <?if($sort==2){?>
                        <div class="control-group">
                            <label class="control-label">股份数量</label>
                            <div id="compute" class="controls">
                                <input  id="inputA" onkeyup="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}"  type="text" name="data[number]" value="" class="input-xlarge" >
                                <input style="display: none;" id="inputB" type="text" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($sort==2){?>
                        <div class="control-group">
                            <label class="control-label">已支付金额</label>
                            <div class="controls">
                                <input  type="text" name="data[has_pay]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($sort==2){?>
                        <div class="control-group">
                            <label class="control-label">未支付金额</label>
                            <div class="controls">
                                <input  type="text" name="data[not_pay]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($sort==2&&$type==1)){?>
                        <div class="control-group">
                            <label class="control-label">电话后三位</label>
                            <div class="controls">
                                <input  type="text" name="data[mobile_three]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($sort==2&&$type==1)){?>
                        <div class="control-group">
                            <label class="control-label">母亲姓名</label>
                            <div class="controls">
                                <input  type="text" name="data[mother_name]" value="" class="input-xlarge" >
                            </div>
                        </div>
                         <?}?>
                         <?if(($sort==2&&$type==1)){?>
                        <div class="control-group">
                            <label class="control-label">父亲姓名</label>
                            <div class="controls">
                                <input  type="text" name="data[father_name]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if(($sort==2&&$type==1)){?>
                        <div class="control-group">
                            <label class="control-label">护照号码</label>
                            <div class="controls">
                                <input  type="text" name="data[passport_three]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($sort==3&&$type==2){?>
                        <div class="control-group">
                            <label class="control-label">法律形式</label>
                            <div class="controls">
                                <input  type="text" name="data[legal_form]"  value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($sort==3&&$type==2){?>
                        <div class="control-group">
                            <label class="control-label">管辖该实体的法律</label>
                            <div class="controls">
                                <input  type="text" name="data[tube_legal]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        <?if($sort==3&&$type==2){?>
                        <div class="control-group">
                            <label class="control-label">实体的注册号码</label>
                            <div class="controls">
                                <input  type="text" name="data[registration_code]" value="" class="input-xlarge" >
                            </div>
                        </div>
                        <?}?>
                        
                        <?if($sort==3&&$type==1){?>
                        <div class="control-group">
                            <label class="control-label">披露豁免</label>
                            <div class="controls">
                                <ul class="service-list c66 fz22 plr30 pt40 mt10" >
                                    <li>
                                        <label class="c28 ub ub-ac">
                                            <input id="inpua"  type="radio" name="data[disclosure]" value="1"  class="form-checkbox mr10 inpu"/> 2006年公司法第790ZF条
                                        </label>
                                    </li>
                                    <li>
                                        <label class="c28 ub ub-ac">
                                            <input id="inpub" type="radio" name="data[disclosure]" value="2"  class="form-checkbox mr10 inpu" />
                                            2006年公司法第790ZG条
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?}?>
                        <?if($sort==3&&$type==1){?>
                        <div class="control-group">
                            <label class="control-label">控制的性质</label>
                            <div class="controls" id="conp">
                               <?foreach ($conp as $k1 => $v1) {?>
                                   <p style="display: block;width: 100%;"><?=$v1['name']?></p>
                                    <ul class="service-list c66 fz22 plr30 pt40 mt10" >
                                    <?foreach ($v1['list'] as $k2 => $v2) {?>
                                        <li>
                                             <label class="c28 ub ub-ac" style="display: block; width: 500px;">
                                                <input type="radio" name="nature_control[<?=$k1?>]" value="<?=$k2?>" class="form-checkbox itemtop mr10"/>
                                                <span class="c66 pl20 fz26" style="width:94%"><?=$v2?></span>
                                            </label>
                                        </li>
                                    <?}?>
                                    </ul>
                                <?}?>
                            </div>
                        </div>
                        <?}?>
                        <?if($sort==3&&$type==2){?>
                        <div class="control-group">
                            <label class="control-label">控制的性质</label>
                            <div class="controls" id="conp">
                                <?foreach ($conc as $k1 => $v1) {?>
                                   <p style="display: block;width: 100%;"><?=$v1['name']?></p>
                                    <ul class="service-list c66 fz22 plr30 pt40 mt10" >
                                    <?foreach ($v1['list'] as $k2 => $v2) {?>
                                        <li>
                                             <label class="c28 ub ub-ac" style="display: block; width: 500px;">
                                                <input type="radio" name="nature_control[<?=$k1?>]" value="<?=$k2?>"class="form-checkbox itemtop mr10"/>
                                                <span class="c66 pl20 fz26" style="width:94%"><?=$v2?></span>
                                            </label>
                                        </li>
                                    <?}?>
                                    </ul>
                                <?}?>
                            </div>
                        </div>
                        <?}?>
                        
                        <div class="form-actions">
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
});
</script>