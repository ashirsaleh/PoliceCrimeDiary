<?php

namespace App\Controllers;

use App\Models\UserModel;


class UserProfile extends BaseController {
    public function index() {
        $model = new UserModel();
        $data['title'] = 'User Profile';
        $data['location'] = 'Profile';
        $data['subRoute'] = 'User Profile';
        $data['user'] = $model->find($_SESSION['policeId']);
        $this->Render('user-profile', $data);
    }

    public function EditProfile() {
        $data[] = [];
    }


    public function store() {
        $model = new UserModel();
        helper(['form', 'url']);

        $validated = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file,4096]',
            ],
        ]);


        // return redirect()->to('user-profile');
    }
}
