<?php

namespace App\Controllers;

use App\Models\CasesModel;

class cases extends BaseController
{
    public function index()
    {
        $model = new CasesModel();
        $data['title'] = 'cases';
        $data['location'] = 'Records';
        $data['subRoute'] = 'Recorded Cases';
        $data['cases'] = $model->findall();
        $this->Render('cases', $data);
    }
}