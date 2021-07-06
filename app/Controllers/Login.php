<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Login extends BaseController {

    public function index() {
        $data = [];
        helper('form');
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'policeNo' => 'required|min_length[3]|max_length[50]',
                'password' => 'required|min_length[4]|max_length[255]|validateUser[policeNo,password]'
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Police Number or password don\'t match',
                ],
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new AuthModel();
                $user = $model->where('policeNo', $this->request->getPost('policeNo'))->first();
                $this->setUserSession($user);
                return redirect()->to('/');
            }
        }
        $data['title'] = "Login: Police Crime Diary";
        echo view('login', $data);
    }

    public function setUserSession($user) {
        $data = [
            'policeId' => $user['policeId'],
            'policeNo' => $user['policeNo'],
            'Fname' => $user['Fname'],
            'Lname' => $user['Lname'],
            'rank' => $user['rank'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('login');
    }
}
