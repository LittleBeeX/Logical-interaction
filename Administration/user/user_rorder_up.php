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
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-th-list"></i>
                        注册订单修改
                    </h3>
                </div>
                <div class="box-content nopadding">
                   <form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('user/user_rorder_up_ajax')?>" name="form_user" id="form_user">
                    
                    <div class="control-group">
                        <label class="control-label">基金会名称</label>
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
                                <?
                                    $num = $registlist['state'];
                                    $numa = $num+1;
                                    $numb = $num-1;
                                ?>
                                <option id="moren" value="<?=$numb?>"><?if($numb==1){echo "退回到注册申请";}else if($numb==2){echo "退回到订单审核";}else if($numb==3){echo "退回到文件签署";}else if($numb==4){echo "退回到注册申报";}else if($numb==5){echo "退回到注册审查";}?></option>
                                <option value="<?=$num?>">暂不操作</option>
                                <option id="morenb" value="<?=$numa?>"><?if($numa==2){echo "审核通过进入到订单审核";}else if($numa==3){echo "审核通过进入到文件签署";}else if($numa==4){echo "审核通过进入到注册申报";}else if($numa==5){echo "审核通过进入到注册审查";}else if($numa==6){echo "审核通过进入到注册完成";}?></option>
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
    $(function(){
        $('#frist').click(function(){
            window.history.back(-1);
        })
        if(($('#moren').val())<1){
                $('#moren').remove();
             }
        if(($('#morenb').val())>6){
             $('#morenb').remove();
        }
        
    })
</script>
