<style type="text/css">
    li{
        list-style: none;
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
                        添加服务项目
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                <form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('service/sin_company_add_ajax')?>" name="form_regist" id="form_regist" enctype="multipart/form-data" >
                    <div class="control-group">
                        <label class="control-label">类型</label>
                        <div class="controls">
                        <!-- <select name="data[type]">
                        <?foreach ($registerorder_type as $k1 => $v1) {?>
                            <option value="<?=$k1+1?>"><?=$v1?></option>
                        <?}?>
                        </select> -->
                        <input type="text"  value="有限公司" class="input-xlarge"  readonly/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">所属国家</label>
                        <div class="controls">
                        <!-- <select name="data[note]">
                        <?foreach ($registerorder_country as $k2 => $v2) {?>
                            <option value="<?=$k2+1?>"><?=$v2?></option>
                        <?}?>
                        </select> -->
                        <input type="text"  value="新加坡" class="input-xlarge"  readonly/>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label">中文描述</label>
                        <div class="controls">
                            <input type="text" name="data[project_cn]" value="" class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">英文描述</label>
                        <div class="controls">
                            <input type="text" name="data[project_en]" value="" class="input-xlarge"  />
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label">韩文描述</label>
                        <div class="controls">
                            <input type="text" name="data[project_kr]" value="" class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">具体要求描述(中文)</label>
                        <div class="controls">
                            <textarea style="resize: none;height: 120px;width: 360px;" name="data[msg_cn]"  class="input-xlarge" ></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">具体要求描述(英文)</label>
                        <div class="controls">
                            <textarea style="resize: none;height: 120px;width: 360px;" name="data[msg_en]"  class="input-xlarge" ></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">具体要求描述(韩文)</label>
                        <div class="controls">
                            <textarea style="resize: none;height: 120px;width: 360px;" name="data[msg_kr]"  class="input-xlarge" ></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">金额（人民币）</label>
                        <div class="controls">
                            <input type="text" name="data[money_rmb]" value="" class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">单位(中文)</label>
                        <div class="controls">
                            <input type="text" name="data[unit_cn]" value="" class="input-xlarge span2"  /> 如：单位（年，一次性，间）
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">单位(英文)</label>
                        <div class="controls">
                            <input type="text" name="data[unit_en]" value="" class="input-xlarge span2"  />如：单位（year，one-time，room）
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">单位(韩文)</label>
                        <div class="controls">
                            <input type="text" name="data[unit_kr]" value="" class="input-xlarge span2"  /> 如：单位（년，일시불，칸）
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">是否必选</label>
                        <div class="controls">
                        <select name="data[yn_choice]">
                            <option value="1">是</option>
                            <option value="2">否</option>
                        </select>
                        </div>
                    </div>
                    <div class="control-group" style="display: none;">
                        <label class="control-label">创建时间</label>
                        <div class="controls">
                            <input type="text" name="data[create_time]" value="<?=date('Y-m-d H:m:i')?>" class="input-xlarge" data-rule-required="true" />
                        </div>
                    </div>
                    <div class="form-actions">
                            
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#frist').click(function(){
            window.history.back(-1);
        })
    });
</script>