<?php

namespace Controllers;

use System\View;
use Models\News;

/**
 * Главный контроллер приложения
 * 
 * @author farza
 */
class homeController
{
    /**
     * Действие отвечающее за отображение главной
     * страницы портала
     * 
     * @author farZa
     */
    public function actionMain()
    {
        // Рендер главной страницы портала
        View::render('index');
    }
    
    /**
     * Действие отвечающее за отображение всех
     * новостей
     * 
     * @author farZa
     */

}

