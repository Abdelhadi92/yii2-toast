<?php
namespace common\widgets\toastrAlert;

use yii\web\AssetBundle;

/**
 * Asset Bundle of the Toastr widget. Registers required CSS and JS files.
 */
class ToastrAsset extends AssetBundle
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