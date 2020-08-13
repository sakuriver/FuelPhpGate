<?php
/* Smarty version 3.1.36, created on 2020-08-13 15:01:42
  from '/Users/apple/Documents/GitHub/FuelPhpGate/fuel/app/views/user/regist.smarty' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f3555d6319214_72482727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac6669f1bac175ee9dc10ac0d15e3a8f33ba28ff' => 
    array (
      0 => '/Users/apple/Documents/GitHub/FuelPhpGate/fuel/app/views/user/regist.smarty',
      1 => 1597330899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3555d6319214_72482727 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<title>酒場</title>
<style>
 .hunter-form {
    border: 1px solid #DDDDDD;
    padding:5px;
    width:350px;
 }
 .hunter-sheet {
    background-color:#222222;
    color:#EEEEEE;
    padding: 5px;     
 }
 .hunter-form {
    margin-left: auto;
    margin-right: auto;
 }
</style>
</head>
<body>
    <div><p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></div>
    <div class="header" style="min-height: 80px;">
       お、傭兵志願者かい。<br/>
       それなら下の名簿に項目事項を描いてくれるかい
    </div>
    <div class="hunter-sheet">
        <h2 style="text-align:center">傭兵登録書</h2>
        <form class="" action="/user/regist_top_add/" method="post"> 
            <div class="hunter-form">
              <div>本名</div>
              <input size="30" name="name" type="text" placeholder="役所での登録名を入れてくれ"
              required="required" title="名前が入ってないのは困るぜ'>
            </div> 
            <div class="hunter-form">
              <div>呼び名</div>
              <input size="40" name="display_name" type="text" placeholder="酒場での呼び名を頼むぜ"
              required="required" title="おいおい、何て呼んだらいいんだい?">
            </div> 
            <div class="hunter-form">
              <div>レベル</div>
              <input size="40" name="level" type="text" placeholder="今のレベルを教えてくれ"
              required="required" title="レベルで依頼者が変わるんだ、頼むわ">
            </div> 
            <div class="hunter-form">
              <div>職業</div>
              整備中
            </div> 
            <div class="hunter-form"><input type="submit" name="submit" value="申請"></div> 
        </form>
    </div>
</body>
</html><?php }
}
