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
		
			<div class="box">
				<div class="box-content">
					<ul class="tiles tiles-center nomargin">
						<li class="lightgrey">
						<?if($r1!=0){?>
							<span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r1;?></font></font></span>
						<?}?>
							<a href="<?=$this->url("chain/input")?>"><span><i class="icon-book"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">填写信息</font></font></span></a>
						</li>
						&nbsp;&nbsp;<i class="icon-arrow-right"></i>
						<li class="lightred">
						<?if($r2!=0){?>
							<span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r2;?></font></font></span>
						<?}?>
							<a href="<?=$this->url("chain/stay")?>"><span><i class="icon-print"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">待审列表</font></font></span></a>
						</li>
						&nbsp;&nbsp;<i class="icon-arrow-right"></i>
						<li class="blue">
						<?if($r3!=0){?>
							<span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r3;?></font></font></span>
						<?}?>
							<a href="<?=$this->url("chain/fail")?>"><span><i class="icon-bookmark"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">审核失败</font></font></span></a>
						</li>
						&nbsp;&nbsp;<i class="icon-arrow-right"></i>
						<li class="brown">
						<?if($r4!=0){?>
							<span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r4;?></font></font></span>
						<?}?>
							<a href="<?=$this->url("chain/success")?>"><span><i class="icon-exchange"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">审核成功</font></font></span></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-th-list"></i>
                        填写信息列表
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">序号</th>
                                <th style="text-align: center;">姓名</th>
                                <th style="text-align: center;">性别</th>
                                <th style="text-align: center;">国籍</th>
                                <th style="text-align: center;">护照编号</th>
                                <th style="text-align: center;">钱包地址</th>
                                <th style="text-align: center;">持有TOKEN数</th>
                                <th style="text-align: center;">股权占比（%）</th>
                                <th style="text-align: center;">创建时间</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                        <?foreach($list as $k=>$v){?>
                            <tr>
                                <td><?=$k+1?></td>
                                <td><?=$v['surname'].$v['name']?></td>
                                <td><?=$sex[$v['sex']]?></td>
                                <td><?=$phone_codes[$v['nationality']]['country']?></td>
                                <td><?=$v['passports']?></td>
                                <td><?=$v['address']?></td>
                                <td><?=$v['token_number']?></td>
                                <td><?=$v['token_proportion']?></td>
                                <td><?=date('Y-m-d',$v['create_time'])?></td>
                                <td>
                                    <a data-original-title="查看详情" rel="tooltip" class="btn btn-small btn-primary" href="<?=$this->url("chain/se")?>?id=<?=$v["id"]?>"><i class="icon-eye-open"></i></a>
                                <?if($v['state']==1 || $v['state']==3){?>
                                    <a data-original-title="处理" rel="tooltip" class="btn btn-small btn-success" href="<?=$this->url("chain/up")?>?id=<?=$v["id"]?>"><i class="icon-edit"></i></a>
                                <?}?>
                                </td>
                            </tr>
                        <?}?>
                    </table>
                </div>
            </div>
        </div>
    </div>