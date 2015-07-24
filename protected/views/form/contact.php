<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'contact-form',
    'enableClientValidation'=>true,
    //'enableAjaxValidation'=>true,));
// Включаем Widget для построения формы  ?>

    <?php echo $form->errorSummary($model); // Выдача всех ошибок заполнения формы ?>

    <div class="row">
        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'subject'); ?>
        <?php echo $form->textField($model,'subject'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'body'); ?>
        <?php echo $form->textArea($model,'body'); ?>
    </div>

    <?php if(CCaptcha::checkRequirements()): ?>
    <div class="row">
        <?php echo $form->labelEx($model,'verifyCode'); ?>
        <div>
            <?php $this->widget('CCaptcha', array('buttonLabel' => 'Генерировать новый код Captcha')); ?>
            <?php echo $form->textField($model,'verifyCode'); ?>
        </div>
    </div>
    <?php endif; ?>

    <?php echo CHtml::submitButton("Отправить"); ?>

<? $this->endWidget() ?>
