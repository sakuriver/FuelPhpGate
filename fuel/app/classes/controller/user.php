<?php

use Fuel\Core\Controller;
use Fuel\Core\Presenter;
use Fuel\Core\Response;

class Controller_User extends Controller
{

    const USER_LIMIT = 30;


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
}