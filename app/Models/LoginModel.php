<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    // protected $primaryKey = 'NIM';
    protected $allowedFields = ["username", "password"];
}