<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title'		=> 'SMAN 1 RAWAMERTA'
		];
		return view('home', $data);
	}

	//--------------------------------------------------------------------

}
