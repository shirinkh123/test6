<?php class Like1 {


    public function addLike(Like $Like, $db) {
        $query="INSERT INTO likes(rep_id,id_user,likes) VALUES ('".$Like->getIdreply()."','".$Like->getIduser()."','".$Like->getLike()."')";

        try {
            $db->commit($query);
        }

        catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function addUnLike(Like $Like, $db) {
        $query="INSERT INTO likes(rep_id,id_user,unlikes) VALUES ('".$Like->getIdreply()."','".$Like->getIduser()."','".$Like->getUnLike()."')";

        try {
            $db->commit($query);
        }

        catch(PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getLike($db, $rep, $user) {

        $query="SELECT likes from likes where rep_id=$rep and id_user=$user ORDER BY likes DESC LIMIT 1";

        try {
            return $query;
        }

        catch(PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getUnLike($db, $rep, $user) {

        $query="SELECT unlikes from likes where rep_id=$rep and id_user=$user ORDER BY unlikes DESC LIMIT 1";

        try {
            return $query;
        }

        catch(PDOException $e) {
            die($e->getMessage());
        }
    }





    public function getLikeCount($db, $rep, $user) {

        $query="SELECT * from likes where rep_id=$rep and id_user=$user ORDER BY likes DESC LIMIT 1";

        try {
            
            return $query;
        }

        catch(PDOException $e) {
            die($e->getMessage());
        }
    }



}

//end Forum class.
?>