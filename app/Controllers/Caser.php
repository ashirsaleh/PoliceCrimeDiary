<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Caser extends BaseController
{
    public function index()
    {
        $data['title'] = 'Record Case';
        $data['location'] = 'Case Statements';
        $data['subRoute'] = 'Record Case';
        $this->Render('caser', $data);
    }
}