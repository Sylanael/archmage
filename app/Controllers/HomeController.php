<?php namespace App\Controllers;

class HomeController extends BaseController
{
	public function characterSheet()
	{
		return view('sheet');
	}

	public function welcome()
	{
		return view('welcome');
	}

}
