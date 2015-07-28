<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'contact-form',
    'enableClientValidation'=>true,
    //'enableAjaxValidation'=>true,
    ));
// Включаем Widget для построения формы  ?>

<?php echo $form->errorSummary($model); // Выдача всех ошибок заполнения формы ?>

<div class="row">
    <?php echo $form->labelEx($model,'login'); ?>
    <?php echo $form->textField($model,'login'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'password'); ?>
    <?php echo $form->passwordField($model,'password'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'compare_password'); ?>
    <?php echo $form->passwordField($model,'compare_password'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'email'); ?>
    <?php echo $form->textArea($model,'email'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'gender'); ?>
    <?php echo $form->dropDownList($model,'gender', array('Мужской','Женский')); ?>
</div>


<?php echo CHtml::submitButton("Регистрировать"); ?>

<? $this->endWidget() ?>


