<?php

namespace app\controllers;

use Yii;
use app\models\Library;
use yii\web\Controller;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LibraryController implements the CRUD actions for Book model.
 */
class LibraryController extends Controller
{
    public function actionIndex()
    {
        $query = Library::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $books = $query->orderBy('booksid')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'books' => $books,
            'pagination' => $pagination,
        ]);
    }

    public function actionCreate()
    {
        $model = new Library();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['library/index']);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {   
        $this->findModel($id)->delete();
        return $this->redirect(['library/index']);
        
    }

    protected function findModel($id)
    {
        if (($model = Library::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}