<?php


namespace Controllers;


use System\View;

class articleController
{
    public function actionShow(){
        $objArticle = new \Models\Article(htmlspecialchars($_POST["articleId"]), null, null);
        $objArticle = $objArticle->load();
        $data = $objArticle->getData();
        View::render('article', $data);
    }
    public function actionSubmit(){
        echo 123;
        $id = htmlentities($_POST["articleId"]);
        $title = htmlentities($_POST["title"]);
        $description = htmlentities($_POST["description"]);
        $objArticle = new \Models\Article( $id, $title, $description);
        echo 123;
        $objArticle->submit();
    }
}