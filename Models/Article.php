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


    // add or update an items
    public function submit()
    {
        $pdo = \Models\Db::connectDB();
//        $data = [];
        $stmt=null;

        if ($this->id ===''){
            #assume we add new item
            $sql=$this->add();
            $stmt= $pdo->prepare($sql);
        }
        else {
            //assume we update an item
            $sql = $this->update();
            $stmt= $pdo->prepare($sql);
            $stmt->bindParam(':id',$this->id);
        }
        $stmt->bindParam(':title',$this->title);
        $stmt->bindParam(':description',$this->description);
        $stmt->execute();
    }

    private function add(){
        $sql = "INSERT INTO news (title, description) VALUES (:title, :description)";
        return $sql;
    }
    private function update(){
        $sql = "UPDATE news set title=:title , description=:description WHERE id=:id";
        return $sql;
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