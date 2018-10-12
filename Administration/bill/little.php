<script src="/public/assets/sysadmin/js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
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
                        LITTLE报表管理
                    </h3>

                    <div class="actions">
                        <a rel="tooltip" data-original-title="上传" href="#track" class="btn btn-danger" data-toggle="modal">
                            <i class="icon-cloud-upload"></i> 上传报表(EXCEL格式)
                        </a>
                        <a  rel="tooltip" data-original-title="下载" href="<?=$this->url('bill/little_down')?>" class="btn btn-danger">
                             <i class="icon-cloud-download"></i>下载报表(EXCEL格式)
                        </a>
                        
                        <a rel="tooltip" data-original-title="添加" href="<?=$this->url('bill/little_in')?>" class="btn btn-danger">
                            <i class="icon-plus"></i> 新增LITTLE报表
                        </a>
                        
                    </div>

                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">序号</th>
                                <th style="text-align: center;">转账时间</th>
                                <th style="text-align: center;">收款方</th>
                                <th style="text-align: center;">类型</th>
                                <th style="text-align: center;">约束条件</th>
                                <th style="text-align: center;">转账数量</th>
                                <th style="text-align: center;">GAS(ETH)费用</th>
                                <th style="text-align: center;">转账钱包</th>
                                <th style="text-align: center;">操作人员</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                     <tbody id= "zhajax">
                        <?foreach($sglist as $key=>$val){?>
                            <tr>
                                <td><?=$key+1?></td>
                                <td><?=date('Y-m-d',$val['ctime'])?></td>
                                <td><?=$val['collect']?></td>
                                <td>
                                  <?foreach ($bill_type1 as $key => $value) {
                                   if($key==$val['type']){echo  $value;}
                                 }?>
                                </td>
                                <td>
                                 <?foreach ($bill_cons1 as $key => $value) {
                                   if($key==$val['cons']){echo  $value;}
                                 }?>
                                 </td>
                                <td><?=$val['number']?></td>
                                <td><?=$val['gas']?></td>
                                <td>
                                 <?foreach ($bill_wallet1 as $key => $value) {
                                   if($key==$val['wallet']){echo  $value;}
                                 }?>
                                </td>
                                <td>
                                <?foreach($sglist2 as $key=>$v){?>
                                <?if($val['oper']==$v['id']){echo $v['username'];}?>
                                <?}?>
                                </td>
                                <td>
                                    <a href="<?=$this->url("bill/little_details")?>?id=<?=$val["id"]?>" rel="tooltip" class="btn btn-small btn-primary" title="详情"><i class="icon-eye-open"></i></a>
                                    <a data-original-title="修改" rel="tooltip" class="btn btn-small btn-success" href="/index.php/<?=$this->languageName?>/sysadmin/bill/little_up?id=<?=$val['id']?>"><i class="icon-edit"></i></a>
                                    <a href="javascript:pub_alert_confirm(this,'确定要删除吗？','<?=$this->url("bill/little_de")?>?id=<?=$val["id"]?>');" class="btn btn-small btn-danger" rel="tooltip" title="删除"><i class="icon-remove"></i></a>
                                    
                                </td>
                            </tr>
                        <?}?>
                         
                    </tbody>

                        <!-- <tfoot> <tr>
                         <TD colspan="11" float= 'right' id = 'page'> <?php echo $str;?></TD>
                        </tr></tfoot> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


    <div id="track" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">添加内容</h3>
        </div>
        <form action="<?=$this->url("bill/littleUpExcel")?>" method="POST" class="form-horizontal form-bordered form-validate" name="track_in" id="track_in">
            <div class="control-group">
                <label for="textfield" class="control-label" style="width:55px;">内容</label>
                <div class="controls" style="margin-left:55px">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="input-append">
                            <div class="uneditable-input span3">
                                <i class="icon-file fileupload-exists"></i> 
                                <span class="fileupload-preview"></span>
                            </div>
                            <span id="ss" class="btn btn-file">
                                <span class="fileupload-new">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">选择文件</font>
                                    </font>
                                </span>
                                <span class="fileupload-exists">重新选择</span>
                                <input type="file" name="file_little">
                            </span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">清除</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <input type="hidden" name='bid' value="<?=$id?>" />
                <input type="submit" id="as" class="btn btn-primary" value="保存" />
                <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
            </div>
        </form>
    </div>



<script type="text/javascript">
function khajax(b,a)
    {
        $.ajax({
            url :"little_Ajax",
            type :"get",
            data :{"page":b},
            dataType : "json",
            success:function(e){
                 $('#page').html(e.page);
                $('#zhajax').html(e.data);
            } 
        });
    }
function getInput()
{
    var s=$('#directtopage').val();
    khajax(s,1);
}
$(function(){
    $("#as").click(function(){
       if($("#ss input").val() == "") {
        　　alert("请上传EXCEL文件 ！");
    　　}else{
            window.location.reload(); 
        }
    })
})
</script>