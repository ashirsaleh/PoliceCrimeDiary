<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Form1 extends BaseController{
    public function index(){
        $data['title'] = 'Form1';
        $data['location'] = 'Form';
        $data['subRoute'] = 'Form1';
        $this->Render('form1',$data);
    }

    public function EditProfile(){
        $data[] = [];
    }
}