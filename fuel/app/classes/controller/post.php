<?php

use Fuel\Core\Controller;
use Fuel\Core\Input;
use Fuel\Core\Response;
use Fuel\Core\View;

class Controller_Post extends Controller
{


    public function action_index()
    {
        $data = array();
        $data['rows'] = Model_Post::find_all();
        return View::forge('post/list', $data);
    }

    public function action_auto_insert()
    {
        for ($i = 0; $i < 10; $i++)
        {
            $post = Model_Post::forge();

            $row = array();
            $row['title'] = $i . '番目の投稿の件名';
            $row['summary'] = $i . '番目の投稿の外洋';
            $row['body'] = 'これは' . $i . '番目の投稿です。';
            $now = time();
            $row['created_at'] = $now;
            $row['updated_at'] = $now;

            $post->set($row);
            $post->save();

        }
        echo "finished";
    }

    public function action_form()
    {
        return View::forge('post/form');
    }

    public function action_save()
    {
        $form = array();
        $form['title'] = Input::post('title');
        $form['summary'] = Input::post('summary');
        $form['body'] = Input::post('body');
        $now = time();
        $form['created_at'] = $now;
        $form['updated_at'] = $now;

        $post = Model_Post::forge();
        $post->set($form);
        $post->save();
        Response::redirect('post/form');
    }

}