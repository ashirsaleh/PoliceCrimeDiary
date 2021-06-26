<?php

namespace App\Controllers;

use App\models\ComplaintModel;
class complainer extends BaseController{
    public function index(){
        $model = new ComplaintModel();
        $data['title'] = 'Complainers';
        $data['location'] = 'Records';
        $data['subRoute'] = 'Complainer records';
        $data['complainers'] = $model->findall();
        $this->Render('complainer',$data);
    }
    public function viewcomplainers()
    {
        $id = $this->request->getVar('id');
        $model = new ComplaintModel();
        $user = $model->find($id);
        echo '
        <table class="table table-hover">
            <tr>
                <th>Full Name</th>
                <td>' . $user['Fname'] . " " . $user['Lname'] . '</td>
            </tr>
            <tr>
                <th>Name of people involved</th>
                <td>' . $user['th_name'] . '</td>
            </tr>
            <tr>
                <th>What you saw</th>
                <td>' . $user['short_info'] . '</td>
            </tr>
            <tr>
                <th>If vehicles involved</th>
                <td>' . $user['car_name'] . '</td>
                <td>' . $user['plate_number'] . '</td>
                <td>' . $user['color'] . '</td>
            </tr>
            <tr>
                <th>Witness statement</th>
                <td>' . $user['wit_statement'] . '</td>
            </tr>
        </table>
        ';
    }
}