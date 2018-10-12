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
                        股东董事添加
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('company_sin/check_partner_add_ajax')?>?oid=<?=$oid?>" name="form_regist" id="form_regist" enctype="multipart/form-data" >
                    <div class="control-group">
                            <label class="control-label">类型</label>
                            <div class="controls">
                                <select  name="data[type]" class="input-xlarge">
                                <?foreach ($registerpeple_type as $ka => $va) {?>
                                     <option value="<?echo $ka+1;?>">
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
                                <?foreach ($country_code as $kb => $vb) {?>
                                    <option value="<?echo $kb+1;?>" >
                                    <?echo $vb['country'];?></option>
                                <?}?>
                                </select>
                                <!-- <input  type="text" name="data[nationality]"  value="<?=$peoplelist['nationality']?>" class="input-xlarge" > -->
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">名字</label>
                            <div class="controls">
                                <input  type="text" name="data[name]"  value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">性别</label>
                            <div class="controls">
                                <select name="data[sex]" class="input-xlarge"><!--  -->
                                    <option value="1" >男</option>
                                    <option value="2" >女</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">邮箱</label>
                            <div class="controls">
                                <input  type="text" name="data[email]"  value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系电话</label>
                            <div class="controls">
                                <input  type="text" name="data[mobile]"  value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">微信号</label>
                            <div class="controls">
                                <input  type="text" name="data[wechat]"  value="" class="input-xlarge" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">出生日期</label>
                            <div class="controls">
                                <input type="text" id="created" name="data[date_birth]" value="" placeholder="出生日期" class="input-medium datepick valid" />
                                <span class="help-block error valid" for="publishtime"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">出生地点</label>
                            <div class="controls">
                                <input  type="text" name="data[place_birth]"  value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">身份证正面</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src=""></div>
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
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src=""></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file"><span class="fileupload-new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">选择图像</font></font></span><span class="fileupload-exists"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">更改</font></font></span><input name="card_b" type="file" ></span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">去掉</font></font></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">国家码</label>
                            <div class="controls">
                               <select  name="data[country_code]" class="input-xlarge">
                                <?foreach ($country_code as $kd => $vd) {?>
                                    <option value="<?echo $kd+1;?>" >
                                    <?echo $vd['country'];?><?echo $vd['ccode'];?></option>
                                <?}?>
                                </select>
                                <!-- <input  type="text" name="data[country_code]"  value="<?=$peoplelist['country_code']?>" class="input-xlarge" /> -->
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照类型</label>
                            <div class="controls">
                               <!--  <select name="data[passport_type]" class="input-xlarge">
                                    <?foreach ($country_passporttype as $ke => $ve) {?>
                                 <option value="<?echo $ke+1;?>"<?if($peoplelist['passport_type']==($ke+1)){echo "selected";}?>><?=$ve?></option>
                                     <?}?>
                                </select> -->
                                <input  type="text" name="data[passport_type]"  value="" class="input-xlarge" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照号</label>
                            <div class="controls">
                                <input  type="text" name="data[passport_no]"  value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照签发地点</label>
                            <div class="controls">
                                <input  type="text" name="data[place_issue]"  value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">护照照片</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src=""></div>
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
                                <input  type="text" name="data[address]"  value="" class="input-xlarge" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">签发日期</label>
                            <div class="controls">
                                <input type="text" id="created" name="data[date_issue]" value="" placeholder="签发时间" class="input-medium datepick valid" />
                                <span class="help-block error valid" for="publishtime"></span>
                            </div>
                        </div>
                        <div class="form-actions">
                        <input type="submit" id="btn" class="btn btn-primary" value="确认添加" />
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
    });
    

</script>
