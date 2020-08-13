<?php

use Fuel\Core\Controller;
use Fuel\Core\Input;
use Fuel\Core\Presenter;
use Fuel\Core\Response;

class Controller_User extends Controller
{

    const USER_LIMIT = 30;
    const HUNTER_ID = 1002;

    const COMPLETE_MESSAGE = "傭兵として登録しておいたぜ";

    public function action_index()
    {
        return Response::forge(Presenter::forge('user'));
    }

    public function action_list()
    {
        $users = Model_User::find_all(self::USER_LIMIT);
        $data["users"] = $users;
        return Response::forge(View_Smarty::forge('user/list', $data));
    }


    public function action_detail($user_id)
    {
        $user = Model_User::find_by_pk($user_id);
        $user_skills = Model_UserSkill::find_by('user_id', $user->id, "=");
        $skill_masters = Model_SkillMaster::find_all();
        $skill_maps = array();
        foreach ($skill_masters as $skill_master) {
            $skill_id = $skill_master["id"];
            $skill_maps[$skill_id] = $skill_master;
        }

        $data["user"] = $user;
        $data["user_skills"] = $user_skills;
        $data["skill_maps"] = $skill_maps;
        return Response::forge(View_Smarty::forge('user/detail', $data));
    }

    public function action_regist_top()
    {
        $data = array();
        $data["message"] = "";

        return Response::forge(View_Smarty::forge('user/regist', $data));

    }

    public function action_regist_top_add()
    {
        $data = array();


        $name = Input::post('name');
        $display_name = Input::post('display_name');
        $level = Input::post('level');

        $user = Model_User::forge();
        $user->name = $name;
        $user->display_name = $display_name;
        $user->level = $level;
        $user->job_id = self::HUNTER_ID;
        $user->updated_at = date("Y-m-d H:i:s");
        $user->save();

        $data["message"] = self::COMPLETE_MESSAGE;
        
        return Response::forge(View_Smarty::forge('user/regist', $data));

    }
}