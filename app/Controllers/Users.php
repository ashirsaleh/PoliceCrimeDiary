<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class users extends BaseController{
    public function index(){
        $model = new UserModel();
        $data['title'] = 'Users';
        $data['location'] = 'Users';
        $data['subRoute'] = 'All Users';
        $data['users'] = $model->findall();
        $this->Render('users',$data);
    }

    public function AddUser(){
        helper('form');
        if($this->request->getMethod() === 'post'){
            $rules = [
                'Fname' => 'required|min_length[4]|max_length[50]',
                'Lname' => 'required|min_length[4]|max_length[50]',
                'password' => 'required|min_length[4]|max_length[255]',
                'policeNo' => 'required|min_length[4]|max_length[50]',
                'rank' => 'required',
                'description' => 'required|min_length[4]|max_length[255]',
            ];
            $errors = [];
            if(!$this->validate(
                $rules, $errors
            )){
                $data['validation'] = $this->validator;
                return redirect()->to('users');

            }else{
                $user = array(
                    'policeNo' => $this->request->getVar('policeNo'),
                    'Fname' => $this->request->getVar('Fname'),
                    'Lname' => $this->request->getVar('Lname'),
                    'rank' => $this->request->getVar('rank'),
                    'tel_number' => $this->request->getVar('tel_number'),
                    'description' => $this->request->getVar('description'),
                    'password' => $this->request->getVar('password'),
                );
                $model = new UserModel();
                $model->save($user);
                return redirect()->to('users');
            }
        }
    }

    public function EditUser(){
        $data = [];
    }

    public function DeleteUser(){
        $data = [];
    }
}