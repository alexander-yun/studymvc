<?php


namespace Controllers;


use System\View;

class articleController
// контроллер статья
{
    public function actionShow(){
        $objArticle = null;
        $data = [];
        if (!empty($_POST["articleId"])){
            $objArticle = new \Models\Article(htmlspecialchars($_POST["articleId"]), null, null);
            $objArticle = $objArticle->load();
            $data = $objArticle->getData();
        }
        View::render('article', $data);
    }
    public function actionSubmit(){
        $id = htmlentities($_POST["articleId"]);

        $title = htmlentities($_POST["title"]);
        $description = htmlentities($_POST["description"]);
//        if (!empty($_POST["articleId"])){
//
//        }
        $objArticle = new \Models\Article( $id, $title, $description);
        $objArticle->submit();
        echo "новость {$title} добавлена";

        View::render('news', []);
    }
}