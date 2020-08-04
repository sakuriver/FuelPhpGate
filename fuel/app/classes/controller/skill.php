<?php

use Fuel\Core\Controller;
use Fuel\Core\Response;
use Parser\View_Smarty;

class Controller_Skill extends Controller
{


    function action_list($select_element_id = '1')
    {
        $data = array(
            'title' => 'スキル一覧ページ',
        );
        $skill_masters = Model_SkillMaster::find_all();
        $element_skills = array();
        foreach ($skill_masters as $skill_master) {
            $element_id = $skill_master["element_id"];
            $element_skills[$element_id][] = $this->create_skill_info(
                $skill_master["id"],
                $element_id,
                $skill_master["title"],
                $skill_master["description"]
            );
        }
        $element_masters = Model_ElementMaster::find_all();
        $element_maps = array();
        foreach ($element_masters as $element_master) {
            $element_id = $element_master["id"];
            $element_maps[$element_id] = $this->create_element_info($element_id, $element_master["title"]);
        }
        $data['elements'] = array();
        $data['skills'] = array();
        foreach ($element_maps as $element_key => $element_data) {
            $data['elements'][] = $element_data;
        }

        $data['element_name'] = $element_maps[$select_element_id]['name'];
        if (isset($element_skills[$select_element_id])) {
            foreach ($element_skills[$select_element_id] as $element_skill) {
                $data['skills'][] = array(
                  'title' => $element_skill['title'],
                  'element' => $element_maps[$element_skill['element_id']]['name'],
                  'description' => $element_skill['description'],  
                );
            }
        }

        return Response::forge(View_Smarty::forge('skill/list', $data));
    }

    private function create_skill_info($skill_id, $element_id, $title, $description)
    {
        return array(
            'id' => $skill_id,
            'element_id' => $element_id,
            'title' => $title,
            'description' => $description
        );

    }

    private function create_element_info($id, $name) 
    {
        return array(
            'id' => $id,
            'name' => $name
        );
    }
}