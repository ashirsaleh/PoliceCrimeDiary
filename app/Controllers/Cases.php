<?php

namespace App\Controllers;

use App\Models\AuthModel;

class cases extends BaseController
{
    public function index()
    {
        $data['title'] = 'cases';
        $data['location'] = 'Records';
        $data['subRoute'] = 'Recorded Cases';
        $this->Render('cases', $data);
    }
}