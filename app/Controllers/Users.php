<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class users extends BaseController {
    public function index() {
        $model = new UserModel();
        $data['title'] = 'Users';
        $data['location'] = 'Users';
        $data['subRoute'] = 'All Users';
        $data['users'] = $model->findall();
        $this->Render('users', $data);
    }

    public function AddUser() {
        helper('form');
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'Fname' => 'required|min_length[2]|max_length[50]',
                'Lname' => 'required|min_length[2]|max_length[50]',
                'tel_number' => 'required|min_length[8]|max_length[15]',
                'password' => 'required|min_length[2]|max_length[255]',
                'policeNo' => 'required|min_length[2]|max_length[50]',
                'rank' => 'required',
                'description' => 'required|min_length[2]|max_length[255]',
            ];
            $errors = [];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
                echo $data['validation']->listErrors();
                // return redirect()->to('/users');

            } else {
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

    public function viewUser() {
        $id = $this->request->getVar('id');
        $model = new UserModel();
        $user = $model->find($id);
        echo '
        <table class="table table-hover">
            <tr>
                <th>Full Name</th>
                <td>' . $user['Fname'] . " " . $user['Lname'] . '</td>
            </tr>
            <tr>
                <th>Police Identification</th>
                <td>' . $user['policeNo'] . '</td>
            </tr>
            <tr>
                <th>Rank</th>
                <td>' . $user['rank'] . '</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>' . $user['tel_number'] . '</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>' . $user['description'] . '</td>
            </tr>
        </table>
        ';
    }

    public function DeleteUser() {
        $id = $this->request->getVar('id');
        $model = new UserModel();
        $model->delete($id);
    }
    public function EditUser() {
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'Fname' => 'required|min_length[4]|max_length[50]',
                'Lname' => 'required|min_length[4]|max_length[50]',
                'password' => 'required|min_length[4]|max_length[255]',
                'policeNo' => 'required|min_length[4]|max_length[50]',
                'rank' => 'required',
                'description' => 'required|min_length[4]|max_length[255]',
            ];
            $errors = [];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $user = array(
                    'policeNo' => $this->request->getVar('policeNo'),
                    'Fname' => $this->request->getVar('Fname'),
                    'Lname' => $this->request->getVar('Lname'),
                    'rank' => $this->request->getVar('rank'),
                    'tel_number' => $this->request->getVar('tel_number'),
                    'description' => $this->request->getVar('description'),
                    'password' => $this->request->getVar('password'),
                );
                $id = $this->request->getVar('id');
                $model = new UserModel();
                $model->update($id, $user);
                // return redirect()->to('users');
                print_r($id);
            }
        }
    }
    public function getUser() {
        $id = $this->request->getVar('id');
        $model = new UserModel();
        $user = $model->find($id);

        echo '
            <div class="form-group">
                <label for="editFirstName">First name</label>
                <input type="text" disabled name="Fname" value="' . $user['Fname'] . '" id="editFirstName" class="form-control">
                <input type="hidden" value="' . $id . '" name="id" id="id">
            </div>
            <div class="form-group">
                <label for="editLastName">Last name</label>
                <input type="text" disabled name="Lname" value="' . $user['Lname'] . '" id="editLastName" class="form-control">
            </div>
            <div class="form-group">
                <label for="editPoliceNo">Police Identification Number</label>
                <input type="text" disabled name="policeNo" value="' . $user['policeNo'] . '" id="editPoliceNo" class="form-control">
            </div>
            <div class="form-group">
                <label for="editRank">Rank</label>
                <select id="editRank" name="rank" value="' . $user['rank'] . '" class="form-control custom-select">
                    <option selected disabled>Select Rank</option>
                    <option>Police Officer</option>
                    <option>Head Of Station</option>
                </select>
            </div>
            <div class="form-group">
                <label for="editPhone">Telephone Number</label>
                <input type="numbers" name="password" id="editPhone" class="form-control">
            </div>
            <div class="form-group">
                <label for="editPassword">User password</label>
                <input type="password" placeholder="********" name="password" id="editPassword" class="form-control">
            </div>
            <div class="form-group">
                <label for="editDescription">Short Description </label>
                <textarea id="editDescription" name="description" class="form-control" rows="4">' . $user['description'] . '
                </textarea>
            </div>';
    }
}
