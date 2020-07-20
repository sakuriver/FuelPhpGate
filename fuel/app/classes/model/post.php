<?php

use Fuel\Core\Model_Crud;

class Model_Post extends Model_Crud
{
    protected static $_table_name = 'posts';
    protected static $_primary_key = 'id';
}