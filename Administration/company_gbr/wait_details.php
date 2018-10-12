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
                        <?if((count($r1))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r1);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_gbr/regist")?>"><span><i class="icon-book"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申请</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="lightred">
                        <?if((count($r2))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r2);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_gbr/wait")?>"><span><i class="icon-print"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单审核</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="satgreen">
                        <?if((count($r6))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r6);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_gbr/finish")?>"><span><i class="icon-leaf"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册完成</font></font></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-user"></i>
                        查看详情
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
                            <input type="text" name="name" value="<?=str_replace("@","&nbsp;&nbsp;",$registlist['name'])?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">注册地区</label>
                        <div class="controls">
                            
                           <input type="text" name="type" value="<?=$registlist['region']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">建筑名称/编号</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$registlist['register_address1']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">注册地址</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$registlist['register_address2']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">行政区域</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$registlist['register_address3']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">所在国家</label>
                        <div class="controls">
                            
                           <input type="text" name="type" value="<?=$registlist['register_address4']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">订单编号</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$registlist['order_coding']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人姓名</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$registlist['contact_name']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人邮箱</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$registlist['contact_email']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人电话</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$registlist['contact_mobile']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">手机号国际代码</label>
                        <div class="controls">
                           
                           <input type="text" name="type" value="<?=$registlist['mobile_code']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <?foreach ($scope as $sgf => $vgf) {?>
                    <div class="control-group">
                        <label class="control-label">经营范围<?=$sgf+1?></label>
                        <div class="controls">
                            <input type="text" style="width: 50%;" name="type" value="<?=$vgf['code']?> - <?=$vgf['describe']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <?}?>
                    <div class="control-group">
                        <label class="control-label">信息审核状态</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?
                           foreach ($registerpeple_auditstate as $ag => $bg) {
                               if($registlist['audit_state']==($ag+1)){
                                    echo $bg;
                               }
                           }
                           ?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">邮寄地址</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$registlist['address']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">股份货币类型</label>
                        <div class="controls">
                          
                           <input type="text" name="type" value="<?=$rebasic['currency_type']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">股份类型</label>
                        <div class="controls">
                            
                           <input type="text" name="type" value="<?=$rebasic['shares_type']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">股份面值</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$rebasic['facevalue']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">股份数量</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$rebasic['number']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">未缴资本</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$rebasic['unpaid']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">规定详情</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$rebasic['details']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">是否有PCS</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?if($rebasic['psc']==1){echo '是';}else if($rebasic['psc']==2){echo '否';}?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">董事登记册</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$rebasic['register_directors']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">董事住址登记</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$rebasic['register_address']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">申请方式</label>
                        <div class="controls">
                            
                           <input type="text" name="type" value="<?=$rebasic['apply_way']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">备注</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=$registlist['audit_note']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">注册时间</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=date('Y-m-d H:m:i',$registlist['create_time'])?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">更改时间</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?=date('Y-m-d H:m:i',$registlist['change_time'])?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
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
                        公司成员信息
                    </h3>
                    <div class="actions">
                        <a rel="tooltip" data-original-title="新增" href="#aaa" class="btn btn-danger" data-toggle="modal">
                            <i class="icon-plus"></i>新增
                        </a>
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">序号</th>
                                <th style="text-align: center;">个人或企业名称</th>
                                <th style="text-align: center;">国家</th>
                                <th style="text-align: center;">类型</th>
                                <th style="text-align: center;">类别</th>
                                <th style="text-align: center;">状态</th>
                                <th style="text-align: center;">创建时间</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                        <?foreach($peoplelist as $key=>$val){?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td><?if($val['sort']==1||($val['sort']!=1&&$val['type']==1)){echo $val['name'];}if($val['sort']!=1&&$val['type']==2){echo $val['enterprise_name'];}?></td>
                                <td><?=$val['nation']?></td>
                                <td><?foreach ($registermember_type as $zxc => $vcx) {
                                    if($val['sort']==$zxc+1){
                                        echo $registermember_type[($val['sort']-1)][($val['type']-1)];
                                    }
                                }?></td>
                                <td><?foreach ($registermember_sort as $x => $c) {
                                    if($val['sort']==($x+1)){
                                        echo $c;
                                    }
                                }?></td>
                                <td><?foreach ($registerpeple_state as $keaa => $vaaaw) {
                                    if($val['state']==($keaa+1)){
                                       echo $vaaaw;
                                    }
                                     }?></td>
                                <td><?=date('Y-m-d',$val['create_time'])?></td>
                                <td>
                                    <a data-original-title="查看详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("company_gbr/wait_partner_details")?>?id=<?=$val["id"]?>"><i class="icon-eye-open"></i></a>
                                    <a data-original-title="修改" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("company_gbr/wait_partner_up")?>?id=<?=$val["id"]?>"><i class="icon-edit"></i></a>
                                    <a href="javascript:pub_alert_confirm(this,'确定要删除吗？','<?=$this->url("company_gbr/wait_partner_de")?>?id=<?=$val["id"]?>');" rel="tooltip" class="btn btn-small btn-danger" title="删除"><i class="icon-remove"></i></a>
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
                    <?if(empty($porder2)&&$onumber<$snumber){?>
                        <a rel="tooltip" data-original-title="新增服务项目" href="<?=$this->url('company_gbr/wait_order_add')?>?oid=<?=$registlist['id']?>&uid=<?=$registlist['uid']?>" class="btn btn-danger">
                            <i class="icon-plus"></i>新增服务项目
                        </a>
                    <?}?>
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
                        <?foreach($porder as $k=>$v){?>
                            <tr>
                                <td><?=$k+1?></td>
                                <td><?=$v['order_coding']?></td>
                                <td><?foreach ($orderlist_currency as $s => $mm) {
                                    if($v['currency']==($s+1)){
                                       echo $mm;
                                    }
                                     }?></td>
                                <td><?=$v['number']?></td>
                                <td> <?foreach ($orderlist_way as $ss => $mma) {
                                    if($v['way']==($ss+1)){
                                       echo $mma;
                                    }
                                     }?></td>
                                <td><?foreach ($orderlist_state as $bb => $bbb) {
                                    if($v['state']==($bb+1)){
                                       echo $bbb;
                                    }
                                     }?></td>
                                <td>
                                <?if($v['invoice']!=3){foreach ($invo as $key => $value) {
                                        foreach ($invoicelist_state as $g => $x) {
                                            if($value['poid']==$v['id']){
                                                if($v['invoice']==($g+1)){
                                                    echo $x;
                                                }
                                            }
                                       }
                                    }
                                }else if($v['invoice']==3){
                                        foreach ($invoicelist_state as $g => $x) {
                                            if($v['invoice']==($g+1)){
                                                    echo $x;
                                                }
                                        }
                                }
                                ?>
                                </td>
                                <td><?=date('Y-m-d',$v['create_time'])?></td>
                                <td><?=date('Y-m-d',$v['change_time'])?></td>
                                <td>
                                    <a data-original-title="查看详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("company_gbr/wait_order_details")?>?id=<?=$v["id"]?>"><i class="icon-eye-open"></i></a>
                                    <?if($v['state']!=2){?>
                                    <a data-original-title="修改" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("company_gbr/wait_order_up")?>?id=<?=$v["id"]?>"><i class="icon-edit"></i></a>
                                    <?}?>
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
                                <th style="text-align: center;">订单金额(人民币)</th>
                                <th style="text-align: center;">支付方式</th>
                                <th style="text-align: center;">支付状态</th>
                                <th style="text-align: center;">是否开具发票</th>
                                <th style="text-align: center;">创建时间</th>
                                <th style="text-align: center;">修改时间</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                        <?foreach($porder33 as $k=>$v){?>
                            <tr>
                                <td><?=$k+1?></td>
                                <td><?=$v['order_coding']?></td>
                                
                                <td><?foreach ($orderlist_currency as $s => $mm) {
                                    if($v['currency']==($s+1)){
                                       echo $mm;
                                    }
                                     }?></td>
                                <td><?=$v['number']?></td>
                                <td> <?foreach ($orderlist_way as $ss => $mma) {
                                    if($v['way']==($ss+1)){
                                       echo $mma;
                                    }
                                     }?></td>
                                <td><?foreach ($orderlist_state as $bb => $bbb) {
                                    if($v['state']==($bb+1)){
                                       echo $bbb;
                                    }
                                     }?></td>
                                <td>
                                <?if($v['invoice']!=3){foreach ($invo as $key => $value) {
                                        foreach ($invoicelist_state as $g => $x) {
                                            if($value['poid']==$v['id']){
                                                if($v['invoice']==($g+1)){
                                                    echo $x;
                                                }
                                            }
                                       }
                                    }
                                }else if($v['invoice']==3){
                                        foreach ($invoicelist_state as $g => $x) {
                                            if($v['invoice']==($g+1)){
                                                    echo $x;
                                                }
                                        }
                                }
                                ?>
                                </td>
                                <td><?=date('Y-m-d',$v['create_time'])?></td>
                                <td><?=date('Y-m-d',$v['change_time'])?></td>
                                <td>
                                    <a data-original-title="查看详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("company_gbr/wait_order_details")?>?id=<?=$v["id"]?>"><i class="icon-eye-open"></i></a>
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
                        经营范围列表
                    </h3>
                    <div class="actions">
                    <?if(count($scope)<4){?>
                    <a rel="tooltip" data-original-title="新增经营范围" href="<?=$this->url("company_gbr/wait_scope_add")?>?oid=<?=$oid?>" class="btn btn-danger" data-toggle="modal">
                            <i class="icon-plus"></i>新增经营范围
                        </a>
                        <?}?>
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">序号</th>
                                <th style="text-align: center;">code码</th>
                                <th style="text-align: center;">描述</th>
                                <th style="text-align: center;">创建时间</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                        <?foreach($scope as $kp=>$vp){?>
                            <tr>
                                <td><?=$kp+1?></td>
                                <td><?=$vp['code']?></td>
                                <td><?=$vp['describe']?></td>
                                <td><?=date('Y-m-d',$vp['create_time'])?></td>
                                <td>
                                    <a data-original-title="修改" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("company_gbr/wait_scope_up")?>?id=<?=$vp["id"]?>"><i class="icon-edit"></i></a>
                                    <a href="javascript:pub_alert_confirm(this,'确定要删除吗？','<?=$this->url("company_gbr/wait_scope_de")?>?id=<?=$vp["id"]?>');" rel="tooltip" class="btn btn-small btn-danger" title="删除"><i class="icon-remove"></i></a>
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
<div id="aaa" class="modal hide fade"  >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h3>
                新增
            </h3>
        </div>
        <div class="form-horizontal form-bordered form-validate">
            <div class="control-group">
                            <label class="control-label">类别/类型</label>
                            <div class="controls">
                            <?if($rebasic['psc']==1){?>
                                <select id="partnersort" name="data[sort]">
                                <?foreach($registermember_sort as $ka => $kb){?>
                                    <option value="<?=$ka+1?>"><?=$kb?></option>
                                <?}?>
                                </select>
                            <?}?>
                            <?if($rebasic['psc']==2){?>
                             <select id="partnersort" name="data[sort]">
                                <?foreach($registermember_sort2 as $ka => $kb){?>
                                    <option value="<?=$ka+1?>"><?=$kb?></option>
                                <?}?>
                                </select>
                            <?}?>
                            </div>
                            <div class="controls">
                                <select id="partnertype" name="data[type]">
                                    <option value="0">董事</option>
                                    <option value="1">秘书</option>
                                </select>
                            </div>
                        </div>
            <div class="modal-footer">
                <input id="btnn1" type="submit" class="btn btn-primary" value="确定" />
                <input type="reset" class="btn btn-primary" value="重置"/>
                <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
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
    $(function(){
        if($("#inputa").val()==1){
            $("#inputa").attr("checked","checked");
        }
        if($("#inputb").val()==2){
            $("#inputb").attr("checked","checked");
        }
         $("#partnersort").change(function(){//币种02
                var key = $('#partnersort').val();
                $.ajax({
                    url:'<?= $this->url("company_gbr/wait_type_ajax")?>',
                    type:'post',
                    data:{key:key},
                    dataType:'json',
                    success:function(e){
                        $("#partnertype").html(e.info);
                    } 
                })
        });
        $('#btnn1').on('click',function(){
            var oid = '<?=$oid?>';
            var uid = '<?=$uid?>';
            var type = parseInt($('#partnertype').val())+1;
            var sort = $('#partnersort').val();
            window.location.href="<?=$this->url('company_gbr/wait_partner_add')?>?oid="+oid+"&uid="+uid+"&type="+type+"&sort="+sort;
        })
    })
</script>