<?php

namespace App\Controllers;

use App\Models\AuthModel;

class UserProfile extends BaseController{
    public function index(){
        $data['title'] = 'User Profile';
        $data['location'] = 'Profile';
        $data['subRoute'] = 'User Profle';
        $this->Render('user-profile',$data);
    }

    public function EditProfile(){
        $data[] = [];
    }
}