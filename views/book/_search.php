<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'booksid') ?>

    <?= $form->field($model, 'booksname') ?>

    <?= $form->field($model, 'author') ?>

    <?= $form->field($model, 'press') ?>

    <?= $form->field($model, 'publicationdate') ?>

    <?php // echo $form->field($model, 'lenddate') ?>

    <?php // echo $form->field($model, 'returndate') ?>

    <?php // echo $form->field($model, 'lendername') ?>

    <?php // echo $form->field($model, 'lenderid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
