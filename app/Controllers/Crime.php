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
}