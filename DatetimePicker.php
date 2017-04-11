<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\bootstrap\datetimepicker;

use yii\widgets\InputWidget;

/**
 * Class DatetimePicker
 * @package xutl\bootstrap\datetimepicker
 */
class DatetimePicker extends InputWidget
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if (!isset ($this->options ['id'])) {
            $this->options ['id'] = $this->getId();
        }
    }
}