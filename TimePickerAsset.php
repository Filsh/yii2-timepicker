<?php

namespace filsh\yii2\timepicker;

class TimePickerAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/jt.timepicker';

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
    
    /**
     * @inheritdoc
     */
    public $js = [
        'jquery.timepicker.js'
    ];
    
    /**
     * @inheritdoc
     */
    public $css = [
        'jquery.timepicker.css'
    ];
}
