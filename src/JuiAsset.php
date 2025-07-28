<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace skker\jui;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class JuiAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    // public $sourcePath = '@bower/jquery-ui';
    /**
     * {@inheritdoc}
     */
    public $js = [
        // 'jquery-ui.js',
        'https://code.jquery.com/ui/1.14.1/jquery-ui.js',
    ];
    /**
     * {@inheritdoc}
     */
    public $css = [
        // 'themes/smoothness/jquery-ui.css',
        'https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css',
    ];
    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
