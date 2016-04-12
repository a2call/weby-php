<?php
/**
 * Created by PhpStorm.
 * User: plizonczyk
 * Date: 11.04.16
 * Time: 17:01
 */

abstract class Model {
    protected $pdo;

    public function __construct() {
        try {
            require 'config/sql.php';
            $this->pdo=new PDO('mysql:host='.$host.';dbname='.$dbase, $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(DBException $e) {
            echo 'The connect cannot create: '.$e->getMessage();
        }
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

    public function select($from, $select='*', $where=NULL, $order=NULL, $limit=NULL) {
        $query='SELECT '.$select.' FROM '.$from;
        if($where!=NULL) $query=$query.' WHERE '.$where;
        if($order!=NULL) $query=$query.' ORDER BY '.$order;
        if($limit!=NULL) $query=$query.' LIMIT '.$limit;

        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
    }
}