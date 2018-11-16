<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>

<h3>藏书阁管理系统</h3>
<table id="books" class="books">
  <thead>
    <tr>
      <th>编号</th>
      <th>书名</th>
      <th>作者</th>
      <th>出版社</th>
      <th>出版日期</th>
      <th>借出日期</th>
      <th>归还日期</th>
      <th>借阅人</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($books as $book): ?>
      <tr>
        <td><?= Html::encode(" {$book->booksid}") ?></td>
        <td><?= Html::encode("《{$book->booksname}》") ?></td>
        <td><?= Html::encode(" {$book->author} ") ?></td>
        <td><?= Html::encode(" {$book->press} ") ?></td>
        <td><?= Html::encode(" {$book->publicationdate} ") ?></td>
        <td><?= Html::encode(" {$book->lenddate} ") ?></td>
        <td><?= Html::encode(" {$book->returndate} ") ?></td>
        <td><?= Html::encode(" {$book->lendername} ") ?></td>
        <td>
        <?= Html::a('➕', ['create']) ?>
        <?= Html::a('➖', ['delete','id' => $book->booksid],[
          'data' => [
            'confirm' => '确认删除该书籍嘛？',
            'method' => 'post'
          ]
        ]) ?>
        <!-- <button class="del"></button> -->
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>

<?= LinkPager::widget(['pagination' => $pagination]) ?>