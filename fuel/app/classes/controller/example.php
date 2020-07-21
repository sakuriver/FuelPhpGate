<?php

use Fuel\Core\Controller;
use Fuel\Core\Controller_Template;
use Fuel\Core\View;

class Controller_Example extends Controller_Template
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

    public function action_index()
    {
        $this->template->title = 'Sakuriverの特徴';
        $this->template->content = View::forge('example/index');

    }

    public function action_howto()
    {
        $this->template->title = 'Sakuriverとは';
        $this->template->content = View::forge('example/howto');
       
    }

    public function action_petinfo()
    {
        $this->template->title = '実家のペットとは';
        $this->template->content = View::forge('example/petinfo');       
    }


    public function action_nowinfo()
    {
        $this->template->title = '現在は';
        $this->template->content = View::forge('example/nowinfo');       
    }



}