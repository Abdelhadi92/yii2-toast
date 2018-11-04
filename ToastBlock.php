<?php
namespace abushamleh\toastAlert;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

/**
 * Alert widget renders a message from session flash. All flash messages are displayed
 * in the sequence they were assigned using setFlash. You can set message as following:
 *
 * ```php
 * Yii::$app->session->setFlash('error', 'This is the message');
 * Yii::$app->session->setFlash('success', 'This is the message');
 * Yii::$app->session->setFlash('info', 'This is the message');
 * Yii::$app->session->setFlash('error', ['heading' => 'heading', 'text' => 'text text']);
 * ```
 *
 * Multiple messages could be set as follows:
 *
 * ```php
 * Yii::$app->session->setFlash('error', ['Error 1', 'Error 2']);
 * ```
 *
 */
class ToastAlert extends Widget
{
    public $options = [];

    protected $alertTypes = [
        'info'    => 'info',
        'error'   => 'error',
        'success' => 'success',
        'warning' => 'warning'
    ];


    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $session = Yii::$app->session;
        $flashes = $session->getAllFlashes();

        foreach ($flashes as $type => $flash) {
            if (!isset($this->alertTypes[$type])) {
                continue;
            }

            foreach ((array) $flash as $i => $message) {
                if(is_array($message)){
                    $heading = ArrayHelper::getValue($message, 'title');
                    $text = ArrayHelper::getValue($message, 'body');
                }else{
                    $heading = null;
                    $text = $message;
                }

                echo Toast::widget([
                    'options'   => $this->options,
                    'heading'   => $heading,
                    'text'      => $text,
                    'type'      => $type,
                ]);
            }
            $session->removeFlash($type);
        }
    }
}
