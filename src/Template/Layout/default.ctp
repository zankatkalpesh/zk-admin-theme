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
    <?php
    if (!empty($zkTheme['defaultStyle'])) {
        $zkTheme['defaultStyle'] = (is_array($zkTheme['defaultStyle'])) ? $zkTheme['defaultStyle'] : [$zkTheme['defaultStyle']];
        //pr($zkTheme['defaultStyle']);exit;
        foreach ($zkTheme['defaultStyle'] as $zkStyle) {
            $zkStyle             = (is_array($zkStyle)) ? $zkStyle : [$zkStyle];
            $zkStyle[1]['block'] = (!empty($zkStyle[1]['block'])) ? $zkStyle[1]['block'] : 'css';
            if (isset($zkStyle[0]) && isset($zkStyle[1])) {
                $this->Html->css($zkStyle[0], $zkStyle[1]);
            }
        }
    }
    if (!empty($zkTheme['defaultScript'])) {
        $zkTheme['defaultScript'] = (is_array($zkTheme['defaultScript'])) ? $zkTheme['defaultScript'] : [$zkTheme['defaultScript']];
        foreach ($zkTheme['defaultScript'] as $zkScript) {
            $zkScript             = (is_array($zkScript)) ? $zkScript : [$zkScript];
            $zkScript[1]['block'] = (!empty($zkScript[1]['block'])) ? $zkScript[1]['block'] : 'script';
            if (isset($zkScript[0]) && isset($zkScript[1])) {
                $this->Html->script($zkScript[0], $zkScript[1]);
            }
        }
    }
    ?>
    <?=$this->fetch('css')?>
    <?=$this->fetch('css_top')?>
    <?=$this->fetch('script')?>
    <?=$this->fetch('script_top')?>
</head>
<body class="body">
    <div id="wrapper">
        <?=$this->Flash->render()?>
        <?=$this->fetch('before_header')?>
        <?=$this->element('header')?>
        <?=$this->fetch('after_header')?>
        <div id="page-wrapper" class="container-fluid">
            <div class="row">
                <div id="sidebar" class="col-md-2">
                    <?=$this->fetch('before_sidebar')?>
                    <?=$this->element('sidebar')?>
                    <?=$this->fetch('after_sidebar')?>
                </div>
                <div id="page-content" class="<?=($zkTheme['rightSidebar']) ? 'col-md-8' : 'col-md-10';?>">
                    <?=$this->fetch('before_content')?>
                    <?=$this->fetch('content')?>
                    <?=$this->fetch('after_content')?>
                </div>
                <?php if ($zkTheme['rightSidebar']) {?>
                    <div id="right-sidebar" class="col-md-2">
                        <?=$this->fetch('before_right_sidebar')?>
                        <?=$this->element('right-sidebar');?>
                        <?=$this->fetch('after_right_sidebar')?>
                    </div>
                <?php }?>
            </div>
        </div>
        <?=$this->fetch('before_footer')?>
            <?=$this->element('footer')?>
        <?=$this->fetch('after_footer')?>
    </div>
    <?=$this->fetch('css_bottom')?>
    <?=$this->Html->script('ZkAdminTheme.bootstrap/bootstrap.min')?>
    <?=$this->fetch('script_bottom')?>
    <?=$this->Html->script('ZkAdminTheme.main')?>
</body>
</html>
