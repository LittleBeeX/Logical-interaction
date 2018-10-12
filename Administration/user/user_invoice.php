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
                        发票列表
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                    <div class="actions">
                        <a  id="frist" class="btn btn-primary"  style="width: 60px;" />
                            <i class="icon-arrow-left"></i>返回
                        </a>
                    </div>

                </div>
                <div class="box-content nopadding">
                    <table id="del" class="table table-hover table-nomargin dataTable table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">序号</th>
                                <th style="text-align: center;">注册国家</th>
                                <th style="text-align: center;">注册名称</th>
                                <th style="text-align: center;">业务类型</th>
                                <th style="text-align: center;">金额</th>
                                <th style="text-align: center;">发票类型</th>
                                <th style="text-align: center;">发票抬头</th>
                                <th style="text-align: center;">联系人姓名</th>
                                <th style="text-align: center;">发票申请状态</th>
                                <th style="text-align: center;">创建时间</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                         <?foreach($invoice as $k=>$v){?>
                         <?foreach($order as $key=>$val)if($v['poid']==$val['id']){?>
                            <tr>
                                <td><?=$k+1?></td>
                                <td><?foreach ($reg as $k22 => $v22)if($v22['id']==$val['oid']){
                                    foreach ($registerorder_country as $k55 => $v55) {
                                        if($v22['country']==$k55+1){
                                            echo $v55;
                                        }
                                    }
                                }?>
                                </td>
                                <td><?foreach ($reg as $k222 => $v222)if($v222['id']==$val['oid']){
                                    echo str_replace("@","&nbsp;&nbsp;",$v222['name']);
                                }?></td>
                                <td>
                                <?foreach ($registerorder_type as $ke => $ve) {
                                    if($v['business_type']==($ke+1)){
                                       echo $ve;
                                    }
                                 }?>
                                </td>
                                <td><?=$val['number']?></td>
                                <td>
                                <?foreach ($invoicelist_type as $kee => $vaa) {
                                    if($v['type']==($kee+1)){
                                       echo $vaa;
                                    }
                                 }?>
                                </td>
                                <td><?=$v['title']?></td>
                                <td><?=$v['contact_name']?></td>  
                                <td>
                                <?foreach ($invoicelist_state as $kq => $vq) {
                                    if($v['state']==($kq+1)){
                                       echo $vq;
                                    }
                                 }?>
                                </td>
                                <td><?=date('Y-m-d',$v['create_time'])?></td>
                                <td>
                                    <a data-original-title="查看发票详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("user/user_invoice_details")?>?id=<?=$v["id"]?>"><i class="icon-eye-open"></i></a>
                                    <?if($val['invoice']==1&&$v['state']==1){?>
                                    <a data-original-title="修改" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("user/user_invoice_up")?>?id=<?=$v["id"]?>"><i class="icon-edit"></i></a>
                                    <?}?>
                                    <a id="delete" href="javascript:pub_alert_confirm(this,'确定要删除吗？','<?=$this->url("user/user_invoice_de")?>?id=<?=$v["id"]?>');" rel="tooltip" class="btn btn-small btn-danger" title="删除发票"><i class="icon-remove"></i></a>
                                </td>
                            </tr>
                        <?}}?> 
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
                        未开发票列表
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <table id="del" class="table table-hover table-nomargin dataTable table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">序号</th>
                                <th style="text-align: center;">注册国家</th>
                                <th style="text-align: center;">注册名称</th>
                                <th style="text-align: center;">业务类型</th>
                                <th style="text-align: center;">支付订单编号</th>
                                <th style="text-align: center;">金额</th>
                                <th style="text-align: center;">发票申请状态</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                         
                         <?foreach($order2 as $key=>$val){?>
                         <?foreach($reg as $ks=>$vs)if($vs['id']==$val['oid']){?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td>
                                    <?foreach ($registerorder_country as $k66 => $v66) {
                                        if($vs['country']==$k66+1){
                                            echo $v66;
                                        }
                                    }?>
                                    <!-- <?=$vs['country']?> -->
                                </td>
                                <td>
                                    <?echo str_replace("@","&nbsp;&nbsp;",$vs['name']);?>
                                </td>
                                <td>
                                <?foreach ($registerorder_type as $ke => $ve) {
                                    if($val['type']==($ke+1)){
                                       echo $ve;
                                    }
                                 }?>
                                </td>
                                <td><?=$val['order_coding']?></td>
                                <td><?=$val['number']?></td>
                                <td>
                                <?foreach ($invoicelist_state as $kq => $vq) {
                                    if($val['invoice']==($kq+1)){
                                       echo $vq;
                                    }
                                 }?>
                                </td>
                                <td>
                                    <a data-original-title="查看发票详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("user/user_invoiceB_details")?>?id=<?=$val["id"]?>"><i class="icon-eye-open"></i></a>
                                </td>
                            </tr>
                        <?}}?> 
                    </table>
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
            //window.location.href="/index.php/sysadmin/system/admin";
        })
    });
</script>