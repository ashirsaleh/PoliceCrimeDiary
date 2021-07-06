<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CasesModel;
use App\Models\CriminalModel;

class Criminals extends BaseController {
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
        $polices = $officers->where(['rank' => 'Police Officer'])->findall();
        $criminal = $criminals->find($id);
        echo '
            <div class="form-group">
                <label for="cname">Criminal Name</label>
                <input type="text" disabled name="cname" value="' . $criminal[0]['fName'] . " " . $criminal[0]['lName'] . '" id="cname" class="form-control">
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
                <label for="assign">assign to</label>
                <select name="assign" class="form-control" id="assign">
                <option disabled selected hidden> - SELECT OFFICER -</option>';
        foreach ($polices as $police) {
            echo "
            <option value='" . $police['Fname'] . " " . $police['Lname'] . "'>" . $police['Fname'] . " " . $police['Lname'] . "</option>";
        }

        echo '</select></div>

        ';
    }
    public function editDefendant() {
        helper('form');
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'cname' => 'required|min_length[3]|max_length[50]',
                'charges' => 'required|min_length[3]|max_length[50]',
                'caseNo' => 'required|min_length[4]|max_length[60]',
                'assigned' => 'required',

            ];
            $errors = [];
            if (!$this->validate(
                $rules,
                $errors
            )) {
                $data['validation'] = $this->validator;
                echo $data['validation']->listErrors();
            } else {
                $case = array(
                    'criminalName' => $this->request->getVar('cname'),
                    'charges' => $this->request->getVar('charges'),
                    'caseNo' => $this->request->getVar('caseNo'),
                    'assignedTo' => $this->request->getVar('assignedTo'),
                    'caseStatus' => "NOT SOLVED",
                );
                $model = new CasesModel();
                $model->save($case);
                // return redirect()->to('criminals');
            }
        }
    }
}
