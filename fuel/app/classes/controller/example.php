<?php

use Fuel\Core\Controller;
use Fuel\Core\View;

class Controller_Example extends Controller
{
    public function action_test()
    {
        $data = array();
        $data['title'] = 'River Vs MonsterEnemy';
        $data['username'] = 'Sakuriver';
        $data['max_stamina'] = 140;
        $data['stamina'] = 45;
        $data['player_lv'] = 18;
        $data['monsters'] = array(
            [],
            [],
        );
        return View::forge('test', $data);


    }
}