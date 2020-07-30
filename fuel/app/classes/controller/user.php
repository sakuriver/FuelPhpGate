<?php

use Fuel\Core\Controller;
use Fuel\Core\Presenter;
use Fuel\Core\Response;

class Controller_User extends Controller
{
    public function action_index()
    {
        return Response::forge(Presenter::forge('user'));
    }
}