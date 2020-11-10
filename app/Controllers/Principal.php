<?php namespace App\Controllers;

class Principal extends BaseController
{

	public function _remap($method)
	{

		if ($method === 'index')
		{
			$this->index();
		}
		else
		{
			
			$this->ver($method);
			
			
		}
		
	}


	public function index()
	{
		echo view('principal');
	}


	public function ver()
	{
		echo view('principal');
	}

	//--------------------------------------------------------------------

}
