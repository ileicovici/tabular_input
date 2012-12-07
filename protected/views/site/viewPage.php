
<h2>1 акция</h2>

<p>Метро: <?php echo implode(', ', CHtml::listData($page->metros, 'id', 'name')); ?></p>






<div class="form">
    <?php echo CHtml::beginForm(); ?>
    <table>
        <div class="row">
            <?php echo CHtml::activeLabel($page,'name'); ?>
            <?php echo CHtml::activeTextField($page,'name'); ?>
        </div>
        <tr><th>discount_id</th><th>metro_id</th><th>Описание</th></tr>

        <?php foreach($page->metrosRell as $i=>$item): ?>
        <tr>
            <td><?php echo CHtml::activeTextField($item,"[$i]discount_id"); ?></td>
            <td><?php echo CHtml::activeTextField($item,"[$i]metro_id"); ?></td>
            <td><?php echo CHtml::activeTextField($item,"[$i]opisanie"); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <?php echo CHtml::submitButton('Сохранить'); ?>
    <?php echo CHtml::endForm(); ?>
</div><!-- form -->