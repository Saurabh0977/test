<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
/*
$hook['display_override'] = array(
    'class' => 'ReplaceToken',
    'function' => 'replacecode',
    'filename' => 'ReplaceToken.php',
    'filepath' => 'hooks'
);
*/
$hook['pre_controller'][] = array(
    'class' => 'Precon',
    'function' => 'beforecon',
    'filename' => 'Precon.php',
    'filepath' => 'hooks',
    'params' => array('saurabh' , 'sarika')
);