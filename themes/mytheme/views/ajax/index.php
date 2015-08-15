<?php

 echo CHtml::form();
?>

Имя: <?=CHtml::textField("name") ?> <br>
Телефон: <?=CHtml::textField("tel") ?> <br>
Доп.инф: <?=CHtml::textField("fname") ?> <br>

<?=CHtml::ajaxLink("Дата сегодня","./ajax/date",array(
    'update' => '#result',
)) ?>

<?=CHtml::ajaxSubmitButton("Отправить","",array(
    'type' => 'POST',
    //'update' => '#result',
    'success' => 'js:function(data)
    {
        alert(data)
    }'
)/*,
    array(
    'type' => 'submit',
    )*/
) ?>

<div id="result"></div>

<?php
 echo CHtml::endForm();
?>
