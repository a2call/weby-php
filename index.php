<?php
/**
 * Created by PhpStorm.
 * User: plizonczyk
 * Date: 11.04.16
 * Time: 17:52
 */


include_once 'controller/categories.php';
include_once 'controller/articles.php';
include_once 'controller/usercookie.php';

$usercookiecon = new UserCookieController();
$usercookiecon->manageCookie();

if($_GET['task']=='categories') {
    $ob = new CategoriesController();
    $ob->$_GET['action']();
} else if($_GET['task']=='articles') {
    $ob = new ArticlesController();
    $ob->$_GET['action']();
} else {
    $ob = new ArticlesController();
    $ob->index();
}