<?php

namespace filsh\yii2\timepicker;

class TimePickerAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower';
    
    /**
     * @inheritdoc
     */
    public $js = [
        'jt.timepicker/jquery.timepicker.js'
    ];
    
    /**
     * @inheritdoc
     */
    public $css = [
        'jt.timepicker/jquery.timepicker.css'
    ];
    
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
