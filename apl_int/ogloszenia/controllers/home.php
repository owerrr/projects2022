<?php

class HomeController extends Controller{
    public function Index()
    {
        $model = new Ad();
        $data = $model->getLatestAds();
        $this->returnView('home/home', $data);
    }
}