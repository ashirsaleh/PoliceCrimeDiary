<?php

namespace App\Controllers;

use App\Models\UserModel;


class UserProfile extends BaseController
{
    public function index()
    {
        $data['title'] = 'User Profile';
        $data['location'] = 'Profile';
        $data['subRoute'] = 'User Profle';
        $this->Render('user-profile', $data);
    }

    public function EditProfile()
    {
        $data[] = [];
    }


    public function store()
    {
        $model = new UserModel();
        helper(['form', 'url']);

        $validated = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file,4096]',
            ],
        ]);

        if (!$validated) {
            $avatar = $this->request->getFile('profile');
            $avatar->move(WRITEPATH . 'uploads');
            $url = WRITEPATH . 'uploads/' . $avatar->getClientName() . '/' . $avatar->getClientMimeType();
            $data = [
                'policeId' => $_SESSION['policeId'],
                'policepic' =>  $url,
            ];
            $model->update($data);
            var_dump($data);
        } else {
            echo "failed";
        }


        // return redirect()->to('user-profile');
    }
}