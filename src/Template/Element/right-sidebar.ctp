<header class="container-fluid">
	<?php
	$headerFile = $zkTheme['paths']['templates'] . 'Element' . DS . 'right-sidebar.ctp';
	if (file_exists($headerFile)) {
	    ob_start();
	    include_once $headerFile;
	    echo ob_get_clean();
	} else { ?>
		Right Sidebar
	<?php } ?>
</header>