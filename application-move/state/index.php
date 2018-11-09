<link rel="stylesheet" href="/public/plugins/datetimepicker/datetimepicker.css">
<script src="/public/plugins/datetimepicker/datetimepicker.js"></script>
<script src="/public/plugins/datetimepicker/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<div id="main">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="box box-color box-bordered">
                    <div class="box-title">
                        <h3>
                            <i class="icon-th-list"></i>
                           未支付列表
                        </h3>
                    </div>
                    <div class="box-content nopadding">
                        <form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url("state/index_ajax")?>" name="form" id="form">
                            <table class="table table-hover table-nomargin dataTable table-bordered" >
                                <thead>
                                    <tr>
                                        
                                        <th style="text-align: center;"width="30px">会员账户及注册名称</th>
                                        <th style="text-align: center;">操作</th>
                                    </tr>
                                </thead>
                            <tbody id= "zhajax">
                            <?foreach($order as $k=>$v){?>
                                <tr>
                                    <td width="30px" style="font-size: 15px;">
                                    <?foreach ($user as $x => $r) {
                                        foreach ($rorder as $key => $value) {
                                        if($value['id']==$v['oid']){
                                            if($r['id']==$v['uid']){
                                            echo $r['account'].'<br/>';
                                            echo "注册订单".($key+1).'号'.'<br/>'; 
                                            echo "支付订单".($k+1).'号'.'<br/>'; 
                                            $a = explode("@",$value['name']); 
                                            echo $a[0];
                                            }
                                        }
                                    }}?>
                                    </td>
                                    <!-- <td  style="text-align: center;" width="30px">
                                    <?foreach ($rorder as $key => $value) {
                                        if($value['id']==$v['oid']){
                                            echo $value['name']; 
                                        }
                                    }?>
                                    </td> -->
                                    <td style="text-align: center;">
                                        <input type="hidden" name="id" value="<?=$v['id']?>" />
                                        <input  type="submit" class="btn btn-small btn-success" value="确认支付" />
                                    </td>
                                </tr>
                            <?}?>
                            </tbody>
                               
                            </table>
                         <!-- <tfoot> <tr>
                             <TD colspan="11" float= 'right' id = 'page'> <?php echo $str;?></TD>
                            </tr></tfoot> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".btn").on('click',function(){
        setTimeout(function(){
            window.location.reload();
        },1000)
    });
</script>