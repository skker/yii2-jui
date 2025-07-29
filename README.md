This JQuery UI extension is forked from [yiisoft/yii2-jui] (https://github.com/yiisoft/yii2-jui). It uses JQuery UI 1.14.1

## Installation

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist skker/yii2-jui
```

or add

```
"skker/yii2-jui": "dev-master"
```

to the require section of your `composer.json` file.

## Usage

The following
single line of code in a view file would render a [JQuery UI DatePicker](https://api.jqueryui.com/datepicker/) widget:

```php
<?= skker\jui\DatePicker::widget(['name' => 'attributeName']) ?>
```

Configuring the Jquery UI options should be done using the clientOptions attribute:

```php
<?= skker\jui\DatePicker::widget(['name' => 'attributeName', 'clientOptions' => ['defaultDate' => '2014-01-01']]) ?>
```

If you want to use the JUI widget in an ActiveForm, it can be done like this:

```php
<?= $form->field($model,'attributeName')->widget(DatePicker::className(),['clientOptions' => ['defaultDate' => '2014-01-01']]) ?>
```
