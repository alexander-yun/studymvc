<?php

namespace Models;

/**
 * Модель "Новости" содержащая бизнес логику
 * относящуюся к сущности "Новости"
 * 
 * @author farza
 */
class News
{
    /**
     * Метод, отвечающий за получение всех данных
     * о новостях портала
     * 
     * @author farZa
     * @return array
     */


    public function displayAll()
    {

        $pdo = \Models\Db::connectDB();
        // SQL запрос на получение всех новостей
        $sql = 'SELECT * FROM news';
        
        // Возвращаем полученные из БД данные
        return $pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Метод удаляющий одну новость
     * @author |||barcode|||
     * @return 'xontroller'
     */

    public function deleteOne(){
        $pdo = \Models\Db::connectDB();
        // SQL запрос на получение всех новостей
        $sql = 'DELETE FROM news WHERE id=:id ';
        // Возвращаем полученные из БД данные
        return $pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }


    /**
     * Метод удаляющий все вделенные новости
     * @author |||barcode|||
     * @input array of id's news
     * @return 'xontroller'
     */

    public function deleteSelected($arrayIds){
        $pdo = $this->connectDB();
        // SQL запрос на получение всех новостей
        $sql = 'DELETE FROM news WHERE id=:id ';
        // Возвращаем полученные из БД данные

        foreach ($arrayIds as $value){
           // pdo delete bla bla
        }

    }
}

