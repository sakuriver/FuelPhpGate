<?php

use Fuel\Core\Model_Crud;

class Model_User extends Model_Crud{
    protected static $_table_name = 'users';
    protected static $_primary_key = 'user_id';
}