<?php namespace App\Controllers;

class Home extends BaseController
{

//FUNCTION VIEWS PUBLIC ----------------------------------------------------------------
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


//FUNCTION VIEWS USER ----------------------------------------------------------------
	public function dashboarduser()
	{
		$session = session();
        return view('v_user/v_UserCover', ['session' => $session]);
	}

	public function userJobOrder()
	{
		$session = session();
        return view('v_user/v_UserJobOrder', ['session' => $session]);
	}
	
	public function JobOrderPrint()
	{
		$session = session();
        return view('v_user/v_joborder_print', ['session' => $session]);
	}

	public function userPreventive()
	{
		$session = session();
        return view('v_user/v_UserPreventive', ['session' => $session]);
	}


//FUNCTION VIEWS DEPARTMENT HEAD ----------------------------------------------------
	public function HeadPage()
	{
		$session = session();
        return view('v_depthead/v_headDashboard', ['session' => $session]);
	}

	public function HeadOrder()
	{
		$session = session();
        return view('v_depthead/v_headAccOrder', ['session' => $session]);
	}

	public function HeadPreventive()
	{
		$session = session();
        return view('v_depthead/v_headAccPreventive', ['session' => $session]);
	}



//FUNCTION VIEWS REGISTER AND LOGIN
	public function register()
	{
		$session = session();
        return view('v_register', ['session' => $session]);
	}

//--------------------------------------------------------------------

}
