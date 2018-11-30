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
                            <a href="<?=$this->url("company/input")?>"><span><i class="icon-book"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">填写信息</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="lightred">
                        <?if($r2!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r2;?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company/stay")?>"><span><i class="icon-print"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">待审列表</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="blue">
                        <?if($r3!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r3;?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company/fail")?>"><span><i class="icon-bookmark"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">审核失败</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="brown">
                        <?if($r4!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r4;?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company/success")?>"><span><i class="icon-exchange"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">审核成功</font></font></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-user"></i>
                        公司信息详情
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
                            <input type="text" name="name" value="<?=$info['name']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">唯一标识</label>
                        <div class="controls">
                            <input type="text" name="only" value="<?=$info['only']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">注册编码</label>
                        <div class="controls">
                            <input type="text" name="code" value="<?=$info['code']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">注册地址</label>
                        <div class="controls">
                            <input type="text" name="address" value="<?=$info['address']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">注册资本</label>
                        <div class="controls">
                            <input type="text" name="capital" value="<?=$info['capital']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">股权占比（%）</label>
                        <div class="controls">
                            <input type="text" name="support" value="<?=$info['support']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">人数占比（%）</label>
                        <div class="controls">
                            <input type="text" name="quorum" value="<?=$info['quorum']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">持续时间（H）</label>
                        <div class="controls">
                            <input type="text" name="quorum" value="<?=$info['quorum']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">令牌名称</label>
                        <div class="controls">
                            <input type="text" name="token_name" value="<?=$info['token_name']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">令牌符号</label>
                        <div class="controls">
                            <input type="text" name="token_symbol" value="<?=$info['token_symbol']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">令牌数量</label>
                        <div class="controls">
                            <input type="text" name="token_number" value="<?=$info['token_number']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">信息状态</label>
                        <div class="controls">
                            <input type="text" name="state" value="<?=$state[$info['state']]?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
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
                        <label class="control-label">公司LOGO</label>
                        <div class="controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?=$info['logo']?>"></div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">公司章程</label>
                        <div class="controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?=$info['logo']?>"></div>
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
    <div class="row-fluid">
        <div class="span12">
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-th-list"></i>
                        成员信息
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>序号</th>
                                <th>姓名</th>
                                <th>性别</th>
                                <th>国籍</th>
                                <th>护照编号</th>
                                <th>钱包地址</th>
                                <th>持有TOKEN数</th>
                                <th>股权占比（%）</th>
                                <th>状态</th>
                                <th>创建时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <?foreach($list as $k=>$v){?>
                            <tr>
                                <td><?=$k+1?></td>
                                <td><?=$v['surname'].$v['name']?></td>
                                <td><?=$sex[$v['sex']]?></td>
                                <td><?=$phone_codes[$v['nationality']]['country']?></td>
                                <td><?=$v['passports']?></td>
                                <td><?=$v['address']?></td>
                                <td><?=$v['token_number']?></td>
                                <td><?=$v['token_proportion']?></td>
                                <td><?=$state[$v['state']]?></td>
                                <td><?=date('Y-m-d',$v['create_time'])?></td>
                                <td>
                                    <a data-original-title="查看详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("chain/se")?>?id=<?=$v["id"]?>"><i class="icon-eye-open"></i></a>
                                <?if($v['state']==1 || $v['state']==3){?>
                                    <a data-original-title="处理" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("chain/up")?>?id=<?=$v["id"]?>"><i class="icon-edit"></i></a>
                                <?}?>
                                </td>
                            </tr>
                        <?}?>
                    </table>
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