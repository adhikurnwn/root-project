<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['firstname','lastname','user_name','user_email','user_dept','user_password','user_created_at'];
}