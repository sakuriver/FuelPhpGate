<?php

use Fuel\Core\Controller;
use Fuel\Core\Response;
use Parser\View_Smarty;

class Controller_Skill extends Controller
{


    function action_list($element_id = '1')
    {
        $data = array(
            'title' => 'スキル一覧ページ',
        );
        $element_skills = array(
            '1' => array(
                $this->create_skill_info(1, '1', "ファイアー", "大きい赤いたまが現れて撃破する"),
                $this->create_skill_info(1, '1', "ゼノキャノン", "大型の大砲型の機械から放たれる太陽のようなあつさの火魔法"),
                $this->create_skill_info(1, '1', "ブラストバースト", "大きい赤いたまが現れて撃破する"),
                $this->create_skill_info(1, '1', "デスファイヤー", "死を司る黒い炎。触れた物は体が消滅する"),
            ),
            '2' => array(
                $this->create_skill_info(5, '2', "ウォーターガン", "大きい赤いたまが現れて撃破する"),
                $this->create_skill_info(6, '2', "バブルキャノン", "大型の大砲型の機械から放たれる太陽のようなあつさの火魔法"),
                $this->create_skill_info(7, '2', "クラスターポンプ", "大きい赤いたまが現れて撃破する"),
                $this->create_skill_info(8, '2', "ウォーターウォール", "死を司る黒い炎。触れた物は体が消滅する"),

            ),
            '3' => array(
                $this->create_skill_info(5, '3', "リーフブレード", "木の葉を剣に変化させて攻撃。急所に当たりやすい"),
                $this->create_skill_info(6, '3', "ソーラーキャノン", "太陽の光を充電して、養分にしてから攻撃をする"),
                $this->create_skill_info(7, '3', "ウッドソード", "大木を切り落として作成した木製の剣で相手を斬り付ける"),
                $this->create_skill_info(8, '3', "クォーターチャージ", "身体にエネルギーを貯めて、相手を斬り付ける"),
            ),
        );
        $element_maps = array(
            '1' => $this->create_element_info('1', '炎'),
            '2' => $this->create_element_info('2', '水'),
            '3' => $this->create_element_info('3', '草'),
        );
        $data['elements'] = array();
        $data['skills'] = array();
        foreach ($element_maps as $element_key => $element_data) {
            $data['elements'][] = $element_data;
        }

        $data['element_name'] = $element_maps[$element_id]['name'];
        foreach ($element_skills[$element_id] as $element_skill) {
            $data['skills'][] = array(
              'title' => $element_skill['title'],
              'element' => $element_maps[$element_skill['element_id']]['name'],
              'description' => $element_skill['description'],  
            );
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