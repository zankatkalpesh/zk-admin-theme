<!DOCTYPE html>
<html>
<head>
    <?=$this->Html->charset()?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$this->fetch('title')?></title>
    <?=$this->Html->meta('icon')?>
    <?php //$this->Html->css('base.css') ?>
    <?php //$this->Html->css('cake.css') ?>
    <?=$this->fetch('meta')?>
    <?=$this->Html->css(['ZkAdminTheme.bootstrap/css/bootstrap.min', 'ZkAdminTheme.font-awesome/css/font-awesome.min'])?>
    <?=$this->Html->css('ZkAdminTheme.style')?>
    <?=$this->Html->script('ZkAdminTheme.jquery-min')?>
    <?=$this->fetch('css')?>
    <?=$this->fetch('css_top')?>
    <?=$this->fetch('script')?>
    <?=$this->fetch('script_top')?>
</head>
<body>
    <div id="wrapper">
        <?=$this->fetch('header')?>
        <div id="page-wrapper" class="container-fluid">
            <div class="row">
                <div id="page-content" class="col-xs-12">
                    <?=$this->fetch('before_content')?>
                    <?=$this->fetch('content')?>
                    <?=$this->fetch('after_content')?>
                </div>
            </div>
        </div>
        <?=$this->fetch('footer')?>
    </div>
    <?=$this->fetch('css_bottom')?>
    <?=$this->Html->script('ZkAdminTheme.bootstrap/bootstrap.min')?>
    <?=$this->fetch('script_bottom')?>
    <?=$this->Html->script('ZkAdminTheme.main')?>
</body>
</html>