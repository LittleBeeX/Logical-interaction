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
                        未申请发票列表
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
                                <th style="text-align: center;">支付订单编号</th>
                                <th style="text-align: center;">金额</th>
                                <th style="text-align: center;">发票申请状态</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                        <?foreach($order as $ke=>$va){?>
                        <?foreach($reg as $ks=>$vs)if($vs['id']==$va['oid']){?>
                            <tr>
                                <td><?=$ke+1?></td>
                                <td><?foreach ($registerorder_country as $k66 => $v66) {
                                        if($vs['country']==$k66+1){
                                            echo $v66;
                                        }
                                    }?>
                                </td>
                                <td><?echo str_replace("@","&nbsp;&nbsp;",$vs['name']);?></td>
                                <td><?foreach ($registerorder_type as $s => $mm) {
                                    if($va['type']==($s+1)){
                                       echo $mm;
                                    }
                                     }?></td>
                                <td><?=$va['order_coding']?></td>
                                <td><?echo $va['number']?></td>
                                <td><?foreach ($invoicelist_state as $ss => $mmm) {
                                    if($va['invoice']==($ss+1)){
                                       echo $mmm;
                                    }
                                     }?></td>
                                <td>
                                    <a data-original-title="查看详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("invoice/none_details")?>?id=<?=$va["id"]?>"><i class="icon-eye-open"></i></a>
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