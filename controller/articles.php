<?php
/**
 * Created by PhpStorm.
 * User: plizonczyk
 * Date: 11.04.16
 * Time: 17:53
 */


include_once 'controller/controller.php';

class ArticlesController extends Controller {
    public function index() {
        $view=$this->loadView('articles');
        $view->index();
    }

    public function one() {
        $view=$this->loadView('articles');
        $view->one();
        $model=$this->loadModel('articles');
        $categorycountermodel=$this->loadModel('categorycounter');
        $categorycountermodel->updateCounter($model->getCategory($_GET['id']));
    }

    public function add() {
        $view=$this->loadView('articles');
        $view->add();
    }

    public function insert() {
        $model=$this->loadModel('articles');
        $model->insert($_POST);
        $this->redirect('?task=articles&action=index');
    }

    public function delete() {
        $model=$this->loadModel('articles');
        $model->delete($_GET['id']);
        $this->redirect('?task=articles&action=index');
    }
}