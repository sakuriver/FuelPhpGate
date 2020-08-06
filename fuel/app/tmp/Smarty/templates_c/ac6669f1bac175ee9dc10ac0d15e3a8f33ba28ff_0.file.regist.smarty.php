<?php
/* Smarty version 3.1.36, created on 2020-08-06 15:04:05
  from '/Users/apple/Documents/GitHub/FuelPhpGate/fuel/app/views/user/regist.smarty' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f2c1be536f580_56551450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac6669f1bac175ee9dc10ac0d15e3a8f33ba28ff' => 
    array (
      0 => '/Users/apple/Documents/GitHub/FuelPhpGate/fuel/app/views/user/regist.smarty',
      1 => 1596726160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2c1be536f580_56551450 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<title>酒場</title>
</head>
<body>
    <div><p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></div>
    <div class="header" style="min-height: 80px;">
       お、傭兵志願者かい。
       それなら下の名簿に項目事項を描いてくれるかい
    </div>
    <div style="background-color:#222222; color:#EEEEEE; padding: 5px;">
        <h2 style="text-align:center">傭兵登録書</h2>
        <form action="/user/regist_top_add/" method="post"> 
            <div style="border: 1px solid #DDDDDD; padding:5px; width:350px;"><div>本名</div><input size="30" name="name" type="text"></div> 
            <div style="border: 1px solid #DDDDDD; padding:5px; width:350px;"><div>呼び名</div><input size="40" name="display_name" type="text"></div> 
            <div style="border: 1px solid #DDDDDD; padding:5px; width:350px;"><div>レベル</div><input size="40" name="level" type="text"></div> 
            <div style="border: 1px solid #DDDDDD; padding:5px; width:350px;"><div>職業</div>整備中</div> 
            <div style="border: 1px solid #DDDDDD; padding:5px; width:350px;"><input type="submit" name="submit" value="申請"></div> 
        </form>
    </div>
</body>
</html><?php }
}
