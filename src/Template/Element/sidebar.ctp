<?php
$headerFile = $zkTheme['paths']['templates'] . 'Element' . DS . 'sidebar.ctp';
if (file_exists($headerFile)) {
    ob_start();
    include_once $headerFile;
    echo ob_get_clean();
} else {?>
	Sidebar
<?php }?>