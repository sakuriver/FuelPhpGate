<?php

use Fuel\Core\Presenter;
use Fuel\Core\DB;

class Presenter_User extends Presenter 
{


    private $job_master_keys = [];

    public function view()
    {
        $users = Model_User::find_all();
        $job_ids = array();
        foreach($users as $user) {
            $job_ids[] = $user->job_id;
        }
        $job_masters = DB::select()->from('job_masters')->where('id', 'in', $job_ids)->execute()->as_array();
        foreach($job_masters as $job_master ) {
            if (empty($job_master["id"])) {
                continue;
            }
            $this->job_master_keys[$job_master["id"]] = $job_master;
        }
        array_walk($users, array($this, "_presentational"));

        $this->title = "あなたの隠れたスキル見抜きます";
        $this->users = $users;
    }


    private function _presentational(&$data)
    {
       $data->job_string = $this->job_master_keys[(int)$data->job_id]["name"];
    }

}