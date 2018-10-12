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
                        会员列表
                    </h3>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">序号</th>
                                <th style="text-align: center;">登陆账号</th>
                                <th style="text-align: center;">国籍</th>
                                <th style="text-align: center;">注册时间</th>
                                <th style="text-align: center;">状态</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                      <?foreach($userlist as $k=>$v){?>
                        <tr>
                                <td><?=$k+1?></td>
                                <td><?=$v['account']?></td>
                                <td>
                                <!-- <?foreach ($country_code as $key => $val) {
                                    if($v['nationality']==($key+1)){
                                        print_r($val['country']);
                                    }
                                 }?> -->
                                 <?=$v['nationality']?>
                                </td>
                                <td><?=date('Y-m-d',$v['registertime'])?></td>
                                <td>
                                <?foreach ($userbasic_state as $a => $b) {
                                    if($v['state']==($a+1)){
                                        echo $b;
                                    }
                                 }?>
                                </td>
                                <td style="text-align: center;">
                                    <a data-original-title="查看会员信息" rel="tooltip" class="btn btn-small  btn-primary" href="<?=$this->url('user/user_details')?>?id=<?=$v["id"]?>"><i class="icon-user-md"></i>
                                    </a>
                                    <a href="<?=$this->url("user/user_up")?>?id=<?=$v["id"]?>" rel="tooltip" class="btn btn-small btn-success" title="修改会员信息"><i class="icon-edit"></i>
                                    </a>
                                    
                                    <a data-original-title="查看订单信息" rel="tooltip" class="btn btn-small  btn-info" href="<?=$this->url('user/user_rorder')?>?id=<?=$v["id"]?>"><i class="icon-shopping-cart"></i>
                                    </a>
                                    <a data-original-title="查看发票信息" rel="tooltip" class="btn btn-small btn-warning" href="<?=$this->url("user/user_invoice")?>?id=<?=$v["id"]?>"><i class="icon-money"></i>
                                    </a>
                                    <a href="javascript:pub_alert_confirm(this,'确定要删除吗？','<?=$this->url("user/user_de")?>?id=<?=$v["id"]?>');" class="btn btn-small btn-danger" title="删除会员" rel="tooltip"><i class="icon-remove"></i></a>
                                    
                                    
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