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
						<?if((count($r1))!=0){?>
							<span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r1);?></font></font></span>
						<?}?>
							<a href="<?=$this->url("company_cay/regist")?>"><span><i class="icon-book"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申请</font></font></span></a>
						</li>
						&nbsp;&nbsp;<i class="icon-arrow-right"></i>
						<li class="lightred">
						<?if((count($r2))!=0){?>
							<span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r2);?></font></font></span>
						<?}?>
							<a href="<?=$this->url("company_cay/wait")?>"><span><i class="icon-print"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单审核</font></font></span></a>
						</li>
						&nbsp;&nbsp;<i class="icon-arrow-right"></i>
						<li class="blue">
						<?if((count($r3))!=0){?>
							<span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r3);?></font></font></span>
						<?}?>
							<a href="<?=$this->url("company_cay/sign")?>"><span><i class="icon-bookmark"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文件签署</font></font></span></a>
						</li>
						&nbsp;&nbsp;<i class="icon-arrow-right"></i>
						<li class="brown">
						<?if((count($r4))!=0){?>
							<span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r4);?></font></font></span>
						<?}?>
							<a href="<?=$this->url("company_cay/report")?>"><span><i class="icon-exchange"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册申报</font></font></span></a>
						</li>
						&nbsp;&nbsp;<i class="icon-arrow-right"></i>
						<li class="satgreen">
						<?if((count($r5))!=0){?>
							<span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r5);?></font></font></span>
						<?}?>
							<a href="<?=$this->url("company_cay/check")?>"><span><i class="icon-globe"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册审查</font></font></span></a>
						</li>
						&nbsp;&nbsp;<i class="icon-arrow-right"></i>
						<li class="orange">
						<?if((count($r6))!=0){?>
							<span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?echo count($r6);?></font></font></span>
						<?}?>
							<a href="<?=$this->url("company_cay/finish")?>"><span><i class="icon-leaf"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册完成</font></font></span></a>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
