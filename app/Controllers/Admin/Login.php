<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Login extends BaseController
{
	public function index()
	{
		return view('admin/login');

	}


	public function loga()
	{
		return redirect()->to(base_url('/admin/principal'));

	}

	//--------------------------------------------------------------------

}
