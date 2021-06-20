<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Form1 extends BaseController{
    public function index(){
        $data['title'] = 'Reporting Form';
        $data['location'] = 'REPORT FORM';
        $data['subRoute'] = 'REPORT FORM';
        $this->Render('form1',$data);
    }

    public function EditProfile(){
        $data[] = [];
    }
}