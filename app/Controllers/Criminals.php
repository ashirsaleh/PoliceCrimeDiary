<?php

namespace App\Controllers;

use App\Models\CriminalModel;
use App\Models\UserModel;

class criminals extends BaseController {
    public function index() {
        $model = new CriminalModel();
        $data['title'] = 'Criminal';
        $data['location'] = 'Records';
        $data['subRoute'] = 'Criminal records';
        $data['criminals'] = $model->findall();
        $this->Render('criminals', $data);
    }

    public function viewdefendant() {
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

    public function assignDefendant() {
        $id = $this->request->getVar('id');
        $criminals = new CriminalModel();
        $officers = new UserModel();
        $polices = $officers->findAll();
        $criminal = $criminals->find($id);
        echo '
            <div class="form-group">
                <label for="fname">Criminal Name</label>
                <input type="text" disabled name="fName" value="' . $criminal[0]['fName'] . " " . $criminal[0]['fName'] . '" id="fName" class="form-control">
                <input type="hidden" value="' . $id . '" id="id">
            </div>
            <div class="form-group">
                <label for="charges">Action Committed</label>
                <input type="text" name="charges" required disabled value="' . $criminal[0]['charges'] . '" id="charges" class="form-control">
            </div>
             <div class="form-group">
                <label for="FirstLastName">Case No:</label>
                <input type="text" style="text-transform:uppercase;" placeholder="URP/RB/0000/2021"  required class="form-control" id="caseNo">
            </div>
             <div class="form-group">
                <label for="FirstLastName">assign to</label>
                <select name="assignedTo" class="form-control" id="assignedTo">
                <option value="" disabled selected hidden> - SELECT OFFICER -</option>';
        foreach ($polices as $police) {
            echo "
            <option value='" . $police['Fname'] . " " . $police['Lname'] . "'>" . $police['Fname'] . " " . $police['Lname'] . "</option>";
        }

        echo '</select></div>

        ';
    }
}
