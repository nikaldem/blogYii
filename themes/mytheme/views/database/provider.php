

<?php

    $this->widget('zii.widgets.grid.CGridView', array(

        'dataProvider'=>$dataProvider,
        'columns'=>array(
            'username',
            'email',
            'name',
            'fname',
               array(
                   'class'=>'CButtonColumn',
               ),
        )
    ));
?>

