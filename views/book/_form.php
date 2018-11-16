<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'booksname')->textInput(['maxlength' => true],['class' => 'col-lg-2 control-label']) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'press')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publicationdate')->textInput() ?>

    <?= $form->field($model, 'lenddate')->textInput() ?>

    <?= $form->field($model, 'returndate')->textInput() ?>

    <?= $form->field($model, 'lendername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lenderid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
