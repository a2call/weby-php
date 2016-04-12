<?php
/**
 * Created by PhpStorm.
 * User: plizonczyk
 * Date: 11.04.16
 * Time: 17:53
 */

include_once 'controller/controller.php';

class CategoriesController extends Controller {
    public function index() {
        $view=$this->loadView('categories');
        $view->index();
    }

    public function add() {
        $view=$this->loadView('categories');
        $view->add();
    }

    public function insert() {
        $model=$this->loadModel('categories');
        $model->insert($_POST);
        $this->redirect('?task=categories&action=index');
    }

    public function delete() {
        $model=$this->loadModel('categories');
        $model->delete($_GET['id']);
        $this->redirect('?task=categories&action=index');
    }
}