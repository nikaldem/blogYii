<?php $form = $this->beginWidget('CActiveForm',array(
    'id' =>'contact-form',
// Включаем Widget для построения формы
    'enableClientValidation'=>true,
    //'enableAjaxValidation'=>true,
));
?>
    <?php echo $form->errorSummary($model); // Выдача всех ошибок заполнения формы  ?>

    <div class="row">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password'); ?>
    </div>

<?php echo CHtml::submitButton("Авторизовать"); ?>


<? $this->endWidget() ?>

