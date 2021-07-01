<?php

namespace App\Controllers;

use App\Models\ComplaintModel;
class complainer extends BaseController{
    public function index(){
        $model = new ComplaintModel();
        $data['title'] = 'Complainers';
        $data['location'] = 'Records';
        $data['subRoute'] = 'Complainer records';
        $data['complainers'] = $model->findall();
        $this->Render('complainer',$data);
    }
    public function viewcomplainer()
    {
        $id = $this->request->getVar('id');
        $model = new ComplaintModel();
        $user = $model->find($id);
        echo '
        <table class="table table-hover">
        
            <tr>
                <th>Name of people involved</th>
                <th>Short Description Statement</th>       
            </tr>
            <tr>
                <td>' . $user['th_name'] . '</td>
                <td>' . $user['short_info'] . '</td>    
            </tr>
            <tr>
            <th>If vehicles involved</th>
                <th>Car Type</th>
                <th>Plate Number</th>
                <th>Color</th>
                <tr> 
                <td></td>
                <td>' . $user['car_name'] . '</td>
                <td>' . $user['plate_number'] . '</td>
                <td>' . $user['color'] . '</td>
                </tr>
            </tr>
            <tr>
            <th>Witness statement</th>
            <td colspan="6">' . $user['wit_statement'] . '</td>
           </tr>
        </table>
        ';
    }
}