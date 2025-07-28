<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace skker\jui;

use yii\helpers\Html;

/**
 * Slider renders a slider jQuery UI widget.
 *
 * ```php
 * echo Slider::widget([
 *     'clientOptions' => [
 *         'min' => 1,
 *         'max' => 10,
 *     ],
 * ]);
 * ```
 *
 * @see https://api.jqueryui.com/slider/
 * @author Alexander Makarov <sam@rmcreative.ru>
 * @since 2.0
 */
class Slider extends Widget
{
    /**
     * @inheritDoc
     */
    protected $clientEventMap = [
        'change' => 'slidechange',
        'create' => 'slidecreate',
        'slide' => 'slide',
        'start' => 'slidestart',
        'stop' => 'slidestop',
    ];


    /**
     * Executes the widget.
     */
    public function run()
    {
        echo Html::tag('div', '', $this->options);
        $this->registerWidget('slider');
    }
}
