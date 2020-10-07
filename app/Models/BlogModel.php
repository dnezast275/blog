<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class BlogModel extends Model
{
    protected $table    = 'category';
    protected $userTimestamps   = true;
    // protected $allowedFields    = ['menu', 'menu_name', 'url_menu', 'menu_icon', 'treeview_icon', 'drop_icon', 'menu_id', 'submenu', 'url_submenu', 'submenu_icon', 'active'];

    public function searchCategory($keyword)
    {
        return $this->table('category')->like('category_name', $keyword);
    }
}
