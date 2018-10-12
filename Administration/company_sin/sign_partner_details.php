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
                            <a href="<?=$this->url("company_sin/regist")?>"><span><i class="icon-book"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申请</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="lightred">
                        <?if((count($r2))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r2);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_sin/wait")?>"><span><i class="icon-print"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单审核</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="blue">
                        <?if((count($r3))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r3);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_sin/sign")?>"><span><i class="icon-bookmark"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文件签署</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="brown">
                        <?if((count($r4))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r4);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_sin/report")?>"><span><i class="icon-exchange"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申报</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="satgreen">
                        <?if((count($r5))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r5);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_sin/check")?>"><span><i class="icon-globe"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册审查</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="orange">
                        <?if((count($r6))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r6);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_sin/finish")?>"><span><i class="icon-leaf"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册完成</font></font></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-th-list"></i>
                        股东董事详情
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <form class="form-horizontal form-bordered form-validate" method="POST" >
                        <div class="control-group">
                            <label class="control-label">类型</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[type]"  value="<?
                           foreach ($registerpeple_type as $key => $value) {
                               if($peoplelist['type']==($key+1)){
                                    echo $value;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">名字</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[state]"  value="<?=$peoplelist['name']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">性别</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[sex]"  value="<?if($peoplelist['sex']==1){echo "男";}else if($peoplelist['sex']==2){echo "女";}?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">邮箱</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[email]"  value="<?=$peoplelist['email']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系电话</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[mobile]"  value="<?=$peoplelist['mobile']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">微信号</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[wechat]"  value="<?=$peoplelist['wechat']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">出生日期</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[date_birth]"  value="<?=date('Y-m-d',$peoplelist['date_birth'])?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">出生地点</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[place_birth]"  value="<?=$peoplelist['place_birth']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">身份证正面</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                    <div class="fileupload-new thumbnail" style="width: 274px; height: 150px;"><img src="<?=$peoplelist['card_a']?>"></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">身份证背面</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                    <div class="fileupload-new thumbnail" style="width: 274px; height: 150px;"><img src="<?=$peoplelist['card_b']?>"></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">图片审核状态</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[audit_img_state]"  value="<?
                           foreach ($registerpeple_auditimgstate as $ke => $valu) {
                               if($peoplelist['audit_img_state']==($ke+1)){
                                    echo $valu;
                               }
                           }
                           ?>" class="input-xlarge" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">图片备注</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[audit_img_note]"  value="<?=$peoplelist['audit_img_note']?>" class="input-xlarge" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">国籍</label>
                            <div class="controls">
                                <!-- <input disabled="disabled" type="text" name="data[nationality]"  value="<?
                           foreach ($country_code as $k => $v) {
                               if($peoplelist['nationality']==($k+1)){
                                    print_r($v['country']);
                               }
                           }
                           ?>" class="input-xlarge" /> -->
                           <input disabled="disabled" type="text" name="data[nationality]"  value="<?=$peoplelist['nationality']?>" class="input-xlarge" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">国家码</label>
                            <div class="controls">
                              <!--   <input disabled="disabled" type="text" name="data[country_code]"  value="<?
                           foreach ($country_code as $kq => $vq) {
                               if($peoplelist['country_code']==($kq+1)){
                                    print_r($vq['country']);
                                    print_r($vq['ccode']);
                               }
                           }
                           ?>" class="input-xlarge" /> -->
                           <input disabled="disabled" type="text" name="data[country_code]"  value="<?=$peoplelist['country_code']?>" class="input-xlarge" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照类型</label>
                            <div class="controls">
                              <!--   <input disabled="disabled" type="text" name="data[passport_type]"  value="<?
                           foreach ($country_passporttype as $keyx => $valuex) {
                               if($peoplelist['passport_type']==($keyx+1)){
                                    echo $valuex;
                               }
                           }
                           ?>" class="input-xlarge" > -->
                           <input disabled="disabled" type="text" name="data[passport_type]"  value="<?=$peoplelist['passport_type']?>" class="input-xlarge" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照号</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[passport_no]"  value="<?=$peoplelist['passport_no']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照签发地点</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[place_issue]"  value="<?=$peoplelist['place_issue']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照照片</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                    <div class="fileupload-new thumbnail" style="width: 274px; height: 150px;"><img src="<?=$peoplelist['passport']?>"></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">现居住地址</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[address]"  value="<?=$peoplelist['address']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">签发日期</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[date_issue]"  value="<?=date('Y-m-d',$peoplelist['date_issue'])?>" class="input-xlarge" >
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">信息审核状态</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[audit_state]"  value="<?
                           foreach ($registerpeple_auditstate as $kww => $sss) {
                               if($peoplelist['audit_state']==($kww+1)){
                                    echo $sss;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">信息备注</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[audit_note]"  value="<?=$peoplelist['audit_note']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">状态</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[state]"  value="<?
                           foreach ($registerpeple_state as $keyaaa => $valueaa) {
                               if($peoplelist['state']==($keyaaa+1)){
                                    echo $valueaa;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">创建时间</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[create_time]"  value="<?=date('Y-m-d',$peoplelist['create_time'])?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">更改时间</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[change_time]"  value="<?=date('Y-m-d',$peoplelist['change_time'])?>" class="input-xlarge" >
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