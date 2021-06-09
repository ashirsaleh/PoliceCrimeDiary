<?php

namespace App\Controllers;

use App\Models\AuthModel;

class AddUser extends BaseController{
    public function index(){
        $data['title'] = 'Add User';
        $data['location'] = 'Add User';
        $data['subRoute'] = 'Add Police Details';
        $this->Render('add-user',$data);
    }

    public function AddUser(){
        $data[] = [];
    }
}