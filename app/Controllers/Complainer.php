<?php

namespace App\Controllers;

use App\Models\ComplaintModel;

class Complainer extends BaseController
{
    public function index()
    {
        $model = new ComplaintModel();
        $data['title'] = 'Complainers';
        $data['location'] = 'Records';
        $data['subRoute'] = 'Complainer records';
        $data['complainers'] = $model->findall();
        $this->Render('complainer', $data);
    }

    public function  AddComplaints()
    { {
            helper('form');
            if ($this->request->getMethod() === 'post') {
                $rules = [
                    'FName' => 'required|min_length[3]|max_length[50]',
                    'LName' => 'required|min_length[2]|max_length[50]',
                    'address' => 'required',
                    'date' => 'required',
                    'natureComplaints' => 'required|min_length[5]|max_length[255]',
                    'phoneNum' => 'required|min_length[10]|max_length[20    ]',
                    'th_name' => 'required|min_length[2]|max_length[50]',
                    'accusation' => 'required|min_length[2]|max_length[255]',
                    'def_info' => 'required|min_length[10]|max_length[255]',
                    'other_info' => 'required|min_length[10]|max_length[255]',
                ];
                $errors = [];
                if (!$this->validate(
                    $rules,
                    $errors
                )) {
                    $data['validation'] = $this->validator;
                    echo $data['validation']->listErrors();
                    // return redirect()->to('complainer');

                } else {
                    $complaint = array(
                        'FName' => $this->request->getVar('FName'),
                        'LName' => $this->request->getVar('LName'),
                        'address' => $this->request->getVar('address'),
                        'natureComplaints' => $this->request->getVar('natureComplaints'),
                        'th_name' => $this->request->getVar('th_name'),
                        'date' => date('Y-m-d H:i:s', strtotime($this->request->getVar('date'))),
                        'phoneNum' => $this->request->getVar('phoneNum'),
                        'color' => $this->request->getVar('color'),
                        'w_statement' => $this->request->getVar('w_statement'),
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
        }
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