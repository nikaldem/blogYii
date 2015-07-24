<?php $form = $this->beginWidget('CActiveForm',array('id' =>'contact-form',));
// Включаем Widget для построения формы  ?>
    <div class="row">
        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'name'); ?>
    </div>



<? $this->endWidget() ?>

