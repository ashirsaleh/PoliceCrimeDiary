<?php

namespace App\Controllers;

use App\Models\CriminalModel;

class complainer extends BaseController{
    public function index(){
        $data['title'] = 'Complainer';
        $data['location'] = 'Records';
        $data['subRoute'] = 'Complainer records';
        $this->Render('complainer',$data);
    }
}