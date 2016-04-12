<?php
/**
 * Created by PhpStorm.
 * User: plizonczyk
 * Date: 11.04.16
 * Time: 17:59
 */

include_once 'model/model.php';

class ArticlesModel extends Model{
    public function getAll() {
        $query="SELECT a.id, a.title, a.date_add, a.autor, c.name FROM articles AS a LEFT JOIN categories as c ON a.id_categories=c.id";
        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
    }

    public function getOne($id) {
        $query="SELECT a.id, a.title, a.date_add, a.autor, c.name, a.content FROM articles AS a LEFT JOIN categories as c ON a.id_categories=c.id where a.id=".$id;
        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
    }

    public function getCategory($id) {
        $query="SELECT a.id_categories FROM articles AS a WHERE a.id=".$id;
        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data[0][0];
    }

    public function insert($data) {
        $ins=$this->pdo->prepare('INSERT INTO articles (title, content, date_add, autor, id_categories) VALUES (:title, :content, :date_add, :autor, :id_categories)');
        $ins->bindValue(':title', $data['title'], PDO::PARAM_STR);
        $ins->bindValue(':content', $data['content'], PDO::PARAM_STR);
        $ins->bindValue(':date_add', $data['date_add'], PDO::PARAM_STR);
        $ins->bindValue(':autor', $data['author'], PDO::PARAM_STR);
        $ins->bindValue(':id_categories', $data['cat'], PDO::PARAM_STR);
        $ins->execute();
    }

    public function delete($id) {
        $del=$this->pdo->prepare('DELETE FROM articles where id=:id');
        $del->bindValue(':id', $id, PDO::PARAM_INT);
        $del->execute();
    }
}