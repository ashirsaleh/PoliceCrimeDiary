<?php

namespace App\Controllers;

use App\Models\AuthModel;

class complaints extends BaseController{
    public function index(){
        $data['title'] = 'Record Complaints';
        $data['location'] = 'Case Statements';
        $data['subRoute'] = 'Record Complaints';
        $this->Render('complaints',$data);
    }

    public function EditProfile(){
        $data[] = [];
    }
}