<?php namespace App\Controllers;
 
use App\Models\DeptModel;
 
class Department extends BaseController
{
    public function index()
    {
        helper(['form']);
        $department = new DeptModel();
        $data = $department ->  getDept();
        echo view('v_register', compact('data'));
    }
}