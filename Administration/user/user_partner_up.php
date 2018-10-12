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
                        股东董事修改
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('user/user_partner_up_ajax')?>" name="form_regist" id="form_regist" enctype="multipart/form-data" >
                        <div class="control-group">
                            <label class="control-label">类型</label>
                            <div class="controls">
                                <select  name="data[type]" class="input-xlarge">
                                <?foreach ($registerpeple_type as $ka => $va) {?>
                                     <option value="<?echo $ka+1;?>"<?if($people['type']==($ka+1)){echo "selected";}?>>
                                     <?=$va?>
                                     </option>
                                <?}?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">国籍</label>
                            <div class="controls">
                                <select  name="data[nationality]" class="input-xlarge">
                                <?foreach ($country_code as $k => $v) {?>
                                    <option value="<?echo $k+1;?>"<?if($people['nationality']==($v['country'])){echo "selected";}?> >
                                    <?echo $v['country'];?></option>
                                <?}?>
                                </select>
                                <!-- <input  type="text" name="data[nationality]"  value="<?=$people['nationality']?>" class="input-xlarge" > -->
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">名字</label>
                            <div class="controls">
                                <input  type="text" name="data[name]"  value="<?=$people['name']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">性别</label>
                            <div class="controls">
                                <select name="data[sex]" class="input-xlarge"><!--  -->
                                    <option value="1" <?if($people['sex']==1){echo "selected";}?>>男</option>
                                    <option value="2" <?if($people['sex']==2){echo "selected";}?>>女</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">邮箱</label>
                            <div class="controls">
                                <input  type="text" name="data[email]"  value="<?=$people['email']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系电话</label>
                            <div class="controls">
                                <input  type="text" name="data[mobile]"  value="<?=$people['mobile']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">出生日期</label>
                            <div class="controls">
                                <input type="text" id="created" name="data[date_birth]" value="<?=date('Y-m-d',$people['date_birth'])?>" placeholder="出生日期" class="input-medium datepick valid" />
                                <span class="help-block error valid" for="publishtime"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">出生地点</label>
                            <div class="controls">
                                <input  type="text" name="data[place_birth]"  value="<?=$people['place_birth']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">身份证正面</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?=$people['card_a']?>"></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file"><span class="fileupload-new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">选择图像</font></font></span><span class="fileupload-exists"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">更改</font></font></span><input name="card_a" type="file" ></span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">去掉</font></font></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">身份证背面</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?=$people['card_b']?>"></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file"><span class="fileupload-new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">选择图像</font></font></span><span class="fileupload-exists"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">更改</font></font></span><input name="card_b" type="file" ></span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">去掉</font></font></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">图片审核状态</label>
                            <div class="controls">
                                <select name="data[audit_img_state]" class="input-xlarge"><!--  -->
                                     <?foreach ($registerpeple_auditimgstate as $kaa => $vbb) {?>
                                 <option value="<?echo $kaa+1;?>"<?if($people['audit_img_state']==($kaa+1)){echo "selected";}?>><?=$vbb?></option>
                                     <?}?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">图片备注</label>
                            <div class="controls">
                                <input  type="text" name="data[audit_img_note]"  value="<?=$people['audit_img_note']?>" class="input-xlarge" />
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">国家码</label>
                            <div class="controls">
                                <select  name="data[country_code]" class="input-xlarge">
                                <?foreach ($country_code as $kab => $vab) {?>
                                    <option value="<?echo $kab+1;?>"<?if($people['country_code']==($vab['ccode'])){echo "selected";}?> >
                                    <?echo $vab['country'];?><?echo $vab['ccode'];?></option>
                                <?}?>
                                </select>
                                <!-- <input  type="text" name="data[country_code]"  value="<?=$people['country_code']?>" class="input-xlarge" /> -->
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照类型</label>
                            <div class="controls">
                                <!-- <select name="data[passport_type]" class="input-xlarge">
                                    <?foreach ($country_passporttype as $keyw => $valw) {?>
                                 <option value="<?echo $keyw+1;?>"<?if($people['passport_type']==($keyw+1)){echo "selected";}?>><?=$valw?></option>
                                     <?}?>
                                </select> -->
                                <input  type="text" name="data[passport_type]"  value="<?=$people['passport_type']?>" class="input-xlarge" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照号</label>
                            <div class="controls">
                                <input  type="text" name="data[passport_no]"  value="<?=$people['passport_no']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照签发地点</label>
                            <div class="controls">
                                <input  type="text" name="data[place_issue]"  value="<?=$people['place_issue']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照照片</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?=$people['passport']?>"></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file"><span class="fileupload-new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">选择图像</font></font></span><span class="fileupload-exists"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">更改</font></font></span><input name="passport" type="file" ></span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">去掉</font></font></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">现居住地址</label>
                            <div class="controls">
                                <input  type="text" name="data[address]"  value="<?=$people['address']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">签发日期</label>
                            <div class="controls">
                                <input type="text" id="created" name="data[date_issue]" value="<?=date('Y-m-d',$people['date_issue'])?>" placeholder="签发时间" class="input-medium datepick valid" />
                                <span class="help-block error valid" for="publishtime"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">信息备注</label>
                            <div class="controls">
                                <input  type="text" name="data[audit_note]"  value="<?=$people['audit_note']?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">创建时间</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[create_time]"  value="<?=date('Y-m-d',$people['create_time'])?>" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">信息审核状态</label>
                            <div class="controls">
                                <select name="data[audit_state]" class="input-xlarge"><!--  -->
                                     <?foreach ($registerpeple_auditstate as $kaa => $vbb) {?>
                                 <option value="<?echo $kaa+1;?>"<?if($people['audit_state']==($kaa+1)){echo "selected";}?>><?=$vbb?></option>
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
                            <input type="hidden" name="id" value="<?=$people['id']?>" />
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
    
        // $("#select").change(function(){//select选择改变事件
        //     alert($("#select option").val());
        // })
    });
</script>
