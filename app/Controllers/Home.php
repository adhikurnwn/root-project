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
        return view('v_depthead/v_headJobOrder', ['session' => $session]);
	}

	public function HeadOrderAcc()
	{
		$session = session();
        return view('v_depthead/v_headAccOrder', ['session' => $session]);
	}

	public function HeadPreventiveAcc()
	{
		$session = session();
        return view('v_depthead/v_headAccPreventive', ['session' => $session]);
	}

//FUNCTION VIEWS ADMINISTRATOR ----------------------------------------------------
public function HeadPageAdmin()
{
	$session = session();
	return view('v_admin/v_AdminDashboard', ['session' => $session]);
}

public function AdminRole()
{
	$session = session();
	return view('v_admin/v_AdminRole', ['session' => $session]);
}

public function AdminStatus()
{
	$session = session();
	return view('v_admin/v_AdminStatus', ['session' => $session]);
}

public function AdminDepartment()
{
	$session = session();
	return view('v_admin/v_AdminDepartment', ['session' => $session]);
}

public function AdminHakAkses()
{
	$session = session();
	return view('v_admin/v_AdminHakAkses', ['session' => $session]);
}

public function AdminBussinesUnit()
{
	$session = session();
	return view('v_admin/v_AdminBussinesUnit', ['session' => $session]);
}

public function AdminDepo()
{
	$session = session();
	return view('v_admin/v_AdminDepo', ['session' => $session]);
}

public function AdminSupplier()
{
	$session = session();
	return view('v_admin/v_AdminSupplier', ['session' => $session]);
}

public function AdminSatuan()
{
	$session = session();
	return view('v_admin/v_AdminSatuan', ['session' => $session]);
}

public function AdminKodeBarang()
{
	$session = session();
	return view('v_admin/v_AdminKodeBarang', ['session' => $session]);
}

public function AdminKodeInventaris()
{
	$session = session();
	return view('v_admin/v_AdminKodeInventaris', ['session' => $session]);
}

public function AdminItemMasuk()
{
	$session = session();
	return view('v_admin/v_AdminItemMasuk', ['session' => $session]);
}

public function AdminItemKeluar()
{
	$session = session();
	return view('v_admin/v_AdminItemKeluar', ['session' => $session]);
}

public function AdminMutasi()
{
	$session = session();
	return view('v_admin/v_AdminMutasi', ['session' => $session]);
}

//FUNCTION VIEWS REGISTER AND LOGIN
	public function register()
	{
		$session = session();
        return view('v_register', ['session' => $session]);
	}

//--------------------------------------------------------------------

}
