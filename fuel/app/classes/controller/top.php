<?php

use Fuel\Core\Controller;
use Fuel\Core\Controller_Template;
use Fuel\Core\View;

class Controller_Top extends Controller_Template
{
    public function get_index()
    {

        return Response::forge(View_Smarty::forge('top'));
    }

}