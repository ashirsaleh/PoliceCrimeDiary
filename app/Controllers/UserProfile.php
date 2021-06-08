<?php

namespace App\Controllers;

use App\Models\AuthModel;

class UsersProfile extends BaseController{
    public function index(){
        $data['title'] = 'User Profile';
        $data['location'] = 'Profile';
        $data['subRoute'] = 'User Profle';
        $this->Render('users',$data);
    }

    public function EditProfile(){
        $data[] = [];
    }
}