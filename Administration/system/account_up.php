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
					<h3>
						<i class="icon-user"> 账号修改</i>
					</h3>
				</div>
				<div class="box-content nopadding">
				<form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('system/account_up_ajax')?>" name="form_system" id="form_system">
					<div class="control-group">
						<label class="control-label">账号</label>
						<div class="controls">
							<input type="text" name="data[username]" id="username" value="<?=$sbinfo['username']?>" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
						</div>
					</div>
                    <div class="control-group">
						<label class="control-label">所属权限组</label>
						<div class="controls">
							<select name="data[groupid]" class="input-xlarge" onchange="categoryif(this.value)">
                            <?if(!empty($sglist)){?>
                                <?foreach($sglist as $k=>$v){?>
                                    <option value="<?=$v['groupid']?>" <?=($sbinfo['groupid']==$v['groupid'])?'selected':''?> ><?=$v['title']?></option>
                                <?}?>
                            <?}?>
                            </select>
						</div>
					</div>

					<div class="control-group category" <?if($sbinfo['groupid']!=4){?>style="display: none;"<?}?>>
    						<label class="control-label">所属经理</label>
    						<div class="controls">
    							<select name="data[pid]" class="input-xlarge" >
                                    <option name="data[pid]" value="0">-请选择-</option>
                                <?if(!empty($sqlist)){?>
                                    <?foreach($sqlist as $kp=>$vp){?>
                                        <option value="<?=$vp['id']?>" <?=($sbinfo['pid']==$vp['id'])?'selected':''?>><?=$vp['username']?></option>
                                    <?}?>
                                <?}?>
                                </select>
    						</div>
    					</div>


					<div class="control-group">
						<label  class="control-label">密码</label>
						<div class="controls">
							<input type="password" name="data[password]" id="password" value=""  placeholder="请输入6-20位长度的密码" class="input-xlarge" data-rule-minlength="2">
        					<span class="help-inline" id="pwdErr">*密码不填默认是原始密码</span>
						</div>
					</div>
					<div class="control-group">
						<label  class="control-label">确认密码</label>
						<div class="controls">
							<input type="password" name="pwd" id="pwd" value=""  placeholder="确认密码" class="input-xlarge" data-rule-minlength="2">
        				</div>
					</div>
                    <div class="control-group">
						<label  class="control-label">手机号</label>
						<div class="controls">
							<input type="text" name="data[mobile]" id="mobile" value="<?=$sbinfo['mobile']?>"  placeholder="手机号" class="input-xlarge" />
        				</div>
					</div>
                    <div class="control-group">
						<label  class="control-label">状态</label>
						<div class="controls">
							<select name="data[state]" id="state" class="input-xlarge">
                                <option value="1" <?if($sbinfo['state']==1){echo "selected";}?>>正常</option>
                                <option value="0" <?if($sbinfo['state']==0){echo "selected";}?>>冻结</option>
                            </select>
						</div>
					</div>
					<div class="control-group category_1">
						<label class="control-label">入职时间</label>
						<div class="controls">
							<input type="text" id="created" name="data[jointime]" value="<?=date('Y-m-d',$sbinfo['jointime'])?>" placeholder="入职时间" class="input-medium datepick valid" />
							<span class="help-block error valid" for="publishtime"></span>
    					</div>
					</div>
					<div class="form-actions">
                        <input type="hidden" name="id" value="<?=$sbinfo['id']?>" />
						<input type="submit" class="btn btn-primary" value="确认修改" />
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
<script>
    $(document).ready(function(){
        $('#frist').click(function(){
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