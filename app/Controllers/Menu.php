<?php

namespace App\Controllers;

class Menu extends BaseController
{
    public function index()
    {
        $data = [
            'title'        => 'SMAN 1 RAWAMERTA'
        ];
        return view('home', $data);
    }

    public function addmenu()
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
            'title'     => 'Tambah Menu | Sistem Informasi',
            'parent'    => 'Menu Management',
            'submenu'   => 'Add Menu',
            'db'        => $db
        ];

        return view('menu/add-menu', $data);
    }

    public function savemenu()
    {
        $menuModel = new \App\Models\MenuModel;
        $db = \Config\Database::connect();
        $parent = $db->table('menu')->where('menu_name', $this->request->getVar('parent'))->get()->getRowArray();
        if ($this->request->getVar('parent') == NULL) {
            $data = [
                'menu'          => url_title($this->request->getVar('menu-name'), '-', TRUE),
                'menu_name'     => $this->request->getVar('menu-name'),
                'url_menu'      => 'javascript:void(0)',
                'menu_icon'     => '',
                'treeview_icon' => '',
                'drop_icon'     => ''
            ];
            $addMenu = $menuModel->saveMenu($data);
            session()->setFlashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Menu Utama telah ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            return redirect()->to(base_url('/menu/addmenu'));
        } else {
            $data = [
                'menu_id'       => $parent['id'],
                'submenu'       => $this->request->getVar('menu-name'),
                'url_submenu'   => $parent['menu'] . '/' . url_title($this->request->getVar('menu-name'), '-', TRUE),
                'submenu_icon'  => '',
                'active'        => 1
            ];
            $addSubmenu = $menuModel->saveSubmenu($data);
            session()->setFlashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Submenu telah ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            return redirect()->to(base_url('/menu/addmenu'));
        }
    }

    //--------------------------------------------------------------------

}