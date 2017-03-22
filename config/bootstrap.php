<?php
use Cake\Core\Configure;
use Cake\Core\Exception\MissingPluginException;
use Cake\Core\Plugin;

Configure::write('ZkAdminTheme', [
    'logo'         => 'ZkAdminTheme.logo.png',
    'paths'        => [
        'templates' => Configure::read('App.paths.templates.0'),
    ],
    'rightSidebar' => false,
    'defaultStyle' => '',
    'defaultScript' => '',
]);