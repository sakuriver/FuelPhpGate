<?php

use Fuel\Core\Presenter;

class Presenter_User extends Presenter 
{


    private $job_masters = array(1002 => array('name' => "伝説の魔女"));

    public function view()
    {
        $users = Model_User::find_all();
        array_walk($users, array($this, "_presentational"));
        $this->title = "あなたの隠れたスキル見抜きます";
        $this->users = $users;
    }


    private function _presentational(&$data)
    {
        $data->job_string = $this->job_masters[$data->job_id]["name"];
    }

}