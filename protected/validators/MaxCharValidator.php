<?php

class MaxCharValidator extends CValidator
{
    protected function validateAttribute($model,$attribute)
    {
        $value = $model->$attribute;

        if(strlen($value) > 10)
        {
            //$model->addError("'name", "В поле 'name 'максимальное кол-во символов равно 10");
            $model->addError("'name", Yii::t("main","Макс кол-во символов в поле (attribute) = 10", array("(attribute)" => $attribute)));

        }

    }


}