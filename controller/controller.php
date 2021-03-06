<?php
/**
 * Created by PhpStorm.
 * User: plizonczyk
 * Date: 11.04.16
 * Time: 17:01
 */

abstract class Controller {
    public function redirect($url) {
        header("location: ".$url);
    }

    public function loadView($name, $path='view/') {
        $path=$path.$name.'.php';
        $name=$name.'View';
        try {
            if(is_file($path)) {
                require_once $path;
                $ob=new $name();
            } else {
                throw new Exception('Cannot open view '.$name.' in: '.$path);
            }
        } catch (Exception $e) {
            echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line:'.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
            exit;
        }
        return $ob;
    }

    public function loadModel($name, $path='model/') {
        $path=$path.$name.'.php';
        $name=$name.'Model';
        try {
            if(is_file($path)) {
                require_once $path;
                $ob=new $name();
            } else {
                throw new Exception('Cannot open model '.$name.' in: '.$path);
            }
        } catch (Exception $e) {
            echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line:'.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
            exit;
        }
        return $ob;
    }
}