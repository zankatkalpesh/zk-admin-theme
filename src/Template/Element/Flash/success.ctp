<?php
$class = 'alert alert-success alert-dismissable message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="<?=$class;?>">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<!--<strong>Success!</strong>--> <?=$message;?>
</div>