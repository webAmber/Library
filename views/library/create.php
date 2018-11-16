<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>


<div class="book-form">

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'booksname')->textInput(['placeholder'=>'请输入书籍名称']) -> label('书籍名称：')?>

<?= $form->field($model, 'author')->textInput(['placeholder'=>'请输入作者姓名']) -> label('作者：')?>

<?= $form->field($model, 'press')->textInput(['placeholder'=>'请输入出版社名称']) -> label('出版社：')?>

<?= $form->field($model, 'publicationdate')->textInput(['placeholder'=>'请输入出版时间']) -> label('出版时间：')?>

<?= $form->field($model, 'lendername')->textInput(['placeholder'=>'请输入借阅人姓名']) -> label('借阅人姓名：')?>

<?= $form->field($model, 'lenddate')->textInput(['placeholder'=>'请输入借阅时间']) -> label('借出时间：')?>

<?= $form->field($model, 'returndate')->textInput(['placeholder'=>'请输入归还时间']) -> label('归还时间：')?>

<?= $form->field($model, 'lenderid')->textInput(['placeholder'=>'请输入借阅人编号']) -> label('借阅人编号：')?>

<div class="submit_box">
    <?= Html::submitButton('保存', ['class' => 'submit']) ?>
</div>

<?php ActiveForm::end(); ?>