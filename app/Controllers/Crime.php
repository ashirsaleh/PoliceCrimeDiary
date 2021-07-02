<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\CriminalModel;

class crime extends BaseController{
    public function index(){
        $data['title'] = 'Recording Crime';
        $data['location'] = 'Case Statements';
        $data['subRoute'] = 'Record Crime';
        $this->Render('crime',$data);
    }

    public function AddCriminal(){
    {
        helper('form');
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'fName' => 'required|min_length[3]|max_length[50]',
                'lName' => 'required|min_length[2]|max_length[50]',
                'age' => 'required',
                // 'resident' => 'required|min_length[2]|max_length[255]',
                'dateArrested' => 'required',
                'locationArrested' => 'required|min_length[2]|max_length[255]',
                'guardianName' => 'required|min_length[2]|max_length[255]',
                // 'gRelation' => 'required',
                'circumstance' => 'required|min_length[2]|max_length[255]',
                'charges' => 'required|min_length[2]|max_length[255]',
                // 'wstatus' => 'required', 
                'bailset' => 'required',
            ];
            $errors = [];
            if (!$this->validate(
                $rules, $errors
            )) {
                $data['validation'] = $this->validator;
                echo $data['validation']->listErrors();
                // return redirect()->to('criminals');

            } else {
                $criminal = array(
                    'fName' => $this->request->getVar('fName'),
                    'lName' => $this->request->getVar('lName'),
                    'age' => $this->request->getVar('age'),
                    // 'resident' => $this->request->getVar('resident'),
                    'locationArrested' => $this->request->getVar('locationArrested'),
                    'dateArrested' => date('Y-m-d H:i:s', strtotime($this->request->getVar('dateArrested'))),
                    'guardianName' => $this->request->getVar('guardianName'),
                    'charges' => $this->request->getVar('charges'),
                    'circumstance' => $this->request->getVar('circumstance'),
                    'bailset' => $this->request->getVar('bailset'),
                );
                $model = new CriminalModel();
                $model->save($criminal);
                return redirect()->to('criminals');
            }
        }
    }
    }
    public function viewDefendant()
    {
        $id = $this->request->getVar('id');
        $model = new CriminalModel();
        $criminal = $model->find($id);
        echo '
        <table class="table table-hover">
            <tr>
                <th>Full Name</th>
                <td>' . $criminal['fName'] . " " . $criminal['lName'] . '</td>
            </tr>
            <tr>
                <th>Age of the defendant</th>
                <td>' . $criminal['age'] . '</td>
            </tr>
            <tr>
                <th>Charges arrested for</th>
                <td>' . $criminal['charges'] . '</td>
            </tr>
            <tr>
                <th>Arrested date, time and location</th>
                <td>' . $criminal['dateArrested'] . " ". $criminal['locationArrested'].'</td>
            </tr>
            <tr>
                <th>Name of Guardian, Relationship and Contacts Info</th>
                <td>' . $criminal['guardianName'] . " " . $criminal['gRelation']. " " . $criminal['age'].'</td>
            </tr>
        </table>
        ';
    }
    public function deleteDefendant()
    {
        $id = $this->request->getVar('id');
        $model = new CriminalModel();
        $model->delete($id);
        
    }
}