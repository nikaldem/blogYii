<table>
    <tr>
        <td>
            <?=$model->getAttributeLabel("title")?>
        </td>
        <td>
            <?=$model->getAttributeLabel("description")?>
        </td>
    </tr>

    <? foreach($model->getData() as $k=>$v): ?>

    <tr>
        <td>
            <h3><?=$v['title'] ?></h3>
        </td>
        <td>
            <div><?=$v['description'] ?></div>
        </td>
    </tr>

<? endforeach; ?>

</table>
