<?php

namespace App\Controllers;

use App\Models\CriminalModel;
use App\models\UserModel;

class criminals extends BaseController
{
    public function index()
    {
        $model = new CriminalModel();
        $data['title'] = 'Criminal';
        $data['location'] = 'Records';
        $data['subRoute'] = 'Criminal records';
        $data['criminals'] = $model->findall();
        $this->Render('criminals', $data);
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

    public function assignDefendant()
    {
        $id = $this->request->getVar('id');
        $criminlas = new CriminalModel();
        // $officers = new UserModel();
        // $users = $officers->find($id);
        $defendant = $criminlas->find($id);
        echo '
            <div class="form-group">
                <label for="criminalname">Criminal Name</label>
                <input type="text" disabled name="fName" value="" id="fName" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="getcharges">Action Committed</label>
                <input type="text" name="charges" value="" id="getcharges" class="form-control">
            </div>
             <div class="form-group">
                <label for="FirstLastName">Case No:</label> 
                <input type="text"  value=""  class="form-control">
            </div>
             <div class="form-group">
                <label for="FirstLastName">Case Status</label></label>
                <input type="text"  value=""  class="form-control">
            </div>
             <div class="form-group">
                <label for="FirstLastName">assign to</label>
                <input type="text"  value=""  class="form-control">
            </div>
           
        ';
    }
}