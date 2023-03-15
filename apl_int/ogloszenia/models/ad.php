<?php
class ad extends Model{
    public function Index(){
        $this->query("SELECT * FROM ads ORDER BY create_date DESC");
        $rows = $this->resolve();
        return $rows;
    }

    public function DeleteAd($id){
        if($id != null){
            $this->query("DELETE FROM ads WHERE id = $id");
            $this->execute();
            return true;
        }
        return false;
    }

    public function EditAd($id, $title, $content, $userid){
        if(
               $id != null
            && $title != null
            && $content != null
            && $userid != null
        ){
            $this->query("UPDATE ads SET title = '$title', content = '$content', user_id = $userid WHERE id = $id");
            $this->execute();
        }
        // echo "UPDATE ads SET title = '$title', content = '$content', user_id = $userid WHERE id = $id";
    }

    public function getAd($id){
        if($id != null){
            $this->query("SELECT * FROM ads WHERE id = $id");
            $data = $this->resolve();
            return $data;
        }
    }

    public function getLatestAds(){
        $this->query("SELECT * FROM ads ORDER BY create_date DESC LIMIT 3");
        $rows = $this->resolve();
        return $rows;
    }

    public function AddNew($title, $content, $userid){
        if(
            $title != null
         && $content != null
         && $userid != null
     ){
         $this->query("INSERT INTO ads (title, content, user_id) VALUES ('$title','$content',$userid);");
        //  echo "INSERT INTO ads (title, content, user_id) VALUES ('$title','$content',$userid);";
         $this->execute();
     }
    }
}