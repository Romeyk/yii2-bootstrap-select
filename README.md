Select widget for Yii2
=========================

[![Latest Stable Version](https://poser.pugx.org/romeyk/yii2-bootstrap-select/v)](//packagist.org/packages/romeyk/yii2-bootstrap-select)
[![Total Downloads](https://poser.pugx.org/romeyk/yii2-bootstrap-select/downloads)](//packagist.org/packages/romeyk/yii2-bootstrap-select)
[![License](https://poser.pugx.org/romeyk/yii2-bootstrap-select/license)](//packagist.org/packages/romeyk/yii2-bootstrap-select)

Yii2 wrapper for [bootstrap-select](https://github.com/snapappointments/bootstrap-select).

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). Check the [composer.json](https://github.com/toxor88/yii2-widget-switchery/blob/master/composer.json) for this extension's requirements and dependencies.

To install, either run

```
$ php composer.phar require romeyk/yii2-bootstrap-select "~1.0"
```

or add

```
"romeyk/yii2-bootstrap-select": "~1.0"
```

to the ```require``` section of your `composer.json` file.

## Demo

You can view demo and examples [here](https://developer.snapappointments.com/bootstrap-select/examples/).

## Usage

```php
<?= $form->field($model, 'attribute')->widget(SelectPicker::class, [
    'items' => ArrayHelper::map(User::find()->all(), 'id', 'email'),
    'options' => [
        'prompt' => '',
        'multiple' => true,
    ],  
    'clientOptions' => [
        'liveSearch' => true,
        'noneSelectedText' => '',
        'styleBase' => 'form-control',
        'style' => '',
    ],
    'clientEvents' => [],
]) ?>
```