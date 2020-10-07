<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class AdminModel extends Model
{
    public function dashboard($role_id)
    {
        //Query menu
        $queryMenu = "SELECT `menu`.`id`, `menu`, `menu_name`, `url_menu`, `menu_icon`, `treeview_icon`, `drop_icon`
                        FROM `menu` JOIN `user_access`
                          ON `menu`.`id` = `user_access`.`menu_id`
                       WHERE `user_access`.`user_level` = $role_id
                       ORDER BY `user_access`.`menu_id` ASC
                    ";
        return $this->db->query($queryMenu)->getResultArray();
    }
}
