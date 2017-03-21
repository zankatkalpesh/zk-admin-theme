<header class="container-fluid">
	<?php
	$headerFile = $zkTheme['paths']['templates'] . 'Element' . DS . 'header.ctp';
	if (file_exists($headerFile)) {
	    ob_start();
	    include_once $headerFile;
	    echo ob_get_clean();
	} else { ?>
		<div id="header-top" class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 col-md-offset-3"></div>
		</div>
		<div id="header-nav" class="row">
			<div class="col-md-4">
				<div class="site-logo">
					<?=$this->Html->Link($this->Html->image($zkTheme['logo'], ['alt' => __('Logo'), 'class' => 'img-responsive']), ['controller' => 'Dashboard', 'action' => 'index'], ['escape' => false, 'title' => __('Zk Admin Theme')]);?>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-4">
				<div class="user-details pull-right">
					<ul class="list-inline">
						<li class="dropdown">
							<?=$this->Html->Link('<i class="fa fa-bell-o"></i><span class="badge">0</span>', 'javascript:void(0);', ['escape' => false, 'title' => __('Notifications'), 'id' => "notifications-nav", 'data-toggle' => "dropdown", 'aria-haspopup' => "true", 'aria-expanded' => "false", 'class' => 'nav-icon']);?>
							<ul class="dropdown-menu pull-right" aria-labelledby="notifications-nav">
								<li><a href="#">Not Found!</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<?=$this->Html->image('ZkAdminTheme.user-icon.png', ['alt' => __('Zk Admin Theme'), 'class' => 'img-circle user-avatar']);?>
							<?=$this->Html->Link('Zankat Kalpesh <i class="fa fa-caret-down fa-lg"></i>', 'javascript:void(0);', ['escape' => false, 'title' => __('Zankat Kalpesh'), 'id' => "user-nav", 'data-toggle' => "dropdown", 'aria-haspopup' => "true", 'aria-expanded' => "false"]);?>
							<ul class="dropdown-menu pull-right" aria-labelledby="user-nav">
								<li><a href="#">My Profile</a></li>
								<li><a href="#">Change Password</a></li>
								<li><a href="#">Logout</a></li>
								<li></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="header-bottom" class="row">
			<div class="col-md-3">Dashboard
			</div>
			<div class="col-md-6 col-md-offset-3"> Home / Index
			</div>
		</div>
	<?php } ?>
</header>