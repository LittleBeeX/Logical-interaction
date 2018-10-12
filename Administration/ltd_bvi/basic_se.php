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
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r1?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("ltd_bvi/regist")?>"><span><i class="icon-book"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申请</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="lightred">
                        <?if($r2!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r2?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("ltd_bvi/wait")?>"><span><i class="icon-print"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单审核</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="blue">
                        <?if($r3!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r3?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("ltd_bvi/sign")?>"><span><i class="icon-bookmark"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文件签署</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="brown">
                        <?if($r4!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r4?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("ltd_bvi/report")?>"><span><i class="icon-exchange"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申报</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="satgreen">
                        <?if($r5!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r5?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("ltd_bvi/check")?>"><span><i class="icon-globe"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册审查</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="orange">
                        <?if($r6!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r6?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("ltd_bvi/finish")?>"><span><i class="icon-leaf"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册完成</font></font></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-user"></i>
                        基本信息查看
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
                            <input type="text" name="name" value="<?=str_replace("@","&nbsp;&nbsp;",$info['name'])?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">类型</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$registerorder_type[($info['type']-1)]?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">订单编号</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$info['order_coding']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人姓名</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$info['contact_name']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人邮箱</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$info['contact_email']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">手机号国际代码</label>
                        <div class="controls">
                           <input type="text" name="type" value="+<?=$info['mobile_code']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人电话</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$info['contact_mobile']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">信息审核状态</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$registerpeple_auditstate[($info['audit_state']-1)]?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">邮寄地址</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$info['address']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">备注</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$info['audit_note']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">注册时间</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=date('Y-m-d H:m:i',$info['create_time'])?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">更改时间</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=date('Y-m-d H:m:i',$info['change_time'])?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
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

    <div class="row-fluid">
        <div class="span12">
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-th-list"></i>
                        人员信息
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
                                <th>类型</th>
                                <th>状态</th>
                                <th>创建时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <?foreach($people_list as $key=>$val){?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td><?=$val['name']?></td>
                                <td><?if($val['sex']==1){echo "男";}else if($val['sex']==2){echo "女";}?></td>
                                <td><?=$val['nationality']?></td>
                                <td><?=$registerpeple_type[($val['type']-1)]?></td>
                                <td><?=$registerpeple_auditstate[($val['audit_state']-1)]?></td>
                                <td><?=date('Y-m-d',$val['create_time'])?></td>
                                <td>
                                    <a data-original-title="查看信息" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("ltd_bvi/member_se")?>?id=<?=$val["id"]?>"><i class="icon-eye-open"></i></a>
                                </td>
                            </tr>
                        <?}?>
                    </table>
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
                        支付订单列表
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">序号</th>
                                <th style="text-align: center;">订单编号</th>
                                <th style="text-align: center;">支付币种</th>
                                <th style="text-align: center;">订单金额</th>
                                <th style="text-align: center;">支付方式</th>
                                <th style="text-align: center;">支付状态</th>
                                <th style="text-align: center;">是否开具发票</th>
                                <th style="text-align: center;">创建时间</th>
                                <th style="text-align: center;">修改时间</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                        <?foreach($order_list as $k=>$v){?>
                            <tr>
                                <td><?=$k+1?></td>
                                <td><?=$v['order_coding']?></td>
                                <td><?=$orderlist_currency[$v['currency']]?></td>
                                <td><?=$v['number']?></td>
                                <td><?=$orderlist_way[$v['way']]?></td>
                                <td><?=$orderlist_state[($v['state']-1)]?></td>
                                <td><?=$invoicelist_state[($v['invoice']-1)]?></td>
                                <td><?=date('Y-m-d',$v['create_time'])?></td>
                                <td><?=date('Y-m-d',$v['change_time'])?></td>
                                <td>
                                    <a data-original-title="查看信息" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("ltd_bvi/payment_se")?>?id=<?=$v["id"]?>"><i class="icon-eye-open"></i></a>
                                </td>
                            </tr>
                        <?}?>
                    </table>
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
                        已作废支付订单列表
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">序号</th>
                                <th style="text-align: center;">订单编号</th>
                                <th style="text-align: center;">支付币种</th>
                                <th style="text-align: center;">订单金额</th>
                                <th style="text-align: center;">支付方式</th>
                                <th style="text-align: center;">支付状态</th>
                                <th style="text-align: center;">是否开具发票</th>
                                <th style="text-align: center;">创建时间</th>
                                <th style="text-align: center;">修改时间</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                        <?foreach($order_list_de as $k=>$v){?>
                            <tr>
                                <td><?=$k+1?></td>
                                <td><?=$v['order_coding']?></td>
                                <td><?=$orderlist_currency[$v['currency']]?></td>
                                <td><?=$v['number']?></td>
                                <td><?=$orderlist_way[$v['way']]?></td>
                                <td><?=$orderlist_state[($v['state']-1)]?></td>
                                <td><?=$invoicelist_state[($v['invoice']-1)]?></td>
                                <td><?=date('Y-m-d',$v['create_time'])?></td>
                                <td><?=date('Y-m-d',$v['change_time'])?></td>
                                <td>
                                    <a data-original-title="查看信息" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("ltd_bvi/payment_se")?>?id=<?=$v["id"]?>"><i class="icon-eye-open"></i></a>
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