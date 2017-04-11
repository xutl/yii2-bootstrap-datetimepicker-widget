<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\bootstrap\datetimepicker;

use yii\web\AssetBundle;

class DatetimePickerAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@vendor/xutl/yii2-bootstrap-datetimepicker-widget/assets';

	/**
     * @inherit
     */
    public $css = [
        'css/bootstrap-datetimepicker.min.css',
    ];

    /**
     * @inherit
     */
    public $js = [
        'js/bootstrap-datetimepicker.min.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}