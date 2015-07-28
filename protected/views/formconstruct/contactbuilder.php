<?php


return array(
    'title'=>'Контактная форма',
    'elements' => array(
      'name'=>array(
          'type'=>'text',
      ),
      'email'=>array(
          'type'=>'text',
      ),
      'subject'=>array(
          'type'=>'text',
      ),
      'body'=>array(
          'type'=>'textarea',
      ),

    ),
    'buttons' => array(
      'contact'=>array(
          'type'=>'submit',
          'label'=>'Отправить'
      )
    ),


);