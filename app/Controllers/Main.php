<?php

namespace App\Controllers;

use Kint\Renderer\Renderer;

class Main extends BaseController {
	public function index() {
		$data['title'] = 'Police crime';
		$data['location'] = "Dashboard";
		$data['subRoute'] = "Home";
		$this->Render('dashboard', $data);
		//$this->Render('report',$data);
	}
	public function users(){

	}
	public function login(){
		$data['title'] = "Login: Police Crime Diary";
		echo view('login', $data);
	}


    public function report(){
		 $data['title'] = "Filling: Police Crime Diary Report Form";
		 $this->Render('report', $data);
	 }

} 