<?php

/** @var yii\web\View $this */
/** @var $form ActiveForm */
/** @var $dataProvider \yii\data\ActiveDataProvider */


use common\models\Notes;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$model = new Notes();
$this->title = 'Bedsheet';
?>
<div class="site-index">
    <div class="jumbotron text-center p-3 mb-3">
        <h1 class="">BedSheet Thought Storage</h1>


        <p class="lead">Insert text below and hit Enter to save it. Just like in messengers)</p>

<!--        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="tags" aria-label="tags" aria-describedby="basic-addon1">
        </div>
-->        <div class="input-group">
            <div class="input-group-prepend">
<!--                <span class="input-group-text">Text</span>-->
            </div>
            <div class="form-group w-100">
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'options' => ['class' => 'form-horizontal', 'action' => 'site/create']
                ]); ?>

                <?php echo $form->errorSummary($model) ?>
<!--                <textarea class="form-control" placeholder="Text" aria-label="With textarea"></textarea>
                <button type="submit" class="btn btn-primary btn-success w-25 h-50 mt-3">Push</button> -->
                <?= $form->field($model, 'text', [
                        'enableLabel' => false
                    ])->textarea() ?>
            </div>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
<?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_note_item',
    'layout' => '<div>{items}</div>',
    'itemOptions' => [
        'tag' => false,
    ]
]);
