<?php

namespace App\Controllers;

use App\Models\AuthModel;

class users extends BaseController{
    public function index(){
        $data['title'] = 'Users';
        $data['location'] = 'Users';
        $data['subRoute'] = 'All Users';
        $this->Render('users',$data);
    }

    public function AddUser(){
        $data = [];
    }

    public function EditUser(){
        $data = [];
    }

    public function DeleteUser(){
        $data = [];
    }
}