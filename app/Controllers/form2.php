<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Form2 extends BaseController{
    public function index(){
        $data['title'] = 'Complaints Form';
        $data['location'] = 'Complaints Form';
        $data['subRoute'] = 'Complaints Form';
        $this->Render('form2',$data);
    }

    public function EditProfile(){
        $data[] = [];
    }
}