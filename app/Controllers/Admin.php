<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $adminModel = new \App\Models\AdminModel;
        $db = \Config\Database::connect();

        if (!session()->get('email')) {
            return redirect()->to(base_url('/auth'));
        }

        $role_id = session()->get('user_level');


        $menu = $adminModel->dashboard($role_id);
        $data = [
            'menulist'  => $menu,
            'title'     => 'Dashboard | Sistem Informasi',
            'parent'    => 'Dashboard',
            'submenu'   => 'Dashboard',
            'db'        => $db
        ];

        return view('admin/dashboard.php', $data);
    }



    //--------------------------------------------------------------------

}