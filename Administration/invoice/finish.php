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
                        发票已开具列表
                    </h3>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
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
                        <?foreach($order as $ke=>$va){?>
                        <?foreach($voicelist as $k=>$v)if($va['state']==2&&$va['id']==$v['poid']){?>
                            <tr>
                                <td><?=$k+1?></td>
                                <td><?foreach ($reg as $k22 => $v22)if($v22['id']==$va['oid']){
                                    foreach ($registerorder_country as $k333 => $v333) {
                                        if($v22['country']==$k333+1){
                                            echo $v333;
                                        }
                                    }
                                }?></td>
                                <td><?foreach ($reg as $k222 => $v222)if($v222['id']==$va['oid']){
                                    echo str_replace("@","&nbsp;&nbsp;",$v222['name']);
                                }?></td>
                                <td> <?foreach ($registerorder_type as $s => $mm) {
                                    if($v['business_type']==($s+1)){
                                       echo $mm;
                                    }
                                     }?></td>
                                <td><?echo $va['number']?></td>
                                
                                <td><?foreach ($invoicelist_type as $ss => $mmm) {
                                    if($va['type']==($ss+1)){
                                       echo $mmm;
                                    }
                                     }?></td>
                                <td><?=$v['title']?></td>
                                <td><?=$v['contact_name']?></td>  
                                <td><?foreach ($invoicelist_state as $sss => $mmmm) {
                                    if($v['state']==($sss+1)){
                                       echo $mmmm;
                                    }
                                     }?>
                                </td>
                                <td><?=date('Y-m-d',$v['create_time'])?></td>
                                <td>
                                    <a data-original-title="查看发票详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("invoice/finish_details")?>?id=<?=$v["id"]?>"><i class="icon-eye-open"></i></a>
                                    <!-- <a data-original-title="修改" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("invoice/finish_up")?>?id=<?=$v["id"]?>"><i class="icon-edit"></i></a> -->
                                    <a href="javascript:pub_alert_confirm(this,'确定要删除吗？','<?=$this->url("invoice/finish_de")?>?id=<?=$v["id"]?>');"  class="btn btn-small btn-danger" rel="tooltip" title="删除注册订单"><i class="icon-remove"></i></a>
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