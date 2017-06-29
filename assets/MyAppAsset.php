<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MyAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/site.css',
    ];
    public $js = [
    'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js',
    'https://oss.maxcdn.com/respond/1.4.2/respond.min.js'
    ];

    public $jsOptions =[
        'condition'=>'lt IE 9',
        'position'=>\yii\web\View::POS_HEAD,
    ];
}
