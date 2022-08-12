<?php
/** @var yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;

$this->beginContent('@frontend/views/layouts/base.php');
?>
<main role="main" class="flex-shrink-0">

    <div class="container pt-3">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php $this->endContent()  ?>