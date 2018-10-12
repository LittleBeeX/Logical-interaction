<style type="text/css">
    li{
        list-style: none;
    }
    #inputa,#inputb,#inputc,#inputd,#inpute,#inputf{
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
                        <i class="icon-user"></i>
                        查看服务项目详情
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                <form class="form-horizontal form-bordered form-validate"  name="form_regist" id="form_regist">
                    <div class="control-group">
                        <label class="control-label">类型</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?foreach ($registerorder_type as $k1 => $v1) {
                                if($sin_c['type']==$k1+1){
                                    echo $v1;
                                }
                            }?>" class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">中文描述</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?=$sin_c['project_cn']?>" class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">英文描述</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?=$sin_c['project_en']?>" class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label">韩文描述</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?=$sin_c['project_kr']?>" class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">具体要求描述(中文)</label>
                        <div class="controls">
                            <textarea style="resize: none;height: 120px;width: 360px;" name="data[msg_cn]" class="input-xlarge" disabled="disabled"><?=$sin_c['msg_cn']?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">具体要求描述(英文)</label>
                        <div class="controls">
                            <textarea style="resize: none;height: 120px;width: 360px;" name="data[msg_en]" class="input-xlarge" disabled="disabled"><?=$sin_c['msg_en']?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">具体要求描述(韩文)</label>
                        <div class="controls">
                            <textarea style="resize: none;height: 120px;width: 360px;" name="data[msg_kr]"  class="input-xlarge" disabled="disabled"><?=$sin_c['msg_kr']?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">金额（人民币）</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?=$sin_c['money_rmb']?>" class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">单位(中文)</label>
                        <div class="controls">
                            <input type="text" name="data[unit_cn]" value="<?=$sin_c['unit_cn']?>" class="input-xlarge span2" disabled="disabled" /> 如：单位（年，一次性，间）
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">单位(英文)</label>
                        <div class="controls">
                            <input type="text" name="data[unit_en]" value="<?=$sin_c['unit_en']?>" class="input-xlarge span2" disabled="disabled" /> 如：单位（year，one-time，room）
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">单位(韩文)</label>
                        <div class="controls">
                            <input type="text" name="data[unit_kr]" value="<?=$sin_c['unit_kr']?>" class="input-xlarge span2" disabled="disabled" /> 如：单位（년，일시불，칸）
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">是否必选</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?if($sin_c['yn_choice']==1){echo "是";}else if($sin_c['yn_choice']==2){echo "否";}?>" class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">所属国家</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?foreach ($registerorder_country as $k2 => $v2) {
                                if($sin_c['note']==$k2+1){
                                    echo $v2;
                                }
                            }?>" class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">状态</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?foreach ($registerpeple_state as $k3 => $v3) {
                                if($sin_c['state']==$k3+1){
                                    echo $v3;
                                }
                            }?>" class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">创建时间</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?=date('Y-m-d H:m:i',$sin_c['create_time'])?>" class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">修改时间</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?=date('Y-m-d H:m:i',$sin_c['change_time'])?>" class="input-xlarge" data-rule-required="true" disabled="disabled"/>
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#frist').click(function(){
            window.history.back(-1);
            //window.location.href="/index.php/sysadmin/system/admin";
        })
    });
</script>