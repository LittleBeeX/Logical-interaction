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
                        账户管理
                    </h3>
                    <div class="actions">
    					<a rel="tooltip" data-original-title="添加" href="<?=$this->url('system/account_in')?>" class="btn btn-danger">
                            <i class="icon-plus"></i> 添加管理员账号
                        </a>
    				</div>
    			</div>
                
    			<div class="box-content nopadding">
    				<table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
    					<thead>
    						<tr>
    							<th>ID</th>
    							<th>账户</th>
                                <th>所属权限组</th>
    							<th>最后登录时间</th>
                                <th>登录IP</th>
                                <th>账号状态</th>
                                <th>创建时间</th>
                                <th>入职时间</th>
                                <th>操作</th>
    						</tr>
    					</thead>
                     <tbody id= "zhajax">
                        <?foreach($sblist as $key=>$val){?>
                            <tr>
    							<td><?=$val['id']?></td>
    							<td><?=$val['username']?></td>
                                <td><?=$val['title']?></td>
                                <td><?=date('Y-m-d',$val['lasttime'])?></td>
    							<td><?=$val['lastip']?></td>
    							<td><?if($val['state']==0){echo '<font color="red">冻结</font>';}else{echo '<font color="green">正常</font>';}?></td>
                                <td><?=date('Y-m-d',$val['createtime'])?></td>
                                <td><?=date('Y-m-d',$val['jointime'])?></td>
    							<td>
								    <a data-original-title="修改" rel="tooltip" class="btn btn-small btn-success" href="/index.php/<?=$this->languageName?>/sysadmin/system/account_up?id=<?=$val['id']?>"><i class="icon-edit"></i></a>
   								    <a href="javascript:pub_alert_confirm(this,'确定要删除吗？','<?=$this->url("system/account_de")?>?id=<?=$val["id"]?>');" class="btn btn-small btn-danger" title="删除"><i class="icon-remove"></i></a>
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
<script type="text/javascript">
function khajax(b,a)
    {
      
        $.ajax({
            url :"account_Ajax",
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

</script>