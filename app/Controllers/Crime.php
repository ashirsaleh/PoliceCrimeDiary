<?php

namespace App\Controllers;

use App\Models\AuthModel;

class crime extends BaseController{
    public function index(){
        $data['title'] = 'Recording Crime';
        $data['location'] = 'Case Statements';
        $data['subRoute'] = 'Record Crime';
        $this->Render('crime',$data);
    }

    public function EditProfile(){
        $data[] = [];
    }
}