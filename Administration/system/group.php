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
						权限组列表
					</h3>
					<div class="actions">
						<a rel="tooltip" data-original-title="添加" href="<?=$this->url('system/group_in')?>" class="btn btn-danger"><i class="icon-plus"></i> 添加权限组</a>
					</div>
				</div>
				<div class="box-content nopadding">
					<table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
						<thead>
							<tr>
								<th width="25%">ID</th>
								<th width="25%">权限组名称</th>
								<th width="25%">状态</th>
								<th width="10%">操作</th>
							</tr>
						</thead>	

						<tbody>
							<?foreach($sglist as $value){?>
							<tr>
								<td><?=$value['groupid']?></td>
								<td><?=$value['title']?></td>
								<td><?=$value['state']==0?'<span class="label label-inverse">未启用</span>':'<span class="label label-success">启用</span>'?></td>
								<td>
									<a data-original-title="修改" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url('system/group_up')?>?id=<?=$value["groupid"]?>"><i class="icon-edit"></i></a>
									<a class="btn btn-small btn-primary" data-original-title="授权" rel="tooltip" href="javascript:pub_alert_html('<?=$this->url('system/group_shouquan')?>?id=<?=$value["groupid"]?>');"  ><i class="icon-lock"></i></a>
									<a href="javascript:pub_alert_confirm(this,'确定要删除吗？','<?=$this->url("system/group_de")?>?id=<?=$value["groupid"]?>');" class="btn btn-small btn-danger" title="删除"><i class="icon-remove"></i></a>
								</td>

							</tr>
							<?}?>
						</tbody>
					</table>
					<form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
