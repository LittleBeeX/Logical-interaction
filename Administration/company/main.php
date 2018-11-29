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
							<a href="<?=$this->url("company/input")?>"><span><i class="icon-book"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">填写信息</font></font></span></a>
						</li>
						&nbsp;&nbsp;<i class="icon-arrow-right"></i>
						<li class="lightred">
						<?if($r2!=0){?>
							<span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r2;?></font></font></span>
						<?}?>
							<a href="<?=$this->url("company/stay")?>"><span><i class="icon-print"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">待审列表</font></font></span></a>
						</li>
						&nbsp;&nbsp;<i class="icon-arrow-right"></i>
						<li class="blue">
						<?if($r3!=0){?>
							<span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r3;?></font></font></span>
						<?}?>
							<a href="<?=$this->url("company/fail")?>"><span><i class="icon-bookmark"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">审核失败</font></font></span></a>
						</li>
						&nbsp;&nbsp;<i class="icon-arrow-right"></i>
						<li class="brown">
						<?if($r4!=0){?>
							<span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r4;?></font></font></span>
						<?}?>
							<a href="<?=$this->url("company/success")?>"><span><i class="icon-exchange"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">审核成功</font></font></span></a>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
