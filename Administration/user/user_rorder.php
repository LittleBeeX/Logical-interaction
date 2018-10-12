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
                        注册订单列表
                    </h3>
                    <div class="actions">
                        <a  id="frist" class="btn btn-primary"  style="width: 60px;" />
                            <i class="icon-arrow-left"></i>返回
                        </a>
                    </div>

                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">序号</th>
                                <th style="text-align: center;">类型</th>
                                <th style="text-align: center;">注册名称</th>
                                <th style="text-align: center;">注册国家</th>
                                <th style="text-align: center;">联系人姓名</th>
                                <th style="text-align: center;">联系人邮箱</th>
                                <th style="text-align: center;">联系人电话</th>
                                <th style="text-align: center;">注册进度</th>
                                <th style="text-align: center;">信息审核状态</th>
                                <th style="text-align: center;">创建时间</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                         <?foreach($order as $k=>$v){?>
                            <tr>
                                <td><?=$k+1?></td>
                                <td>
                                    <?foreach ($registerorder_type as $key => $val) {
                                    if($v['type']==($key+1)){
                                        echo $val;
                                    }
                                 }?>
                                </td>
                                <td><?echo str_replace("@","&nbsp;&nbsp;",$v['name']);?></td>
                                <td>
                                    <?foreach ($registerorder_country as $kw => $vw) {
                                    if($v['country']==($kw+1)){
                                        echo $vw;
                                    }
                                    }?>

                                </td>
                                <td><?=$v['contact_name']?></td>
                                <td><?=$v['contact_email']?></td>
                                <td><?=$v['contact_mobile']?></td>
                                
                                <td>
                                    <?foreach ($registerorder_state as $ke => $va) {
                                    if($v['state']==($ke+1)){
                                       echo $va;
                                    }
                                 }?>
                                </td>
                                <td>
                                    <?foreach ($registerpeple_auditstate as $kez => $vaz) {
                                    if($v['audit_state']==($kez+1)){
                                       echo $vaz;
                                    }
                                 }?>
                                </td>
                                <td><?=date('Y-m-d',$v['create_time'])?></td>
                                <td>
                                    <?if($v['country']==1&&$v['type']==1){?>
                                    <a data-original-title="查看订单详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("user/user_rorder_details")?>?id=<?=$v["id"]?>"><i class="icon-eye-open"></i></a>
                                    <?}?>
                                    <?if($v['country']==1&&$v['type']==2){?>
                                    <a data-original-title="查看订单详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("user/user_rorderA_details")?>?id=<?=$v["id"]?>"><i class="icon-eye-open"></i></a>
                                    <?}?>
                                    <?if($v['country']==2){?>
                                    <a data-original-title="查看订单详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("user/user_rorderB_details")?>?id=<?=$v["id"]?>"><i class="icon-eye-open"></i></a>
                                    <?}?>
                                    <?if($v['country']==1&&$v['type']==1){?>
                                    <a data-original-title="修改注册订单" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("user/user_rorder_up")?>?id=<?=$v["id"]?>"><i class="icon-edit"></i></a>
                                    <?}?>
                                    <?if($v['country']==1&&$v['type']==2){?>
                                    <a data-original-title="修改注册订单" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("user/user_rorderA_up")?>?id=<?=$v["id"]?>"><i class="icon-edit"></i></a>
                                    <?}?>
                                    <?if($v['country']==2){?>
                                    <a data-original-title="修改注册订单" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("user/user_rorderB_up")?>?id=<?=$v["id"]?>"><i class="icon-edit"></i></a>
                                    <?}?>
                                    <a href="javascript:pub_alert_confirm(this,'确定要删除吗？','<?=$this->url("user/user_rorder_de")?>?id=<?=$v["id"]?>');" rel="tooltip" class="btn btn-small btn-danger" title="删除注册订单"><i class="icon-remove"></i></a>
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
<script>
    $(document).ready(function(){
        $('#frist').click(function(){
            window.history.back(-1);
        })
    });

   
</script>