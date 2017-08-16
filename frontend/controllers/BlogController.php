<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Articles;
use yii\data\Pagination;
use yii\data\SqlDataProvider;

class BlogController extends \yii\web\Controller
{
    public function actionIndex()
    {
         // выполняем запрос
        $query = Articles::find()->where(['activate' => 1]);
        // делаем копию выборки
        $countQuery = clone $query;
        // подключаем класс Pagination, выводим по 10 пунктов на страницу
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 1]);
        // приводим параметры в ссылке к ЧПУ
        $pages->pageSizeParam = false;
        $models = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        
        $modelArticles = Articles::find()->all();
        return $this->render('index', [
            //'modelArticles' => $modelArticles],
            'models' => $models,
            'pages' => $pages, 
            ]);
    }
    
    public function actionAjaxpagination()
    {
        // подсчитываем общее количество пунктов
        $totalCount = Yii::$app->db->createCommand('SELECT COUNT(*) FROM articles Where activate=:status', [':status' => 1])->queryScalar();
        // выполняем запрос
        $sql = 'SELECT COUNT(*) FROM articles Where activate=:status';
        
        $dataProvider = new SqlDataProvider([
            'sql' => $sql,
            'params' => [':status' => 1],
            'totalCount' => (int)$totalCount,
            'pagination' => [
                // количество пунктов на странице
                'pageSize' => 1,
            ]
            ]);
         $time = date('H:i:s');
        // передача данных в представление
        return $this->render('ajaxpagination', ['dataProvider' => $dataProvider,'time' => $time]);
    }
    
    public function actionPermanent()
    {
        
        $modelArticles = Articles::find()->all();
        return $this->render('permanent', ['modelArticles' => $modelArticles]);
    }
    

}
