<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$session = session();
        return view('v_public/v_cover', ['session' => $session]);
	}

	public function contact()
	{
		$session = session();
        return view('v_public/v_contact', ['session' => $session]);
	}

	public function dashboarduser()
	{
		$session = session();
        return view('v_user/v_UserCover', ['session' => $session]);
	}

	public function register()
	{
		$session = session();
        return view('v_register', ['session' => $session]);
	}

	//--------------------------------------------------------------------

}
