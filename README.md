Yandex Metrika
===================
Widget places yandex metrika counter

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require andrewdanilov/yii2-yandex-metrika "~1.1.0"
```

or add

```
"andrewdanilov/yii2-yandex-metrika": "~1.1.0"
```

to the `require` section of your `composer.json` file.


Usage
-----

```php
<?= \andrewdanilov\yandexmetrika\YandexMetrika::widget([
	'id' => 123456789,
	'clickmap' => false, // default true
	'trackLinks' => false, // default true
	'accurateTrackBounce' => false, // default true
	'webvisor' => false, // default true
]) ?>
```

If _YII_ENV_ global constant is equal to _'dev'_, then counter will be disabled and counter code will not be displayed.
