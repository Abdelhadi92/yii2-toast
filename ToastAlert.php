<?php
namespace abushamleh\toastAlert;

use yii\base\Widget;
use yii\helpers\Json;

/**
 * Widget of the toast item
 */
class Toast extends Widget
{
    public $options = [];
    public $heading;
    public $text;
    public $type;


    public function init()
    {
        parent::init();
        $this->options['heading'] = $this->heading;
        $this->options['text'] = $this->text;
        $this->options['loaderBg'] = '#ff6849';
        $this->options['stack'] = '6';
        if(!empty($this->type))
            $this->options['icon'] = $this->type;
        if(empty($this->options['position'])){
            $this->options['position'] = 'top-right';
        }
    }
    /**
     * @return string
     */
    public function run()
    {
        $view = $this->getView();
        ToastAsset::register($this->view);
        $options = Json::encode($this->options);
        $view->registerJs('$.toast('.$options.');');
    }
}