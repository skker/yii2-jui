<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace skker\jui;

use yii\web\AssetBundle;

class JuiAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $js = [
        'https://code.jquery.com/ui/1.14.1/jquery-ui.js',
    ];
    /**
     * {@inheritdoc}
     */
    public $css = [
        'https://code.jquery.com/ui/1.14.1/themes/smoothness/jquery-ui.css',
    ];
    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
