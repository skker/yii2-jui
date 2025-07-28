<p align="center">
    <a href="https://jqueryui.com/" target="_blank" rel="external">
        <img src="https://brand.jquery.org/resources/jqueryui-mark-dark.gif" height="110px">
    </a>
    <h1 align="center">JUI Extension for Yii 2</h1>
    <br>
</p>

This is the JQuery UI extension for [Yii framework 2.0](https://www.yiiframework.com). It encapsulates [JQuery UI widgets](https://jqueryui.com/) as Yii widgets,
and makes using JQuery UI widgets in Yii applications extremely easy.

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist skker/yii2-jui
```

or add

```
"skker/yii2-jui": "~2.0.0"
```

to the require section of your `composer.json` file.

Usage
-----

The following
single line of code in a view file would render a [JQuery UI DatePicker](https://api.jqueryui.com/datepicker/) widget:

```php
<?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>
```

Configuring the Jquery UI options should be done using the clientOptions attribute:

```php
<?= yii\jui\DatePicker::widget(['name' => 'attributeName', 'clientOptions' => ['defaultDate' => '2014-01-01']]) ?>
```

If you want to use the JUI widget in an ActiveForm, it can be done like this:

```php
<?= $form->field($model,'attributeName')->widget(DatePicker::className(),['clientOptions' => ['defaultDate' => '2014-01-01']]) ?>
```

