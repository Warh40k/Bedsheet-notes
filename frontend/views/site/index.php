<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron text-center p-3 mb-3">
        <h1 class="">BedSheet Thought Storage</h1>


        <p class="lead">Insert text below and hit Enter to save it. Just like in messengers)</p>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
<!--                <span class="input-group-text" id="basic-addon1">@ </span>-->
            </div>
            <input type="text" class="form-control" placeholder="tags" aria-label="tags" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
<!--                <span class="input-group-text">Text</span>-->
            </div>
            <textarea class="form-control" placeholder="Text" aria-label="With textarea"></textarea>
        </div>
    </div>

    <?php echo $this->render('_note_item') ?>
</div>
