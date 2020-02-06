<?php


namespace Controllers;


use Models\News;
use System\View;

class newsController
{
    public function actionList()
    {
        // Создаем модель
        $model = new News();

        // Получаем данные используя модель
        $data = $model->displayAll();

        // Передаем данные представлению для их отображения
        View::render('news', [
            'data' => $data,
        ]);
    }

    /**
     * @author |||barcode|||
     * @input
     * @return
     * @throws \ErrorException
     */
    public function actionDelete()
    {
        $article = new \Models\Article(htmlspecialchars($_POST["articleId"]), null, null);
        $article->delete();
        $this->actionList();
    }

}