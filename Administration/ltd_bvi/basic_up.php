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
                        基本信息修改
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                <form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('ltd_bvi/basic_up_ajax')?>" name="form_bill" id="form_bill">
                    <div class="control-group">
                        <label class="control-label">公司名称</label>
                        <div class="controls">
                            <input type="text" name="data[name]" value="<?$a = explode("@",$info['name']);echo $a[0];?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">订单编号</label>
                        <div class="controls">
                            <input type="text" name="data[order_coding]" value="<?=$info['order_coding']?>"  class="input-xlarge"  disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人姓名</label>
                        <div class="controls">
                            <input type="text" name="data[contact_name]" value="<?=$info['contact_name']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group" style="display: none;">
                        <label class="control-label">TYPE</label>
                        <div class="controls">
                            <input type="text" name="data[type]" value="<?=$info['type']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group" style="display: none;">
                        <label class="control-label">UID</label>
                        <div class="controls">
                            <input type="text" name="data[uid]" value="<?=$info['uid']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人邮箱</label>
                        <div class="controls">
                            <input type="text" name="data[contact_email]" value="<?=$info['contact_email']?>"  class="input-xlarge" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人电话</label>
                        <div class="controls">
                            <input type="text" name="data[contact_mobile]" value="<?=$info['contact_mobile']?>"  class="input-xlarge"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">手机号国际代码</label>
                        <div class="controls">
                            <select name="data[mobile_code]" class="input-xlarge">
                                <?foreach ($country_mobilecode as $w => $q) {?>
                                     <option value="<?echo $w+1;?>"<?if($info['mobile_code']==($q['code'])){echo "selected";}?>>
                                     <?=$q['code']?><?=$q['country']?>
                                     </option>
                                <?}?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">邮寄地址</label>
                        <div class="controls">
                            <input type="text" name="data[address]" value="<?=$info['address']?>"  class="input-xlarge" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">备注</label>
                        <div class="controls">
                            <input type="text" name="data[audit_note]" value="<?=$info['audit_note']?>"  class="input-xlarge"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">流程审核</label>
                        <div class="controls">
                            <select name="data[state]" class="input-xlarge">
                            <?if($info['state']==1){?>
                                <option value="1" selected>注册申请</option>
                                <option value="2" >进入订单审核</option>
                            <?}else if($info['state']==2){?>
                                <option value="1" >退回到注册申请</option>
                                <option value="2" selected>订单审核</option>
                                <option value="3" >进入文件签署</option>
                            <?}else if($info['state']==3){?>
                                <option value="2" >退回到订单审核</option>
                                <option value="3" selected>文件签署</option>
                                <option value="4" >进入注册申报</option>
                            <?}else if($info['state']==4){?>
                                <option value="3" >退回到文件签署</option>
                                <option value="4" selected>注册申报</option>
                                <option value="5" >进入注册审查</option>
                            <?}else if($info['state']==5){?>
                                <option value="4" >退回到注册申报</option>
                                <option value="5" selected>注册审查</option>
                                <option value="6" >进入注册完成</option>
                            <?}else if($info['state']==6){?>
                                <option value="5" >退回到注册审查</option>
                                <option value="6" selected>注册完成</option>
                            <?}?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">基本信息审核</label>
                        <div class="controls">
                            <select name="data[audit_state]" class="input-xlarge"><!--  -->
                                <?foreach ($registerpeple_auditstate as $kaw => $vaw) {?>
                                     <option value="<?echo $kaw+1;?>"<?if($info['audit_state']==($kaw+1)){echo "selected";}?>>
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
                        <input type="hidden"  name="id" value="<?=$info['id']?>" />
                        <input type="submit" id="btn" class="btn btn-primary" value="确认"style="width: 60px;" />
                        <input type="reset" class="btn btn-primary" value="重置" style="margin-left: 20px;width: 60px;margin-right: 20px;" />
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
                                    <a data-original-title="修改信息" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("ltd_bvi/member_up")?>?id=<?=$val["id"]?>"><i class="icon-edit"></i></a>
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
                                    <a data-original-title="修改信息" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("ltd_bvi/payment_up")?>?id=<?=$v["id"]?>"><i class="icon-edit"></i></a>
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