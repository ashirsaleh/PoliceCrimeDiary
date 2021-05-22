<?php

namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
        $data = [];
		
		echo view('templates/header', $data);
		echo view('dashboard', $data);
		//echo view('login',$data);
		echo view('templates/footer', $data);
	}
}
