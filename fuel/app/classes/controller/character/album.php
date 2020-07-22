<?php

use Fuel\Core\Controller;
use Fuel\Core\View;

class Controller_Character_Album extends Controller {
    public function action_index() {

    }

    public function action_detail() {
        return View::forge('album/detail');
    }
}