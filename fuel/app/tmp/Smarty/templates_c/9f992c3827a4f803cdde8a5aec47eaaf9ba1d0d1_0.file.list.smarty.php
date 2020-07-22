<?php
/* Smarty version 3.1.36, created on 2020-07-22 11:26:41
  from '/Users/apple/Documents/GitHub/FuelPhpGate/fuel/app/views/skill/list.smarty' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f182271667d79_05034928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f992c3827a4f803cdde8a5aec47eaaf9ba1d0d1' => 
    array (
      0 => '/Users/apple/Documents/GitHub/FuelPhpGate/fuel/app/views/skill/list.smarty',
      1 => 1595417198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f182271667d79_05034928 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <meta charset="UTF-8">
    <head><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</head>
    <body>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
      <form action="/skill/list/<?php echo $_smarty_tpl->tpl_vars['element']->value["id"];?>
" method="post">
          <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['element']->value["name"];?>
属性検索">
      </form>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php echo $_smarty_tpl->tpl_vars['element_name']->value;?>
のスキル一覧
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['skills']->value, 'skill');
$_smarty_tpl->tpl_vars['skill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['skill']->value) {
$_smarty_tpl->tpl_vars['skill']->do_else = false;
?>
          <div style="background-color: #999;">
             スキル名　：　<?php echo $_smarty_tpl->tpl_vars['skill']->value['title'];?>

          </div>
          <div>
             属性 <?php echo $_smarty_tpl->tpl_vars['skill']->value['element'];?>

          </div>
          <div>
             説明 <?php echo $_smarty_tpl->tpl_vars['skill']->value['description'];?>

          </div>
      <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </body>
</html><?php }
}
