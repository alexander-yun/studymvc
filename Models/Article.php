<?php

/**
* Модель "Статья" содержащая бизнес логику
* относящуюся к сущности "Статья"
*
 * @author farza
*/

namespace Models;

class Article
{
    private $id;
    private $title;
    private $description;

    public function __construct( $id, $title, $text)
    {
        $this->id=$id;
        $this->title=$title;
        $this->description=$text;
    }

    public function getData(){
        return ['id'=>$this->id, 'title'=>$this->title, 'description'=>$this->description];
    }


    public function load() :self{
        $pdo = \Models\Db::connectDB();
        $sql = "SELECT * FROM news WHERE id=$this->id";
        $arr = ($pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC))[0];
        return new Article($arr['id'],$arr['title'],$arr['description']);
    }


    //
    public function submit()
    {
        $pdo = \Models\Db::connectDB();
        $data = [];
        $sql='';

        if ($this->id ===''){
            $data = [
                'title' => $this->title,
                'description' => $this->description
            ];
            $sql = "INSERT INTO news (id, title, description) VALUES (:id, :title, :text)";
        }

        else {
            $data = [
                'id' => $this->id,
                'title' => $this->title,
                'description' => $this->description
            ];
            $sql = "UPDATE news (title, description) VALUES (:title, :text)";

        }
        $stmt= $pdo->prepare($sql);
        $stmt->execute($data);
    }


    /**
     * Эта функция удаляет статью из базы по ее индексу
     */
    public function delete(){
        $pdo = \Models\Db::connectDB();
        $sql = "DELETE FROM news WHERE id=:id";
        $stmt= $pdo->prepare($sql);
        $stmt->bindParam(':id', $this->id, \PDO::PARAM_INT);
        $stmt->execute();
    }
}