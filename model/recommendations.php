<?php
/**
 * Created by PhpStorm.
 * User: plizonczyk
 * Date: 12.04.16
 * Time: 03:48
 */

include_once 'model/model.php';

class RecommendationsModel extends Model {
    public function getRecommendations($id_usercookie) {
        try {
            $ids=$this->pdo->query('SELECT id_category FROM categorycounters WHERE id_usercookie='.$id_usercookie.' ORDER BY count DESC LIMIT 3');
        } catch (PDOException $e) {
            return NULL;
        }

        $id_data=$ids->fetchAll();
        $ids->closeCursor();
        foreach($id_data as $id){
            $cats[] = $id[0];
        }

        if($id_data[0]!='') {
            $select = $this->pdo->prepare('SELECT id, title FROM articles WHERE id_categories in ('.implode(',', $cats).') ORDER BY date_add DESC LIMIT 9');
            $select->execute();
            $data = $select->fetchAll();

            return $data;
        }
    }
}