<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class UserModel extends Model
{
    protected $table = 'komik';
    protected $userTimestamps   = true;
    protected $allowedFields    = ['user_level', 'active', 'nama', 'email', 'password', 'created_at', 'updated_at'];

    public function login($data)
    {
        return $this->db->table('user')->where('email', $data['email'])->get()->getRowArray();
    }

    public function register($data)
    {
        return $this->db->table('user')->insert($data);
    }
}
