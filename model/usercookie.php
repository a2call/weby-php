<?php
/**
 * Created by PhpStorm.
 * User: plizonczyk
 * Date: 12.04.16
 * Time: 03:48
 */

include_once 'model/model.php';

class UserCookieModel extends Model {
    public function createNew() {
        $ins=$this->pdo->prepare('INSERT INTO usercookies (ip) VALUES (:ip);');
        $ins->bindValue(':ip', $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);
        $ins->execute();
        return $this->pdo->lastInsertId();
    }
}