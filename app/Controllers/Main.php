<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CriminalModel;
use App\Models\ComplaintModel;
use App\Models\CasesModel;

class Main extends BaseController {
	public function index() {
		$users = new UserModel();
		$criminal = new CriminalModel();
		$complaints = new ComplaintModel();
		$cases = new CasesModel();

		$data['userCount'] = $users->countAllResults();
		$data['criminalCount'] = $criminal->countAllResults();
		$data['complaintCount'] = $complaints->countAllResults();
		$data['caseCount'] = $cases->countAllResults();

		$data['users'] = $users->findAll(5);
		$data['criminals'] = $criminal->findAll(5);
		$data['complaints'] = $complaints->findAll(5);
		$data['cases'] = $cases->findAll(5);


		$data['title'] = 'Police crime';
		$data['location'] = "Dashboard";
		$data['subRoute'] = "Home";
		$this->Render('dashboard', $data);
	}
}
