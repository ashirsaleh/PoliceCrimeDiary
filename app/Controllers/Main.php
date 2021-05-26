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
}
