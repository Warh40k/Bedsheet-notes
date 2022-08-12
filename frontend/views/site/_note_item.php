<?php
/** @var $model \common\models\Notes */
?>
<?php
?>
<div class="body-content p-0">
    <div class="card mt-3 mb-3">
        <div class="card-body">
            <h5 class="card-title"><?php echo $model->created_at ?></h5>
            <h6 class="card-subtitle mb-2" style="color:orangered">@tags @and @so @on</h6>
            <p class="card-text"><?php echo $model->text ?></p>
        </div>
    </div>
</div>
