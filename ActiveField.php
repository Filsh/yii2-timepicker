<?php

namespace filsh\yii2\timepicker;

use yii\helpers\Html;
use yii\helpers\Json;

class ActiveField extends \yii\widgets\ActiveField
{
    public function timepickerInput($options = [])
    {
        TimePickerAsset::register($this->form->getView());
        $this->registerScript($options);
        
        return parent::textInput();
    }
    
    protected function registerScript($options = [])
    {
        if($options === false) {
            return;
        }
        
        $configure = !empty($options) ? Json::encode($options) : '';
        if (!isset($options['id'])) {
            $options['id'] = Html::getInputId($this->model, $this->attribute);
        }
        $this->form->getView()->registerJs("jQuery('#{$options['id']}').timepicker($configure);");
    }
}