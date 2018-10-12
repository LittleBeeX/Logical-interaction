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
                            <a href="<?=$this->url("company_cay/regist")?>"><span><i class="icon-book"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申请</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="lightred">
                        <?if((count($r2))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r2);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_cay/wait")?>"><span><i class="icon-print"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单审核</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="blue">
                        <?if((count($r3))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r3);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_cay/sign")?>"><span><i class="icon-bookmark"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文件签署</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="brown">
                        <?if((count($r4))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r4);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_cay/report")?>"><span><i class="icon-exchange"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申报</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="satgreen">
                        <?if((count($r5))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r5);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_cay/check")?>"><span><i class="icon-globe"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册审查</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="orange">
                        <?if((count($r6))!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r6);?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("company_cay/finish")?>"><span><i class="icon-leaf"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册完成</font></font></span></a>
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
                        <label class="control-label">类型</label>
                        <div class="controls">
                            <input type="text" name="type" value="<?
                           foreach ($registerorder_type as $a => $b) {
                               if($registlist['type']==($a+1)){
                                    echo $b;
                               }
                           }
                           ?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
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
                            <!-- <input type="text" name="type" value="<?
                           foreach ($country_mobilecode as $kws => $vws) {
                               if($registlist['mobile_code']==($kws+1)){
                                    echo $vws['code'];
                               }
                           }
                           ?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/> -->
                           <input type="text" name="type" value="<?=$registlist['mobile_code']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">服务项目</label>
                        <div class="controls">
                            <ul class="service-list c66 fz22 plr30 pt40 mt10">
                            <?
                            $mm = explode(",",$registlist['project']);
                            foreach ($sin_f as $ks1 => $vs1) {?>
                                <li>
                                    <label class="c28 ub ub-ac">
                                        <input  type="checkbox" <?foreach ($mm as $ktr => $vtr) {
                                            if($vtr==($ks1+1)){echo "checked='checked'";}
                                        }
                                        ?> <?if($vs1['yn_choice']==1){echo "disabled='disabled'";}?> 
                                        <?
                                            for ($i=0; $i < count($porder); $i++) { 
                                                if($porder[$i]['state']==2){
                                                    $ee = explode(",",$porder[$i]['project']);
                                                    for ($m=0; $m <count($ee) ; $m++) { 
                                                        if($ee[$m]==($ks1+1)){
                                                            echo "disabled='disabled'";
                                                        }
                                                    }
                                                }
                                            }
                                        ?> value="<?=$ks1+1?>"  class="form-checkbox mr10 inputa" />
                                        <?=$vs1['project_cn']?>&nbsp;&nbsp;￥<?=$vs1['money_rmb']?>
                                    </label>
                                </li>
                            <?}?>
                            </ul>
                        </div>
                    </div>
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
                        <?foreach($peoplelist as $key=>$val){?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td><?=$val['name']?></td>
                                <td><?if($val['sex']==1){echo "男";}else if($val['sex']==2){echo "女";}?></td>
                                <td><!-- <?foreach ($country_code as $keyl => $vall) {
                                    if($val['nationality']==($keyl+1)){
                                        print_r($vall['country']);
                                    }
                                 }?> --><?=$val['nationality']?></td>
                                <td><?foreach ($registerpeple_type as $kea => $vaaa) {
                                    if($val['type']==($kea+1)){
                                       echo $vaaa;
                                    }
                                     }?></td>
                                <td><?foreach ($registerpeple_auditstate as $keaa => $vaaaw) {
                                    if($val['audit_state']==($keaa+1)){
                                       echo $vaaaw;
                                    }
                                     }?></td>
                                <td><?=date('Y-m-d',$val['create_time'])?></td>
                                <td>
                                    <a data-original-title="查看详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("company_cay/sign_partner_details")?>?id=<?=$val["id"]?>"><i class="icon-eye-open"></i></a>
                                    <a data-original-title="修改" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("company_cay/sign_partner_up")?>?id=<?=$val["id"]?>"><i class="icon-edit"></i></a>
                                    <a href="javascript:pub_alert_confirm(this,'确定要删除吗？','<?=$this->url("company_cay/sign_partner_de")?>?id=<?=$val["id"]?>');" rel="tooltip" class="btn btn-small btn-danger" title="删除"><i class="icon-remove"></i></a>
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
                    <?if(empty($porder2)&&$number<count($sin_f)){?>
                        <a rel="tooltip" data-original-title="新增服务项目" href="<?=$this->url('company_cay/sign_order_add')?>?oid=<?=$registlist['id']?>&uid=<?=$registlist['uid']?>" class="btn btn-danger">
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
                                <th style="text-align: center;">订单金额(人民币)</th>
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
                                    <a data-original-title="查看详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("company_cay/sign_order_details")?>?id=<?=$v["id"]?>"><i class="icon-eye-open"></i></a>
                                    <?if($v['state']!=2){?>
                                    <a data-original-title="修改" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("company_cay/sign_order_up")?>?id=<?=$v["id"]?>"><i class="icon-edit"></i></a>
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
                                    <a data-original-title="查看详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("company_cay/sign_order_details")?>?id=<?=$v["id"]?>"><i class="icon-eye-open"></i></a>
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