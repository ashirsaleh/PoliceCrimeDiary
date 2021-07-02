<?php

namespace App\Controllers;

use App\Models\CriminalModel;
use App\models\UserModel;

class criminals extends BaseController{
    public function index(){
        $model = new CriminalModel();
        $data['title'] = 'Criminal';
        $data['location'] = 'Records';
        $data['subRoute'] = 'Criminal records';
        $data['criminals'] = $model->findall();
        $this->Render('criminals',$data);
    }

    public function viewdefendant()
    {
        $id = $this->request->getVar('id');
        $model = new CriminalModel();
        $user = $model->find($id);
        echo '
        <table class="table table-hover">
            <tr>
                <th>Full Name</th>
                <td>' . $user['Fname'] . " " . $user['Lname'] . '</td>
            </tr>
            <tr>
                <th>Time arrested</th>
                <td>' . $user['t_arrested'] . '</td>
            </tr>
            <tr>
                <th>location arrested</th>
                <td>' . $user['L_arrested'] . '</td>
            </tr>
            <tr>
                <th>relationship</th>
                <td>' . $user['relationship'] . '</td>
            </tr>
            <tr>
                <th>Bail</th>
                <td>' . $user['bail'] . '</td>
            </tr>
        </table>
        ';
    }

    public function assignDefendant(){
        $id = $this->request->getVar('id');
        $criminlas = new CriminalModel();
        // $officers = new UserModel();
        // $users = $officers->find($id);
        $defendant = $criminlas->find($id);
        echo '
            <div class="form-group">
                <label for="FirstLastName">Full Name</label>
                <input type="text" disabled name="fName" value="' . $defendant[0]['lName']." ".$defendant[0]['lName'] . '" id="getFirstName" class="form-control">
                <input type="hidden" value="'. $id .'" name="id" id="id">
            </div>
            
            <div class="form-group">
                <label for="getcharges">All Charges</label>
                <input type="text" disabled name="charges" value="' . $defendant[0]['charges'] . '" id="getcharges" class="form-control">
            </div>
            <div class="form-group">
                <label for="getLastName">Age</label>
                <input type="text"  name="age" value="' . $defendant[0]['age'] . '" id="getLastName" class="form-control">
            </div>
        ';
    }
}