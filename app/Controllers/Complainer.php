<?php

namespace App\Controllers;

use App\Models\ComplaintModel;

class Complainer extends BaseController {
    public function index() {
        $model = new ComplaintModel();
        $data['title'] = 'Complainers';
        $data['location'] = 'Records';
        $data['subRoute'] = 'Complainer records';
        $data['complainers'] = $model->findall();
        $this->Render('complainer', $data);
    }

    public function  AddComplaints() { {
            helper('form');
            if ($this->request->getMethod() === 'post') {
                $rules = [
                    'FName' => 'required|min_length[5]|max_length[15]',
                    'LName' => 'required|min_length[5]|max_length[15]',
                    'address' => 'required',
                    'date' => 'required',
                    'natureComplaints' => 'required',
                    'phoneNum' => 'required',
                    'th_name' => 'required',
                    'accusation' => 'required',
                    'def_info' => 'required',
                    'other_info' => 'required',
                ];
                $errors = [];
                if (!$this->validate(
                    $rules,
                    $errors
                )) {
                    $data['validation'] = $this->validator;
                } else {
                    $file = $this->request->getFile('statement');
                    if (!$file->isValid()) {
                        return $this->fail($file->getErrorString());
                    }
                    $file->move(ROOTPATH . 'public/assets/uploads/documents');
                    $url = "assets/uploads/documents/" . $file->getName();
                    $complaint = array(
                        'FName' => $this->request->getVar('FName'),
                        'LName' => $this->request->getVar('LName'),
                        'address' => $this->request->getVar('address'),
                        'natureComplaints' => $this->request->getVar('natureComplaints'),
                        'th_name' => $this->request->getVar('th_name'),
                        'date' => date('Y-m-d H:i:s', strtotime($this->request->getVar('date'))),
                        'phoneNum' => $this->request->getVar('phoneNum'),
                        'color' => $this->request->getVar('color'),
                        'w_statement' => $url,
                        'p_number' => $this->request->getVar('p_number'),
                        'other_info' => $this->request->getVar('other_info'),
                        'accusation' => $this->request->getVar('accusation'),
                        'def_info' => $this->request->getVar('def_info'),
                    );
                    $model = new ComplaintModel();
                    $model->save($complaint);
                    return redirect()->to('complainer');
                }
            }
            $data['title'] = 'Record Complaints';
            $data['location'] = 'Case Statements';
            $data['subRoute'] = 'Record Complaints';
            $this->Render('complaints', $data);
        }
    }
    public function viewComplaints() {
        $id = $this->request->getVar('id');
        $model = new ComplaintModel();
        $complaint = $model->find($id);
        echo '
        <table class="table table-hover">
            <tr>
                <th>Full Name</th>
                <td>' . $complaint['th_name'] . '</td>
            </tr>
            <tr>
                <th>Accusation</th>
                <td>' . $complaint['accusation'] . '</td>
            </tr>
            <tr>
                <th>Defendant information</th>
                <td>' . $complaint['def_info'] . '</td>
            </tr>
            <tr>
                <th>Describe what you saw</th>
                <td>' . $complaint['other_info'] . '</td>
            </tr>
            <tr>
                <th>Vehicle involved</th>
                <td>' . $complaint['type'] . " " . $complaint['p_number'] . " " . $complaint['color'] . '</td>
            </tr>
             <tr>
                <th>Witnes Statement</th>
                <td> <img height="300" width="350" src="' . $complaint['w_statement'] . '" </td>
            </tr>
        </table>
        ';
    }
    public function deleteComplaints() {
        $id = $this->request->getVar('id');
        $model = new ComplaintModel();
        $model->delete($id);
    }
}
