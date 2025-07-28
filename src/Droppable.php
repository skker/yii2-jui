<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace skker\jui;

use yii\helpers\Html;

/**
 * Droppable renders an droppable jQuery UI widget.
 *
 * For example:
 *
 * ```php
 * Droppable::begin([
 *     'clientOptions' => ['accept' => '.special'],
 * ]);
 *
 * echo 'Droppable body here...';
 *
 * Droppable::end();
 * ```
 *
 * @see https://api.jqueryui.com/droppable/
 * @author Alexander Kochetov <creocoder@gmail.com>
 * @since 2.0
 */
class Droppable extends Widget
{
    /**
     * {@inheritdoc}
     */
    protected $clientEventMap = [
        'activate' => 'dropactivate',
        'create' => 'dropcreate',
        'deactivate' => 'dropdeactivate',
        'drop' => 'drop',
        'out' => 'dropout',
        'over' => 'dropover',
    ];


    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        echo Html::beginTag('div', $this->options) . "\n";
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo Html::endTag('div') . "\n";
        $this->registerWidget('droppable');
    }
}
