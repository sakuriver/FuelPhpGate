<?php
/* Smarty version 3.1.36, created on 2020-08-04 16:06:25
  from '/Users/apple/Documents/GitHub/FuelPhpGate/fuel/app/views/user/list.smarty' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f2987818462b8_94041753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbad57543663840fdafb38f025543991c64daf19' => 
    array (
      0 => '/Users/apple/Documents/GitHub/FuelPhpGate/fuel/app/views/user/list.smarty',
      1 => 1596557182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2987818462b8_94041753 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<title>酒場</title>
</head>
<body>
    <div class="header" style="min-height: 80px;">
       傭兵一覧
    </div>
    <div>
            <div style="float:left">

        <a href="/top">酒場の窓口へ戻る</a>
        <a href="/skill/list">技図鑑</a>
        </div>
        <div style="clear:both"></div>
          
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <div style="float:left;border: 1px solid black; padding:5px; width:150px;">
              <div>登録名:<?php echo $_smarty_tpl->tpl_vars['item']->value['display_name'];?>
</div>
              <div>レベル:<?php echo $_smarty_tpl->tpl_vars['item']->value['level'];?>
</div>
              <div><a href="/user/detail/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">詳細へ</a></div>
            </div>
            <div style="clear:both"></div>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</body>
</html><?php }
}
