<?php
namespace abushamleh\toast;

use yii\web\AssetBundle;

/**
 * Asset Bundle of the Toast widget. Registers required CSS and JS files.
 */
class ToastAsset extends AssetBundle
{

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        $this->css = [
            'css/jquery.toast.css'
        ];
        $this->js = [
            'js/jquery.toast.js'
        ];
        parent::init();
    }
}