<?php
/**
 * Created by PhpStorm.
 * User: plizonczyk
 * Date: 11.04.16
 * Time: 18:12
 */

include_once 'controller/controller.php';

class UserCookieController extends Controller {
    public function manageCookie() {
        $model=$this->loadModel('usercookie');
        if(!isset($_COOKIE['user_cookie'])) {
            $value = $model->createNew();
            setcookie('user_cookie', $value, time() + (24*3600), '/');
        } else {
            $value = $_COOKIE['user_cookie'];
        }
    }
}