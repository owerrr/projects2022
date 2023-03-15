<?php

class AdsController extends Controller{
    public function Index(){
        $model = new Ad();
        $data = $model->Index();
        $this->returnView('ads/index', $data);
    }

    public function Delete($id=null){
        $model = new Ad();
        $data = $model->DeleteAd($id);
        return $this->redirect("ads");
    }
    
    public function Edit($value){
        $valueArr = explode("|", $value);
        $id = $valueArr[0];
        $title = $valueArr[1];
        $content = $valueArr[2];
        $userid = $valueArr[3];
        $model = new Ad();
        $data = $model->EditAd($id, $title, $content, $userid);
        return $this->redirect("ads");
    }

    public function AddNew($value){
        $valueArr = explode("|", $value);
        $title = $valueArr[0];
        $content = $valueArr[1];
        $userid = $valueArr[2];
        $model = new Ad();
        $data = $model->AddNew($title, $content, $userid);
        return $this->redirect("ads");
    }
}