<?php
/**
 * Created by PhpStorm.
 * User: plizonczyk
 * Date: 12.04.16
 * Time: 03:48
 */

include_once 'model/model.php';

class CategoryCounterModel extends Model {
    public function updateCounter($id) {
        $ins=$this->pdo->prepare('INSERT INTO categorycounters (id_usercookie, id_category, count) VALUES (:id_usercookie, :id_category, :count);');
        $ins->bindValue(':id_usercookie', $_COOKIE['user_cookie'], PDO::PARAM_INT);
        $ins->bindValue(':id_category', $id, PDO::PARAM_INT);
        $ins->bindValue(':count', 1, PDO::PARAM_INT);
        try {
            $ins->execute();
        } catch (PDOException $e) {
            $upd=$this->pdo->prepare('UPDATE categorycounters SET count = count +1 WHERE id_usercookie='.$_COOKIE['user_cookie'].' AND id_category='.$id);
            $upd->execute();
        }
    }
}