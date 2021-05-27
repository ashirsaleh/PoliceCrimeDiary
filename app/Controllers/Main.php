<?php

namespace App\Controllers;

use Kint\Renderer\Renderer;

class Main extends BaseController {
	public function index() {
		$data['title'] = 'Police crime';
		$data['location'] = "Dashboard";
		$data['subRoute'] = "Home";
		$this->Render('dashboard', $data);
	}
	public function login(){
		$data['title'] = "Login: Police Crime Diary";
		echo view('login', $data);
	}
}
