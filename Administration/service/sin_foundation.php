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
                        新加坡基金会服务项目列表
                    </h3>
                    <div class="actions">
                        <a rel="tooltip" data-original-title="新增服务项目" href="<?=$this->url('service/sin_foundation_add')?>" class="btn btn-danger">
                            <i class="icon-plus"></i> 新增服务项目
                        </a>
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">序号</th>
                                <th style="text-align: center;">类型</th>
                                <th style="text-align: center;">所属国家</th>
                                <th style="text-align: center;">状态</th>
                                <th style="text-align: center;">中文描述</th>
                                <th style="text-align: center;">金额(人民币)</th>
                                <th style="text-align: center;">创建时间</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                            <?foreach ($sin_f as $k1 => $v1) {?>
                            <tr>
                                <td><?=$k1+1?></td>
                                <td><?foreach ($registerorder_type as $k11 => $v11) {
                                    if($v1['type']==$k11+1){
                                        echo $v11;
                                    }
                                }?></td>
                                <td><?foreach ($registerorder_country as $k22 => $v22) {
                                    if($v1['note']==$k22+1){
                                        echo $v22;
                                    }
                                }?></td>
                                <td><?foreach ($registerpeple_state as $k33 => $v33) {
                                    if($v1['state']==$k33+1){
                                        echo $v33;
                                    }
                                }?></td>
                                <td><?=$v1['project_cn']?></td>
                                <td><?=$v1['money_rmb']?></td>
                                <td><?=date('Y-m-d H:m:i',$v1['create_time'])?></td>
                                <td>
                                    <a data-original-title="查看服务项目详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("service/sin_foundation_details")?>?id=<?=$v1["id"]?>"><i class="icon-eye-open"></i></a>
                                    <a data-original-title="修改服务项目" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("service/sin_foundation_up")?>?id=<?=$v1["id"]?>"><i class="icon-edit"></i></a>
                                    <a href="javascript:pub_alert_confirm(this,'确定要删除吗？','<?=$this->url("service/sin_foundation_del")?>?id=<?=$v1["id"]?>');"  class="btn btn-small btn-danger" rel="tooltip" title="删除服务项目"><i class="icon-remove"></i></a>
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