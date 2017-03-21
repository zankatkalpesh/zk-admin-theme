<footer class="container-fluid">
	<?php
	$footerFile = $zkTheme['paths']['templates'] . 'Element' . DS . 'footer.ctp';
	if (file_exists($footerFile)) {
	    ob_start();
	    include_once $footerFile;
	    echo ob_get_clean();
	} else { ?>
		<div class="row">
			<div class="col-md-4"> left
			</div>
			<div class="col-md-4 col-md-offset-4"> right
			</div>
		</div>
	<?php } ?>
</footer>
