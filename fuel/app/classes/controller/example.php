<?php

use Fuel\Core\Controller;
use Fuel\Core\View;

class Controller_Example extends Controller
{
    public function action_test($player_id)
    {
        $data = array();
        $player_infos = array(
            "1" => array(
                "name" => 'Sakuriver',
                "max_stamina" => 140,
                "stamina" => 70,
                "lv" => 18,
            ),
            "2" => array(
                "name" => 'Kamedot',
                "max_stamina" => 100,
                "stamina" => 68,
                "lv" => 25,
            )
        );
        $data['title'] = 'River Vs MonsterEnemy';
        $data['username'] = $player_infos[$player_id]["name"];
        $data['max_stamina'] = $player_infos[$player_id]["max_stamina"];
        $data['stamina'] = $player_infos[$player_id]["stamina"];
        $data['player_lv'] = $player_infos[$player_id]["lv"];
        $data['monsters'] = array(
            [],
            [],
        );
        return View::forge('test', $data);


    }
}