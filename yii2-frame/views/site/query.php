<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>AD</h1>
    <ul>
        <?php foreach ($countries as $country): ?>
            <li>
                <?= Html::encode("{$country->position_id} ({$country->position_name})") ?>:

            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>