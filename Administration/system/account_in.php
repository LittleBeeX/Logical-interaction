<link rel="stylesheet" href="/public/plugins/datetimepicker/datetimepicker.css">
<script src="/public/plugins/datetimepicker/datetimepicker.js"></script>
<script src="/public/plugins/datetimepicker/locales/bootstrap-datetimepicker.zh-CN.js"></script>
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
					<h3><i class="icon-user"></i>添加账号</h3>
				</div>
				<div class="box-content nopadding">
					<form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('system/account_in_ajax')?>" name="form_system" id="form_system">
						<div class="control-group">
							<label class="control-label">账号名称</label>
							<div class="controls">
								<input type="text" name="data[username]" value="" placeholder="用户名" class="input-xlarge" data-rule-minlength="2">
							</div>
						</div>

                        <div class="control-group">
    						<label class="control-label">所属权限组</label>
    						<div class="controls">
    							<select name="data[groupid]" class="input-xlarge" onchange="categoryif(this.value)">
                                <?if(!empty($sglist)){?>
                                    <?foreach($sglist as $k=>$v){?>
                                        <option name="data[groupid]" value="<?=$v['groupid']?>"><?=$v['title']?></option>
                                    <?}?>
                                <?}?>
                                </select>
    						</div>
    					</div>

    					<div class="control-group category" style="display: none;">
    						<label class="control-label">所属经理</label>
    						<div class="controls">
    							<select name="data[pid]" class="input-xlarge" >
                                    <option name="data[pid]" value="0">-请选择-</option>
                                <?if(!empty($sqlist)){?>
                                    <?foreach($sqlist as $k=>$v){?>
                                        <option name="data[pid]" value="<?=$v['id']?>"><?=$v['username']?></option>
                                    <?}?>
                                <?}?>
                                </select>
    						</div>
    					</div>

						<div class="control-group">
							<label  class="control-label">密码</label>
							<div class="controls">
								<input type="password" name="data[password]" value="" placeholder="请输入8-20位长度的密码" class="input-xlarge" data-rule-minlength="2">
	                        </div>
						</div>
						<div class="control-group">
							<label  class="control-label">确认密码</label>
							<div class="controls">
								<input type="password" name="pwd" value="" placeholder="请再次确认密码" class="input-xlarge" data-rule-minlength="2">
							</div>
						</div>
                        <div class="control-group">
							<label  class="control-label">手机号</label>
							<div class="controls">
								<input type="text" name="data[mobile]" value="" placeholder="手机号" class="input-xlarge">
							</div>
						</div>
	                    <div class="control-group">
							<label  class="control-label">状态</label>
							<div class="controls">
								<select name="data[state]" class="input-xlarge">
	                                <option value="0">冻结</option>
	                                <option value="1">正常</option>
	                            </select>
							</div>
						</div>
						<div class="control-group category_1">
							<label class="control-label">入职时间</label>
							<div class="controls">
								<input type="text" id="created" name="data[jointime]" value="" placeholder="入职时间" class="input-medium datepick valid" />
								<span class="help-block error valid" for="publishtime"></span>
        					</div>
						</div>
						<div class="form-actions">
							<input type="submit" class="btn btn-primary" value="确认添加" />
	                        <input type="reset" class="btn btn-primary" value="重置" style="width: 60px;margin: 0px 20px;" />
	                        <input type="button" id="first" class="btn btn-primary" value="返回" style="width: 60px;" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script>
    $(document).ready(function(){
        $('#first').click(function(){
            window.history.back(-1);
            //window.location.href="/index.php/sysadmin/system/admin";
        })
    });
    function categoryif(value){
    	if(value == 4){
			$('.category').show();
    	}else{
			$('.category').hide();
    	}
    }
</script>