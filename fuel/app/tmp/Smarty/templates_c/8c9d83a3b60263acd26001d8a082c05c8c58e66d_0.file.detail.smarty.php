<?php
/* Smarty version 3.1.36, created on 2020-08-04 17:15:05
  from '/Users/apple/Documents/GitHub/FuelPhpGate/fuel/app/views/user/detail.smarty' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f299799bdcd60_27880968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c9d83a3b60263acd26001d8a082c05c8c58e66d' => 
    array (
      0 => '/Users/apple/Documents/GitHub/FuelPhpGate/fuel/app/views/user/detail.smarty',
      1 => 1596560374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f299799bdcd60_27880968 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<title>酒場</title>
</head>
<body>
    <div class="header" style="min-height: 80px;">
       傭兵詳細情報
    </div>
    <div>
        <a href="/user/list">酒場一覧へ戻る</a>
        <div style="border: 1px solid black; padding:5px; width:350px;">
             <div >
                <div>基本情報</div>
             </div>
             <div >
               <div>登録番号:<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</div>
               <div>登録名:<?php echo $_smarty_tpl->tpl_vars['user']->value['display_name'];?>
</div>
               <div>レベル:<?php echo $_smarty_tpl->tpl_vars['user']->value['level'];?>
</div>
             </div>
           </div>
        <div>
        <div style="border: 1px solid black; padding:5px; width:350px;">
           <div>
              <div>スキル一覧</div>
           </div>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_skills']->value, 'user_skill', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['user_skill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['user_skill']->value) {
$_smarty_tpl->tpl_vars['user_skill']->do_else = false;
?>
            <div style="border: 1px solid black; padding:5px; width:150px;">
              <div>スキル名:<?php echo $_smarty_tpl->tpl_vars['skill_maps']->value[$_smarty_tpl->tpl_vars['user_skill']->value['skill_id']]->title;?>
(<?php echo $_smarty_tpl->tpl_vars['user_skill']->value['skill_id'];?>
)</div>
              <div>取得日:<?php echo $_smarty_tpl->tpl_vars['user_skill']->value['created_at'];?>
</div>
            </div>
           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
          
    </div>
</body>
</html><?php }
}
