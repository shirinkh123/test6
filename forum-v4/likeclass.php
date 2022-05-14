
<?php
//שירין +עלאא
class Like//שמירת דירוג על תגובה מסויימת
{
protected $id_user;
protected $id_reply;
protected $like;
protected $unlike;
public function getIduser()//מספר ת.ז מדרג
{
return $this->id_user;
}
public function setIduser($id_user)
{$this->id_user=$id_user;
}
public function getIdreply()//מספר תגובה
{
return $this->id_reply;
}
public function setIdreply($id_reply)
{$this->id_reply=$id_reply;
}	
public function getLike()//סימון לייק
{return $this->like;
}
public function setLike($like)
{
$this->like=$like;
}
public function getUnlike()//סימון לא לייק
{return $this->unlike;
}
public function setUnlike($unlike)
{
$this->unlike=$unlike;
}
}

?>
