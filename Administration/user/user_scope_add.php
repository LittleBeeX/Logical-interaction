
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
                        <i class="icon-user"></i>
                        经营范围添加
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                <form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('user/user_scope_add_ajax')?>?oid=<?=$oid?>" name="form_bill" id="form_bill">
                    <div class="control-group">
                        <label class="control-label">经营范围</label>
                        <div class="controls">
                            <select id="scope_business"name="data[describe]">
                            <?foreach ($scope_business as $k => $v) {?>
                                <option value="<?=$k?>"><?echo $scope_business[$k]['name'];?></option>
                            <?}?>
                            </select><br><br>
                            <select id="scope_business2" name="data[code]">
                                <?foreach ($scope_business[0]['list'] as $k1 => $v1) {?>
                                <option value="<?=$k1?>"><?echo $k1;?>--<?echo $v1;?></option>
                            <?}?>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" id="btn" class="btn btn-primary" value="确认"style="width: 60px;" />
                        <input type="reset" class="btn btn-primary" value="重置" style="margin-left: 20px;width: 60px;margin-right: 20px;" />
                        <input type="button" id="frist" class="btn btn-primary" value="返回" style="width: 60px;" />
                    </div>
                </form>
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
            //window.location.href="/index.php/sysadmin/system/admin";
        })
    
    });
    $(function(){
       $("#scope_business").change(function() {
            var key = $('#scope_business').val();
            $.ajax({
                url:'<?= $this->url("user/user_up_ajaxA")?>',
                type:'post',
                data:{key:key},
                dataType:'json',
                success:function(e){
                        $("#scope_business2").html(e.info);
                } 
            })
        });
    })


</script>