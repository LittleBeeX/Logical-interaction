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
						修改权限组
					</h3>
				</div>
				<div class="box-content nopadding">
					<form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('system/group_up_ajax')?>" name="form_system" id="form_system">
						<input type="hidden" name="id" value="<?=$sginfo['groupid']?>">
						<div class="control-group">
							<label for="" class="control-label">权限组名称</label>
							<div class="controls">
								<input type="text" name="data[title]" value="<?=$sginfo['title']?>" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
							</div>
						</div>

	                    <div class="control-group">
							<label  class="control-label">状态</label>
							<div class="controls">
								<select name="data[state]" id="state" class="input-xlarge">
	                                <option value="1" <?if($sginfo['state']==1){echo "selected";}?>>已启用</option>
	                                <option value="0" <?if($sginfo['state']==0){echo "selected";}?>>未启用</option>
	                            </select>
							</div>
						</div>

						<div class="form-actions">
							<input type="submit" class="btn btn-primary" value="提交">&nbsp;&nbsp;&nbsp;
							<input type="button" class="btn btn-primary" value="返回列表" onclick='returnList()'>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script>
//返回列表
	function returnList(){
		window.history.back(-1);
        //window.location.href='<?=$this->url("system/role")?>';
	}
</script>