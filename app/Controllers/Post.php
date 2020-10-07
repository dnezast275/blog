<?php

namespace App\Controllers;

class Post extends BaseController
{
    public function index()
    {
        $postModel = new \App\Models\AdminModel;
        $db = \Config\Database::connect();

        if (!session()->get('email')) {
            return redirect()->to(base_url('/auth'));
        }

        $role_id = session()->get('user_level');


        $menu = $postModel->dashboard($role_id);
        $data = [
            'menulist'  => $menu,
            'title'     => 'SMAN 1 RAWAMERTA',
            'head'      => 'Add Post',
            'parent'    => 'Post',
            'submenu'   => 'Listed Post',
            'db'        => $db
        ];
        return view('post/list-post', $data);
    }

    public function addpost()
    {
        $postModel = new \App\Models\AdminModel;
        $db = \Config\Database::connect();

        if (!session()->get('email')) {
            return redirect()->to(base_url('/auth'));
        }

        $role_id = session()->get('user_level');


        $menu = $postModel->dashboard($role_id);
        $data = [
            'menulist'  => $menu,
            'title'     => 'Tambah Post | Sistem Informasi',
            'parent'    => 'Post',
            'submenu'   => 'Add Post',
            'db'        => $db
        ];

        return view('post/add-post', $data);
    }

    public function category()
    {
        $pager = \Config\Services::pager();
        $adminModel = new \App\Models\AdminModel;
        $this->postModel  = new \App\Models\BlogModel;
        $db = \Config\Database::connect();

        if (!session()->get('email')) {
            return redirect()->to(base_url('/auth'));
        }

        $role_id = session()->get('user_level');


        $menu = $adminModel->dashboard($role_id);
        $currentPage = $this->request->getVar('page_category') ? $this->request->getVar('page_category') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $postModel = $this->postModel->searchCategory($keyword);
        } else {
            $postModel = $this->postModel;
        }
        $data = [
            'menulist'  => $menu,
            'title'     => 'Kategori | Sistem Informasi',
            'parent'    => 'Blog',
            'submenu'   => 'Kategori',
            'db'        => $db,
            'category'  => $postModel->paginate(5, 'category'),
            'pager'     => $postModel->pager,
            'currentPage'   => $currentPage
        ];

        return view('category/category', $data);
    }

    //--------------------------------------------------------------------

}