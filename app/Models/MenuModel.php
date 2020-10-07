<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class MenuModel extends Model
{
    protected $userTimestamps   = true;
    protected $allowedFields    = ['menu', 'menu_name', 'url_menu', 'menu_icon', 'treeview_icon', 'drop_icon', 'menu_id', 'submenu', 'url_submenu', 'submenu_icon', 'active'];

    public function saveMenu($data)
    {
        return $this->db->table('menu')->insert($data);
    }

    public function saveSubmenu($data)
    {
        return $this->db->table('submenu')->insert($data);
    }
}
