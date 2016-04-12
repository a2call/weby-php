<?php
/**
 * Created by PhpStorm.
 * User: plizonczyk
 * Date: 11.04.16
 * Time: 18:12
 */

include_once 'view/view.php';

class ArticlesView extends View{
    public function index() {
        $art=$this->loadModel('articles');
        $recom=$this->loadModel('recommendations');
        $this->set('articles', $art->getAll());
        $this->set('recommendations', $recom->getRecommendations($_COOKIE['user_cookie']));
        $this->render('indexArticle');
    }

    public function one() {
        $art=$this->loadModel('articles');
        $this->set('articles', $art->getOne($_GET['id']));
        $this->render('oneArticle');
    }

    public function add() {
        $cat=$this->loadModel('categories');
        $this->set('catsData', $cat->getAll());
        $this->render('addArticle');
    }
}