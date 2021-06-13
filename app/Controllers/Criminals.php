<?php

namespace App\Controllers;

use App\Models\CriminalModel;

class criminals extends BaseController{
    public function index(){
        $data['title'] = 'Criminal';
        $data['location'] = 'Records';
        $data['subRoute'] = 'Criminal records';
        $this->Render('criminals',$data);
    }
}