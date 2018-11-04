## Installation

Run the [Composer](http://getcomposer.org/download/) command to install the latest version:
```
composer require abushamleh/yii2-toast "dev-master"
```

## Usage

### ToastAlert
```php
use abushamleh\toast\ToastAlert;

echo ToastAlert::widget([
    'options'   => [],
    'heading'   => 'heading',
    'text'      => 'text',
    'type'      => 'type',
]);

```

### ToastBlock

ToastBlock widget renders a message from session flash. All flash messages are displayed in the sequence they were assigned using setFlash.
```php
use abushamleh\toast\ToastBlock;

//You can set message as following:
 Yii::$app->session->setFlash('error', 'This is the message');
 Yii::$app->session->setFlash('success', 'This is the message');
 Yii::$app->session->setFlash('info', 'This is the message');

//Multiple messages could be set as follows:
 Yii::$app->session->setFlash('error', ['Error 1', 'Error 2']);

echo ToastBlock::widget([
    'options' => []
]);

```