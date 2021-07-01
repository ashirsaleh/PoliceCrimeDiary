<?php

namespace App\Controllers;

use App\Models\CriminalModel;

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
}