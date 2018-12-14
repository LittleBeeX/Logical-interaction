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
                        <?if($r1!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r1;?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("chain/input")?>"><span><i class="icon-book"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">填写信息</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="lightred">
                        <?if($r2!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r2;?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("chain/stay")?>"><span><i class="icon-print"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">待审列表</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="blue">
                        <?if($r3!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r3;?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("chain/fail")?>"><span><i class="icon-bookmark"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">审核失败</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="brown">
                        <?if($r4!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r4;?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("chain/success")?>"><span><i class="icon-exchange"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">审核成功</font></font></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-user"></i>
                        成员信息详情
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                <form class="form-horizontal form-bordered form-validate"  name="form_regist" id="form_regist">
                    <div class="control-group">
                        <label class="control-label">公司名称</label>
                        <div class="controls">
                            <input type="text" name="company_name" value="<?=$info['company_name']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">唯一标识</label>
                        <div class="controls">
                            <input type="text" name="only" value="<?=$info['only']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">姓</label>
                        <div class="controls">
                            <input type="text" name="surname" value="<?=$info['surname']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">名</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?=$info['name']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">性别</label>
                        <div class="controls">
                            <input type="text" name="sex" value="<?=$sex[$info['sex']]?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">国籍</label>
                        <div class="controls">
                            <input type="text" name="nationality" value="<?=$phone_codes[$info['nationality']]['country']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">出生日期</label>
                        <div class="controls">
                            <input type="text" name="birthtime" value="<?=date('Y-m-d',$info['birthtime'])?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">公司职称</label>
                        <div class="controls">
                            <input type="text" name="position" value="<?=$position[$info['position']]?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">钱包地址</label>
                        <div class="controls">
                            <input type="text" name="address" value="<?=$info['address']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">持有TOKEN数</label>
                        <div class="controls">
                            <input type="text" name="token_number" value="<?=$info['token_number']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">股权占比（%）</label>
                        <div class="controls">
                            <input type="text" name="token_proportion" value="<?=$info['token_proportion']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">护照编号</label>
                        <div class="controls">
                            <input type="text" name="passports" value="<?=$info['passports']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">证件认证</label>
                        <div class="controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?=$info['picture']?>"></div>
                            </div>
                        </div>
                    </div>

                <?if($info['state']>0){?>
                    <div class="control-group">
                        <label class="control-label">审核备注</label>
                        <div class="controls">
                            <textarea style="resize: none;height: 120px;width: 360px;" name="remarks" class="input-xlarge" disabled="disabled"><?=$info['remarks']?></textarea>
                        </div>
                    </div>
                <?}?>
                <?if($info['state']==2){?>
                    <div class="control-group">
                        <label class="control-label">头像</label>
                        <div class="controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?=$info['portrait']?>"></div>
                            </div>
                        </div>
                    </div>
                <?}?>
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
        })
    });
</script>