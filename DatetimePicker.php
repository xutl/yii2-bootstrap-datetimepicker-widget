<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace xutl\bootstrap\datetimepicker;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\widgets\InputWidget;

/**
 * Class DatetimePicker
 * @package xutl\bootstrap\datetimepicker
 */
class DatetimePicker extends InputWidget
{

    public $language;

    public $clientOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if (!isset ($this->options ['id'])) {
            $this->options ['id'] = $this->getId();
        }
        if (!isset($this->options['class'])) {
            $this->options['class'] = 'form-control';
        }
        $this->clientOptions = array_merge([
            'weekStart' => 1,
            'autoclose' => true,
            'minView' => 'hour',
            'todayBtn' => true,
            'todayHighlight' => true,
            'format' => 'yyyy-mm-dd hh:ii',
        ], $this->clientOptions);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $language = $this->language ? $this->language : Yii::$app->language;
        echo Html::beginTag('div', ['class' => 'input-append date']);
        if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }
        echo Html::endTag('div');
        $view = $this->getView();
        $assetBundle = DatetimePickerAsset::register($view);
        $assetBundle->language = $language;
        $options = empty ($this->clientOptions) ? '' : Json::htmlEncode($this->clientOptions);
        $this->view->registerJs("jQuery(\"#{$this->options['id']}\").datetimepicker({$options});");
    }
}