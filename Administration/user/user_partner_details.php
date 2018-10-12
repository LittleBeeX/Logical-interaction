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
                           foreach ($registerpeple_type as $a => $b) {
                               if($people['type']==($a+1)){
                                    echo $b;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">名字</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[state]"  value="<?=$people['name']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">性别</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[sex]"  value="<?if($people['sex']==1){echo "男";}else if($people['sex']==2){echo "女";}?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">邮箱</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[email]"  value="<?=$people['email']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系电话</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[mobile]"  value="<?=$people['mobile']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">出生日期</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[date_birth]"  value="<?=date('Y-m-d',$people['date_birth'])?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">出生地点</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[place_birth]"  value="<?=$people['place_birth']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">身份证正面</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                    <div class="fileupload-new thumbnail" style="width: 274px; height: 150px;"><img src="<?=$people['card_a']?>"></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">身份证背面</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                    <div class="fileupload-new thumbnail" style="width: 274px; height: 150px;"><img src="<?=$people['card_b']?>"></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">图片审核状态</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[audit_img_state]"  value="<?
                           foreach ($registerpeple_auditimgstate as $aa => $bb) {
                               if($people['audit_img_state']==($aa+1)){
                                    echo $bb;
                               }
                           }
                           ?>" class="input-xlarge" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">图片备注</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[audit_img_note]"  value="<?=$people['audit_img_note']?>" class="input-xlarge" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">国籍</label>
                            <div class="controls">
                                <!-- <input disabled="disabled" type="text" name="data[nationality]"  value="<?
                           foreach ($country_code as $aaa => $bbb) {
                               if($people['nationality']==($aaa+1)){
                                    print_r($bbb['country']);
                               }
                           }
                           ?>" class="input-xlarge" /> -->
                           <input disabled="disabled" type="text" name="data[nationality]"  value="<?=$people['nationality']?>" class="input-xlarge" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">国家码</label>
                            <div class="controls">
                            <!--     <input disabled="disabled" type="text" name="data[country_code]"  value="<?
                           foreach ($country_code as $aaaa => $bbbb) {
                               if($people['country_code']==($aaaa+1)){
                                    print_r($bbbb['ccode']);
                               }
                           }
                           ?>" class="input-xlarge" /> -->
                           <input disabled="disabled" type="text" name="data[country_code]"  value="<?=$people['country_code']?>" class="input-xlarge" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照类型</label>
                            <div class="controls">
                               <!--  <input disabled="disabled" type="text" name="data[passport_type]"  value="<?
                           foreach ($country_passporttype as $aaaaa => $bbbbb) {
                               if($people['passport_type']==($aaaaa+1)){
                                    echo $bbbbb;
                               }
                           }
                           ?>" class="input-xlarge" > -->
                           <input disabled="disabled" type="text" name="data[passport_type]"  value="<?=$people['passport_type']?>" class="input-xlarge" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照号</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[passport_no]"  value="<?=$people['passport_no']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照签发地点</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[place_issue]"  value="<?=$people['place_issue']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照照片</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                    <div class="fileupload-new thumbnail" style="width: 274px; height: 150px;"><img src="<?=$people['passport']?>"></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">现居住地址</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[address]"  value="<?=$people['address']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">签发日期</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[date_issue]"  value="<?=date('Y-m-d',$people['date_issue'])?>" class="input-xlarge" >
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">信息审核状态</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[audit_state]"  value="<?
                           foreach ($registerpeple_auditstate as $c => $d) {
                               if($people['audit_state']==($c+1)){
                                    echo $d;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">信息备注</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[audit_note]"  value="<?=$people['audit_note']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">状态</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[state]"  value="<?
                           foreach ($registerpeple_state as $cc => $dd) {
                               if($people['state']==($cc+1)){
                                    echo $dd;
                               }
                           }
                           ?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">创建时间</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[create_time]"  value="<?=date('Y-m-d',$people['create_time'])?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">更改时间</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[change_time]"  value="<?=date('Y-m-d',$people['change_time'])?>" class="input-xlarge" >
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