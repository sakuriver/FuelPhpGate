<?php

use Fuel\Core\Controller;
use Fuel\Core\View;
class Controller_AdminTop extends Controller
{
    public function get_index()
    {
        return Response::forge(View_Smarty::forge('admin/top'));
    }

    public function get_user_add()
    {
        $user = Model_User::forge();
        $row = array();
        $first_name_value = random_int(0, 3);
        $last_name_value = random_int(0, 3);
        $first_names = array("Mike", "Chris", "Becca", "Ronnie", "Sophie");
        $last_names = array("Smith", "Clark", "Wright", "Baker");

        $row["name"] = $first_name_value . "." . $last_name_value;
        $row["display_name"] = $first_names[$first_name_value] . "・" . $last_names[$last_name_value];
        $row["level"] = random_int(3, 45);
        $row["job_id"] = 1001;
        $row["updated_at"] = date("Y-m-d H:i:s"); 
        $user->set($row);
        $user->save();
        return Response::forge(View_Smarty::forge('admin/top'));
    }

}