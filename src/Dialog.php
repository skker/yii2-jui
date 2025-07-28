<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace skker\jui;

use yii\helpers\Html;

/**
 * Dialog renders an dialog jQuery UI widget.
 *
 * For example:
 *
 * ```php
 * Dialog::begin([
 *     'clientOptions' => [
 *         'modal' => true,
 *     ],
 * ]);
 *
 * echo 'Dialog contents here...';
 *
 * Dialog::end();
 * ```
 *
 * @see https://api.jqueryui.com/dialog/
 * @author Alexander Kochetov <creocoder@gmail.com>
 * @since 2.0
 */
class Dialog extends Widget
{
    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        echo Html::beginTag('div', $this->options) . "\n";

        //Fix for closing icon (x) not showing up in dialog
        $this->getView()->registerJs("
            if ($.fn.button) {
                var bootstrapButton = $.fn.button.noConflict();
                $.fn.bootstrapBtn = bootstrapButton;
            }",
            \yii\web\View::POS_READY
        );
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo Html::endTag('div') . "\n";
        $this->registerWidget('dialog');
    }
}
