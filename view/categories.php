<?php
/**
 * Created by PhpStorm.
 * User: plizonczyk
 * Date: 11.04.16
 * Time: 18:12
 */

include_once 'view/view.php';

class CategoriesView extends View{
    public function index() {
        $cat=$this->loadModel('categories');
        $this->set('catsData', $cat->getAll());
        $this->render('indexCategory');
    }

    public function add() {
        $this->render('addCategory');
    }
}