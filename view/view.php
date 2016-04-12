<?php
/**
 * Created by PhpStorm.
 * User: plizonczyk
 * Date: 11.04.16
 * Time: 17:01
 */

abstract class View {
    public function loadModel($name, $path='model/') {
        $path=$path.$name.'.php';
        $name=$name.'Model';
        try {
            if(is_file($path)) {
                require $path;
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

    public function render($name, $path='templates/') {
        $path=$path.$name.'.html.php';
        try {
            if(is_file($path)) {
                require $path;
            } else {
                throw new Exception('Cannot open template '.$name.' in: '.$path);
            }
        } catch (Exception $e) {
            echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line:'.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
            exit;
        }
    }

    public function set($name, $value) {
        $this->$name=$value;
    }

    public function get($name) {
        return $this->$name;
    }
}