<?php
$headerFile = $zkTheme['paths']['templates'] . 'Element' . DS . 'sidebar.ctp';
if (file_exists($headerFile)) {
    ob_start();
    include_once $headerFile;
    echo ob_get_clean();
} else {?>
	<div class="row">
		<nav class="navbar">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navSidebar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navSidebar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Dashboard</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1-1 <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Page 1-1-1</a></li>
									<li><a href="#">Page 1-1-2</a></li>
								</ul>
							</li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li><a href="#">Page 2</a></li>
					<li><a href="#">Page 3</a></li>
				</ul>
			</div>
		</nav>
	</div>
<?php }?>