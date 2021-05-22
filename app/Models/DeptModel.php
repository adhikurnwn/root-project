<?php namespace App\Models;

use CodeIgniter\Model;

class DeptModel extends Model{
    protected $table = 'department';
    protected $allowedFields = 'nama_dept';

    public function getDept(){
        return $this -> findAll();
    }
}