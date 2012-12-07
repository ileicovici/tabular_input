<?php
foreach ($models as $model)
{
    echo CHtml::encode($model->title);
    echo CHtml::link(
        'лялял',
        array('page/index', 'id'=>$model->id),
        array('target' => '_blank', 'id' => 'my')
    );
    echo CHtml::normalizeUrl(
        'лялял',
        array('page/index', 'id'=>$model->id),
        array('target' => '_blank', 'id' => 'my')
    );

    echo "<br>";

}