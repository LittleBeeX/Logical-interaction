<style type="text/css">
    li{
        list-style: none;
    }
    .controls .inputa{
        margin-bottom: 6px;
        margin-right: 6px;
    }
</style>
<link rel="stylesheet" href="/public/plugins/datetimepicker/datetimepicker.css">
<script src="/public/plugins/datetimepicker/datetimepicker.js"></script>
<script src="/public/plugins/datetimepicker/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<script src="/public/assets/sysadmin/js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
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
                        支付订单修改
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('user/user_porder_up_ajax')?>" name="form_regist" id="form_regist" enctype="multipart/form-data" >
                        <div class="control-group">
                            <label class="control-label">服务项目</label>
                            <div class="controls">
                                <ul class="service-list c66 fz22 plr30 pt40 mt10">
                                <?foreach ($service as $key => $value) {?>
                                <?$ccc = explode(",",$order['project']);foreach ($ccc as $k3 => $v3)if($v3==$value['id']){?>
                                    <li>
                                        <label class="c28 ub ub-ac" >
                                            <input  name="data[project][]" type="checkbox" value="<?=$value['id']?>" class="form-checkbox mr10 inputa"/>
                                            <?=$value['project_cn']?>&nbsp;&nbsp;￥<?=$value['money_rmb']?>
                                        </label>
                                    </li>
                               <?}}?>
                                </ul>
                            </div>
                        </div>
                        <div class="control-group"<?if(count($order22)>1){echo 'style="display:none;"';}?>>
                            <label class="control-label">支付币种</label>
                            <div class="controls">
                               <select id="sele1" <?if(count($order22)==1){echo 'name="data[currency]"';}?>>
                                    <option value="1">人民币</option>
                                    <option value="2">LITTLE</option>
                               </select>
                            </div>
                        </div>
                        
                        <div class="control-group"<?if(count($order22)>1){echo 'style="display:none;"';}?>>
                            <label class="control-label">支付方式</label>
                            <div class="controls">
                               <select id="sele2" <?if(count($order22)==1){echo 'name="data[way]"';}?>>
                                    <option value="0">银行卡转账</option>
                                    <option value="2">数字钱包</option>
                               </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">支付状态修改</label>
                            <div class="controls">
                               <select name="data[state]" class="input-xlarge"><!--  -->
                                    <?foreach ($orderlist_state as $kc => $vc) {?>
                                     <option value="<?echo $kc+1;?>"<?if($order['state']==($kc+1)){echo "selected";}?>>
                                     <?=$vc?>
                                     </option>
                                <?}?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group" style="display: none;">
                            <label class="control-label">更改时间</label>
                            <div class="controls">
                                <input  type="text" name="data[change_time]"  value="<?=date('Y-m-d H:m:i')?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="hidden" name="id" value="<?=$order['id']?>" />
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
        })
       
        $("#sele1").change(function(){//币种02
            var a = $("#sele1").val();
            if(a==1){
                $("#sele2").val(0);
            }
            if(a==2){
                $("#sele2").val(2);
            }
            if($("#sele2").val()==0){
                $(this).attr("selected");
            }
            if($("#sele2").val()==2){
                $(this).attr("selected");
            }
        })
        $("#sele2").change(function(){//方式02
            var a = $("#sele2").val();
            if(a==0){
                $("#sele1").val(1);
            }
            if(a==2){
                $("#sele1").val(2);
            }
            if($("#sele1").val()==0){
                $(this).attr("selected");
            }
            if($("#sele1").val()==2){
                $(this).attr("selected");
            }
        })
    });
    
</script>
