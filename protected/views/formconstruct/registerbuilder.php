<?php

return array(
    'title'=>'Форма регистрации',
    'elements' => array(
        'login'=>array(
            'type'=>'text',
        ),
        'password'=>array(
            'type'=>'password',
        ),
        'compare_password'=>array(
            'type'=>'password',
        ),
        'email'=>array(
            'type'=>'text',
        ),
        'gender'=>array(
            'type'=>'dropdownlist',
            'items'=>array('Мужчина', 'Женщина'),
        ),

    ),
    'buttons' => array(
        'register'=>array(
            'type'=>'submit',
            'label'=>'Зарегистрировать'
        )
    ),

);

