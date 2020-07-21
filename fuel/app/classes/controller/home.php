<?php

use Fuel\Core\Controller_Rest;

class Controller_Home extends Controller_Rest {
    public function get_index($player_id) {
        $this->format = 'json';
        $data = array(
            "1" => array(
            'user' => array(
                'name' => 'sakuriver',
                'level' => 25,
                'exp' => 200,
                'max_exp' => 2000,
                'stamina' => 30,
                'max_stamina' => 50
            ),
            'favorite_character_id' => 200,
            'badge' => array(
                'information' => 100,
                'gift' => 100,
            ),
            'is_tutorial' => true,
           ),
           "2" => array(
               'user' => array(
               'name' => 'king',
               'level' => 200,
               'exp' => 8000,
               'max_exp' => 90000,
               'stamina' => 120,
               'max_stamina' => 150
            ),
            'favorite_character_id' => 300,
            'badge' => array(
                'information' => 1,
                'gift' => 10,
            ),
            'is_tutorial' => false,
           ),           
        );

        return $this->response($data[$player_id]);
    }
}