<?php

use Fuel\Core\Controller;
use Fuel\Core\Presenter;
use Fuel\Core\Response;

class Controller_User extends Controller
{
    public function action_index()
    {
        $user = Model_User::forge();
        $user->name = "ジョン・スミス";
        $user->display_name = "ミスターx";
        $user->level = 100;
        $user->job_id = 1002;
        $user->updated_at = date("Y-m-d H:i:s");
        $user->save();
        return Response::forge(Presenter::forge('user'));
    }
}